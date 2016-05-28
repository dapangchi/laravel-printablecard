<?php
    $trackingMethods = [
        SHIP_BY_FEDEX => 'Fedex',
        SHIP_BY_CA_POST => 'Canada Post',
        SHIP_BY_UPS => 'UPS',
    ];
?>

<div class="form-group">
    <label class="col-sm-4 control-label" for="promotion_start_date">Tracking Number</label>
    <div class="col-sm-8">
        {!! Form::select('tracking_method', $trackingMethods, isset($item->job_tracking_method) ? $item->job_tracking_method : null, array('class' => 'form-control', 'id' => 'tracking_number', 'placeholder' => '', 'required')) !!}
    </div>
</div>  

<div class="form-group">
    <label class="col-sm-4 control-label" for="promotion_start_date">Tracking Number</label>
    <div class="col-sm-8">
        {!! Form::text('tracking_number', isset($item->job_tracking_number) ? $item->job_tracking_number : null, array('class' => 'form-control', 'id' => 'tracking_number', 'placeholder' => '')) !!}
    </div>
</div>  