@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">{{ $page_title }} - Add Bubble</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <div class="block-content">
            <div id="image-wrapper" style="position:relative;">
                <img id="image-source" src="{{ asset($image->image) }}" width="100%"/>
                
                @foreach($image->bubbles as $bubble)
                    <label id="bubble{{ $bubble->id }}" class="bubble" style="left: {{ $bubble->posx }}%; top: {{ $bubble->posy }}%; display:none;" data-index="{{ $bubble->id }}" data-label="{{ $bubble->label }}" data-link="{{ $bubble->link }}">{{ $bubble->label }}<span><i class="si si-close"></i></span></label>
                @endforeach
            </div>    
        </div>
    </div>
</div>

@stop

@section('additional')
<div class="modal fade" id="bubble-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(array('url' => route("$base_route.bubbles.store"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'bubble-form', 'autocomplete' => 'off', 'files' => true)) !!}
                <div class="block block-themed block-transparent remove-margin-b">
                    {!! Form::hidden('product_id', $product->id) !!}
                    {!! Form::hidden('image_id', $image->id) !!}
                    
                    {!! Form::hidden('bubble-posx', null, array('id' => 'bubble-posx')) !!}
                    {!! Form::hidden('bubble-posy', null, array('id' => 'bubble-posy')) !!}
                    {!! Form::hidden('bubble-id', null, array('id' => 'bubble-id')) !!}
                    
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li>
                        </ul>
                        <h3 class="block-title">Bubble Information</h3>
                    </div>
                    <div id="tracking-form-content" class="block-content">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="promotion_start_date">Label</label>
                            <div class="col-sm-10">
                                {!! Form::text('bubble-label', null, array('class' => 'form-control', 'id' => 'bubble-label', 'placeholder' => '', 'required')) !!}
                            </div>
                        </div>  
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="promotion_start_date">Link</label>
                            <div class="col-sm-10">
                                {!! Form::text('bubble-link', null, array('class' => 'form-control', 'id' => 'bubble-link', 'placeholder' => '', 'required')) !!}
                            </div>
                        </div>  
                    </div>
                    
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary" type="submit" id="btn-save-bubble">Save</button>
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop

@section('styles')
@stop

@section('scripts')
<script>
ajaxRemoveBubbleUrl = '{{ route("$base_route.bubbles.remove") }}';
ajaxRepositionBubbleUrl = '{{ route("$base_route.bubbles.reposition") }}';
</script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="{{ asset('admins/js/pages/catalog_card_image.js') }}"></script>
@stop