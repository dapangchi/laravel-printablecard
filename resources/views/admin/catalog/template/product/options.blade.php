<?php
use App\Models\CardTemplateOption;
$frontside = FRONTSIDE;
$backside = BACKSIDE;
?>

@if(isset($card))
    <div class="form-group {{ $errors->has('card_id') ? 'has-error' : '' }}">
        <div class="col-sm-5 col-sm-offset-2">
            {!! Form::hidden("card_id", $card->id, array('id' => 'card_id')) !!}
            {!! Form::hidden("is_product_changed", 0, array('id' => 'is_product_changed')) !!}
            {!! Form::hidden("is_option_changed", 0, array('id' => 'is_option_changed')) !!}
            <div class="help-block">{{ $errors->first('card_id', ':message') }}</div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <h5>{{ $card->name }}</h5>
        </div>
    </div>   
        
    @foreach($card->featuresSorted() as $ft)
    <div class="form-group">
        <label class="col-sm-2 control-label">{{ $ft->name }}</label>
        <div class="col-sm-9">
            @if($ft->type == DROPDOWN)
                <?php $ftValue = CardTemplateOption::dropboxValue($template_id, $ft->id); ?> 
                {!! Form::select("feature[$ft->id]", $ft->optionList(), $ftValue, array('class' => 'form-control autowidth product-option')) !!}
            @else
                @if($ft->both_side == 1)
                    <div>
                    Front:
                    @foreach($ft->optionsSorted() as $i => $opt)
                        <label class="css-input css-checkbox css-checkbox-primary">
                            @if(CardTemplateOption::hasOption($template_id, $ft->id, $opt->id, FRONTSIDE))
                                {!! Form::checkbox("feature[$ft->id][$frontside][]", $opt->id, true, array('class' => 'product-option checkbox')) !!}
                            @else
                                {!! Form::checkbox("feature[$ft->id][$frontside][]", $opt->id, false, array('class' => 'product-option checkbox')) !!} 
                            @endif
                            <span></span>
                            {{ $opt->name }}
                        </label>
                    @endforeach
                    </div>
                    
                    <div>
                    Back:
                    @foreach($ft->optionsSorted() as $i => $opt)
                        <label class="css-input css-checkbox css-checkbox-primary">
                            @if(CardTemplateOption::hasOption($template_id, $ft->id, $opt->id, BACKSIDE))
                                {!! Form::checkbox("feature[$ft->id][$backside][]", $opt->id, true, array('class' => 'product-option checkbox')) !!}
                            @else
                                {!! Form::checkbox("feature[$ft->id][$backside][]", $opt->id, false, array('class' => 'product-option checkbox')) !!} 
                            @endif
                            <span></span>
                            {{ $opt->name }}
                        </label>
                    @endforeach   
                    </div>
                @else
                     @foreach($ft->optionsSorted() as $i => $opt)
                        <label class="css-input css-checkbox css-checkbox-primary">
                            @if(CardTemplateOption::hasOption($template_id, $ft->id, $opt->id))
                                {!! Form::checkbox("feature[$ft->id][0][]", $opt->id, true, array('class' => 'product-option checkbox')) !!}
                            @else
                                {!! Form::checkbox("feature[$ft->id][0][]", $opt->id, false, array('class' => 'product-option checkbox')) !!} 
                            @endif
                            <span></span>
                            {{ $opt->name }}
                        </label>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
    @endforeach
@else
    <div class="form-group {{ $errors->has('card_id') ? 'has-error' : '' }}">
        <div class="col-sm-5 col-sm-offset-2">
            {!! Form::hidden("card_id", null, array('id' => 'card_id')) !!}
            <div class="help-block">{{ $errors->first('card_id', ':message') }}</div>
        </div>
    </div>
@endif