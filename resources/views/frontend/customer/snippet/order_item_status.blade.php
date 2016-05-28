<?php
    $class = 'none';
    $lang = '';
    if($item->job_status == JOB_UNASSIGNED) {
        $class = 'none';
        $lang = 'Job Accepted';
    } else if($item->job_status == JOB_WORKING) {
        $class = 'waiting';
        $lang = 'Job Progressing';
    } else if($item->job_status == JOB_FILE_ISSUE) {
        $class = 'warning';
        $lang = 'Design File Issues';
    } else if($item->job_status == JOB_WAITING_FILE) {
        $class = 'warning';
        $lang = 'Waiting For File / Info';
    } else if($item->job_status == JOB_DESIGN_PROOFING) {
        $class = 'primary';
        $lang = 'Design / Proofing';
    } else if($item->job_status == JOB_IN_PRODUCTION) {
        $class = 'success';
        $lang = 'In Production';
    } else if($item->job_status == JOB_REPRINT) {
        $class = 'waiting';
        $lang = 'Reprint';
    } else if($item->job_status == JOB_SHIPPED) {
        $class = 'success';
        
        if($item->job_tracking_number != '')
            $lang = sprintf('Shipped Via %s: <a href="%s" target="_blank">Tracking #%s</a>', $item->jobTrackingMethodName(), $item->jobTrackingUrl(), $item->job_tracking_number);
        else
            $lang = sprintf('Shipped Via %s', $item->jobTrackingMethodName());
    } else if($item->job_status == JOB_COMPLETED) {
        $class = 'success';
        $lang = 'Job Completed';
    } else if($item->job_status == JOB_REFUNDED) {
        $class = 'none';
        $lang = 'Refunded';
    }
    
?>

<div class="status-{{ $class }}">
    <div class="status">{!! $lang !!}</div>
                                
    @if(!isset($hideDate))
    <div class="order-date">{{ date('m / d / Y g:i A', strtotime($item->job_updated)) }}</div>
    @endif
</div>