{!! Form::open(array('url' => URL::route('design.category.upload'), 'name' => 'productform', 'id' => 'product-form', 'method' => 'post')) !!}
    {!! Form::hidden('design-package', $orderItem->product_id) !!}
    {!! Form::hidden('agree', 1) !!}
    {!! Form::hidden('reference_order_id', $orderItem->order->id) !!}
{!! Form::close() !!}

<script>
document.productform.submit();
</script>