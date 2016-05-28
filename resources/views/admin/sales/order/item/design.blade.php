<?php 
use App\Models\OrderItem;
$designInfo = $item->designInfo(); 
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
                <li>
                    {!! the_content($item->description) !!}
                </li>
                <li>
                    Note: {!! the_content($order->shipping_note) !!}     
                </li>
            </ul>
        </td>
        <td colspan="2">
            <!--<div class="text-warning">Waiting For File</div>-->
            Date : <?php echo date('Y-m-d', strtotime($item->job_updated)); ?><br/>
            <!--<a href="#">Add Tracking#</a>-->
        </td>
        <td></td>
    </tr> 
    <tr>
        <td class="text-middle">Job Status</td>
        <td class="text-middle">
            @if($item->job_status != JOB_UNASSIGNED)
                {!! Form::select('job_status', OrderItem::statusArray(true), $item->job_status, array('class' => 'form-control', 'required')) !!}
            @else
                {{ $item->status_lang() }}   
            @endif
        </td>
        <td class="text-middle">
            @if($current_user->has_permission('sales.order.manage'))
                @if($item->job_status != JOB_UNASSIGNED)
                <input type="submit" class="btn btn-info" name="btn-job-complete" value="Complete"/>
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
    
    @if($designInfo && $designInfo->logo_require == YES)
        <!--Logo Styles--> 
        <tr>
            <td colspan="10"><h4>Logo Styles</h4></td>
        </tr>
        <tr>
            <td colspan="10">
                <?php $logoSamples = json_decode($designInfo->logo_samples); ?>
                @if(is_array($logoSamples))
                    @foreach($logoSamples as $logo)
                    <a href="{{ url($logo) }}" target="_blank"><img src="{{ asset(ImageManager::getImagePath( $logo, 150, 150, 'fit-x' )) }}"/></a>
                    @endforeach
                @endif
            </td>
        </tr>
        <!--End Logo Styles-->
        
        <!--Logo Design Breif--> 
        <tr>
            <td colspan="10"><h4>Logo Design Brief</h4></td>
        </tr>
        <tr>
            <td colspan="10">
                <table class="table">
                <colgroup>
                    <col width="300"/>
                    <col width=""/>
                </colgroup>
                <tbody>
                    <tr>
                        <td>Primary Contact Email</td>
                        <td>{{ $designInfo->logo_email }}</td>
                    </tr>    
                    <tr>
                        <td>Name of your business</td>
                        <td>{{ $designInfo->logo_business }}</td>
                    </tr>    
                    <tr>
                        <td>Industry of your business</td>
                        <td>{{ $designInfo->logo_industry }}</td>
                    </tr>    
                    <tr>
                        <td>More Information</td>
                        <td>{{ $designInfo->logo_audience }}</td>
                    </tr>
                    <tr>
                        <td colspan="10">&nbsp;</td>
                    </tr>
                    
                    <tr>
                        <td><h5>Logo Examples</h5></td>
                        <td></td>
                    </tr>    
                    @foreach($item->filesBy(0) as $file)
                    <tr>
                        <td><a href="{{ url($file->path) }}" target="_blank">{{ $file->name }}</a></td>
                        <td>{{ $file->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </td>
        </tr>
        <!--End Logo Design Breif--> 
    @endif
    
    @if($designInfo)
        <!--Card Design Breif--> 
        <tr>
            <td colspan="10"><h4>Business Card Design Brief</h4></td>
        </tr>
        <tr>
            <td colspan="10">
                <table class="table">
                <colgroup>
                    <col width="300"/>
                    <col width=""/>
                </colgroup>
                <tbody>
                    <tr>
                        <td>Primary Contact Email</td>
                        <td>{{ $designInfo->card_email }}</td>
                    </tr>    
                    <tr>
                        <td>Name of your business</td>
                        <td>{{ $designInfo->card_business }}</td>
                    </tr>    
                    <tr>
                        <td>Business Card Type</td>
                        <td>{{ $designInfo->card_type_name }}</td>
                    </tr>    
                    <tr>
                        <td>More Information</td>
                        <td>{{ $designInfo->card_information }}</td>
                    </tr>
                    <tr>
                        <td colspan="10">&nbsp;</td>
                    </tr>
                    
                    <tr>
                        <td><h5>Company Logo</h5></td>
                        <td></td>
                    </tr>    
                    @foreach($item->filesBy(1) as $file)
                    <tr>
                        <td><a href="{{ url($file->path) }}" target="_blank">{{ $file->name }}</a></td>
                        <td>{{ $file->created_at }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="10">&nbsp;</td>
                    </tr>
                    
                    <tr>
                        <td><h5>Business Card Examples</h5></td>
                        <td></td>
                    </tr>    
                    @foreach($item->filesBy(2) as $file)
                    <tr>
                        <td><a href="{{ url($file->path) }}" target="_blank">{{ $file->name }}</a></td>
                        <td>{{ $file->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </td>
        </tr>
        <!--End Card Design Breif--> 
    @endif
</tbody>
</table>