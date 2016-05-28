<div class="col-md-6">
    <div class="jobs-block">
        <h4 class="fw-medium">Track My Orders</h4>
        
        {!! Form::open(array('url' => URL::route("customer.home"), 'method' => 'post', 'autocomplete' => 'off')) !!}                
            {!! Form::text('job-number', Input::get('job-number'), array('class' => 'job-number-search', 'placeholder' => 'Search By Job Number')) !!}
        {!! Form::close() !!}
        
        <div class="job-list">
            @foreach($jobs as $item)
            <div class="job-item">
                <div class="job-number"><a href="{{ route('customer.tracking.detail', $item->order->id) }}">{{ $item->jobNumber() }}</a></div>
                <div class="job-date">{{ date('m / d / Y g:i A', strtotime($item->job_updated)) }}</div>
                <div class="clearfix"></div>
                <div class="job-name fw-medium">{{ $item->name }}</div>
                
                @include('frontend.customer.snippet.order_item_status', array('hideDate' => true))
            </div>
            @endforeach
        </div>
        
        @if(!$jobs->isEmpty())
        <div class="view-all-wrap">
            <a href="{{ route('customer.tracking') }}"><button class="btn btn-cons">VIEW ALL</button></a>
        </div>
        @endif
    </div>
</div>