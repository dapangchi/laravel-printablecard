<?php
use App\Models\OrderItem;
?>

<table class="table table-borderless table-order">
    <colgroup>
        <col width="120"/>
        <col width="180"/>
        <col width=""/>
        <col width="100"/>
        <col width="130"/>
        <col width="110"/>
    </colgroup>
    <tbody>
        <!--Item Detail-->
        <tr>
            <td class="text-middle"><h2>{{ $order->number() }}</h2></td>
            <td class="text-middle"><h3 class="text-gray">{{ $item->jobNumber() }}</h3></td>
            <td style="vertical-align: middle"><div style="color:#65c1af;">@if($item->referenceOrder) Re-order: {{ $item->referenceOrder->number() }} @endif</div></td>
            <td></td>
            <td></td>
            <td class="text-middle"><!--<a class="" href='{{ URL::route("admin.sales.order.detail", $order->id) }}'>Order Detail</a>--></td>
        </tr>
        <tr>
            <td class="text-middle">
                {{ $order->customer_name }}<br/>
                {{ $order->customer_phone }}<br/>
                <a href="mailto:{{ $order->customer_email }}">{{ $order->customer_email }}</a>
            </td>
            <td>Order Date: <?php echo date('Y-m-d', strtotime($order->created_at)); ?></td>
            <td></td>
            
            @if($item->job_status != JOB_COMPLETED && $item->job_status != JOB_REFUNDED)
            <td class="text-right" style="padding-top:20px;">Staff</td>
            <td>{!! Form::select('job_manager', $stuffs, $item->job_stuff_id, array('class' => 'form-control', 'required')) !!}</td>
            <td>
                @if($current_user->has_permission('sales.order.manage'))
                <input type="submit" class="btn btn-info" name="btn-assign-job" value="Submit"/>
                @endif
            </td>
            @endif
            
            @if($item->job_status == JOB_COMPLETED || $item->job_status == JOB_REFUNDED)
            <td class="text-right">Staff</td>
            <td colspan="2">
                @if(isset($item->stuff->id))
                    {{ $item->stuff->full_name() }}
                @endif
            </td>
            @endif
        </tr>
        <tr>
            <td class="text-middle" rowspan="4" colspan="2"><img src="{{ asset(ImageManager::getImagePath( $item->image, 320, 320, 'fit-x' )) }}" alt=""></td>
            <td rowspan="4">
                <h5>{{ $item->name }}</h5>
                
                <ul style="list-style:none; padding-left:0;">
                    @if($item->template_uid)
                    <li>Template ID: {{ $item->template_uid }}
                    @endif
                    
                    <li>Quantity: 
                        @if($item->hasCustomSets())
                            {{ $item->qty }} cards total for various names<br/>
                            
                            @foreach($item->customSets() as $r)
                            &nbsp;&nbsp;{{ $r['name'] }} : {{ $r['quantity'] }}<br/>
                            @endforeach
                        @else
                            {{ $item->qty }} cards
                        @endif
                    </li>
                    
                    <li>Set: {{ $item->sets }}</li>
                    
                    @foreach($item->features() as $ft)
                    <li>
                        {{ $ft->feature_name }}: 
                        
                        <?php $options = $item->featureOptions($ft->feature_id); ?>
                        @foreach($options as $opt)
                            {{ $opt->option_name }}
                            <?php 
                            if($opt->side_type == FRONTSIDE) echo "(Front)"; 
                            else if($opt->side_type == BACKSIDE) echo "(Back)";
                            ?>
                        @endforeach
                    </li>
                    @endforeach
                    
                    @if($item->product_type == PRODUCT_TEMPLATE)
                    <!--<li>
                        Front Side Content: {{ $item->template_front }}
                    </li>
                    <li>
                        Back Side Content: {{ $item->template_back }}
                    </li>-->
                    @endif
                    
                    <li>
                        Note: {!! the_content($order->shipping_note) !!}     
                    </li>
                </ul>
            </td>
            <td colspan="2">
                <!--<div class="text-warning">Waiting For File</div>-->
                Date : <?php echo date('Y-m-d', strtotime($item->job_updated)); ?><br/>
                
                @if($item->job_tracking_method != '')
                    Shipped By {{ $item->jobTrackingMethodName() }}
                    
                    @if($item->job_tracking_number != '')
                    : <a id="btn-add-tracking" class="cursor-pointer">Tracking# {{ $item->job_tracking_number }}</a>
                    @else
                    : <a id="btn-add-tracking" class="cursor-pointer">Edit</a>
                    @endif
                @else
                    <a id="btn-add-tracking" class="cursor-pointer">Add Tracking#</a>
                @endif
            </td>
            <td></td>
        </tr> 
        <tr>
            <td class="text-middle">Job Status</td>
            <td class="text-middle">
                @if($item->job_status != JOB_UNASSIGNED)
                    {!! Form::select('job_status', OrderItem::statusArray(), $item->job_status, array('class' => 'form-control', 'required')) !!}
                @else
                    {{ $item->status_lang() }}   
                @endif
            </td>
            <td class="text-middle">
                @if($current_user->has_permission('sales.order.manage'))                                
                    @if($item->job_status != JOB_UNASSIGNED)
                    <input type="submit" class="btn btn-info" name="btn-job-status" value="Submit"/>
                    @endif
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="10">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="10">&nbsp;</td>
        </tr>
        <!--End Item Detail-->
        
        <!--Uploaded Files--> 
        <tr>
            <td colspan="10"><h4>Uploaded Files</h4></td>
        </tr>
        <tr>
            <td colspan="10">
                <table class="table">
                <colgroup>
                    <col width="300"/>
                    <col width=""/>
                </colgroup>
                <tbody>
                    @foreach($item->files as $file)
                    <tr>
                        <td><a href="{{ url($file->path) }}" target="_blank">{{ $file->name }}</a></td>
                        <td>{{ $file->created_at }}</td>
                    </tr>                          
                    @endforeach
                </tbody>
                </table>
            </td>
        </tr>
        <!--End Uploaded Files-->
        
        <!--Design Info-->
        <tr>
            <td colspan="10"><h4>Design Information</h4></td>
        </tr>
        <tr>
            <td colspan="10">
                <table class="table">
                <tbody>
                    <tr>
                        <td>Front Side</td>
                    </tr>   
                    <tr>
                        <td>{!! the_content($item->template_front) !!}</td>
                    </tr>
                    <tr>
                        <td>Back Side</td>
                    </tr>
                    <tr>
                        <td>{!! the_content($item->template_back) !!}</td>
                    </tr>
                </tbody>
                </table>
            </td>
        </tr>
        <!--End Design Info-->
    </tbody>
</table>