<tr class="order-item-row">
    <td class="text-middle"><img src="{{ asset(ImageManager::getImagePath( $orderItem->image, 50, 50, 'fit-x' )) }}" alt=""></td>
    <td class="text-middle"><a href='{{ URL::route("admin.sales.order.item", $orderItem->id) }}'>{{ $orderItem->jobNumber() }}</a></td>
    <td class="text-middle">{{ $orderItem->name }}</td>
    <td class="text-middle text-center job-status">{!! $orderItem->status_lang(true) !!}</td>
    <td class="text-middle">
        @if($orderItem->product_type != PRODUCT_DESIGN)
        {{ $orderItem->qty }} cards
        @endif
    </td>
    <td class="text-middle text-right">{{ format_currency($orderItem->price, $order->currency, false) }}</td>
    <td class="text-middle">
        @if(isset($orderItem->stuff->id))
            {{ $orderItem->stuff->full_name() }}    
        @else
            {!! Form::select("job_manager", $stuffs, $orderItem->job_stuff_id, array('class' => 'form-control job-manager')) !!}
        @endif
    </td>
    <td class="text-middle">
        @if($current_user->has_permission('sales.order.manage') && !isset($orderItem->stuff->id))
        <button type="submit" class="btn btn-info btn-assign-job" name="btn-assign-job" value="{{ $orderItem->id }}">Submit</button>
        @endif
    </td>
</tr>