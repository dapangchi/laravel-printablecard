<table class="saved-shipping-address">
    <tr>
        <td class="left-column fw-medium">DEFAULT</td>
        <td class="fw-medium">TO</td>
    </tr>
    
    @foreach($addresses as $address)
    <tr>
        <td class="left-column">
            <div class="radio radio-success">
                {!! Form::radio('default-address', 1, ($default->id == $address->id) ? true : false, 
                    array('id' => 'radio'.$address->id, 'class' => 'default-address', 'data-index' => $address->id)) !!}
                <label for="{{ 'radio'.$address->id }}"></label>
            </div>
        </td>
        <td>
            <div class="name">{{ $address->full_name() }}</div>
            <div class="phone">{{ $address->phone }}</div>
            <div class="address">{{ $address->address }}, {{ $address->city }}, {{ $address->state->name }}, {{ $address->zipcode }}, {{ $address->country->name }}</div>
            
            @if($default->id !== $address->id) 
            <div class="remove-row" data-index="{{ $address->id }}"></div>
            @endif
        </td>
    </tr>
    @endforeach
</table>