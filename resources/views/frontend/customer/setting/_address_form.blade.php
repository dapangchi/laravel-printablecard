<div class="settings-table-row {{ $errors->has('first-name') ? 'has-error' : '' }}">
    <div class="left-column cell-title">FIRST NAME</div>
    <div class="right-column">
        {!! Form::text('first-name', null, array('required')) !!}
        <span class="help-block">{{ $errors->first('first-name', ':message') }}</span>
    </div>
</div>

<div class="settings-table-row {{ $errors->has('last-name') ? 'has-error' : '' }}">
    <div class="left-column cell-title">LAST NAME</div>
    <div class="right-column">
        {!! Form::text('last-name', null, array('required')) !!}
        <span class="help-block">{{ $errors->first('last-name', ':message') }}</span>
    </div>
</div>

<div class="settings-table-row {{ $errors->has('phone') ? 'has-error' : '' }}">
    <div class="left-column cell-title">PHONE</div>
    <div class="right-column">
        {!! Form::text('phone', null, array()) !!}
        <span class="help-block">{{ $errors->first('phone', ':message') }}</span>
    </div>
</div>

<div class="settings-table-row {{ $errors->has('country') ? 'has-error' : '' }}">
    <div class="left-column cell-title">COUNTRY</div>
    <div class="right-column">
        {!! Form::select('country', $countries, null, 
            array('id' => 'country', 'class' => 'country require-region', 'data-target' => '#state', 'required')) !!}
        <span class="help-block">{{ $errors->first('country', ':message') }}</span>
    </div>
</div>

<div class="settings-table-row {{ $errors->has('address') ? 'has-error' : '' }}">
    <div class="left-column cell-title">ADDRESS</div>
    <div class="right-column">
        {!! Form::text('address', null, array('required')) !!}
        <span class="help-block">{{ $errors->first('address', ':message') }}</span>
    </div>
</div>

<div class="settings-table-row {{ $errors->has('city') ? 'has-error' : '' }}">
    <div class="left-column cell-title">CITY</div>
    <div class="right-column">
        {!! Form::text('city', null, array('required')) !!}
        <span class="help-block">{{ $errors->first('city', ':message') }}</span>
    </div>
</div>

<div class="settings-table-row {{ $errors->has('state') ? 'has-error' : '' }}">
    <div class="left-column cell-title">STATE</div>
    <div class="right-column">
        {!! Form::select('state', $states, null, array('id' => 'state', 'class' => '')) !!}
        <span class="help-block">{{ $errors->first('state', ':message') }}</span>
    </div>
</div> 

<div class="settings-table-row {{ $errors->has('zipcode') ? 'has-error' : '' }}">
    <div class="left-column cell-title">ZIPCODE</div>
    <div class="right-column">
        {!! Form::text('zipcode', null, array('required')) !!}
        <span class="help-block">{{ $errors->first('zipcode', ':message') }}</span>
    </div>
</div>

<div class="settings-table-row {{ $errors->has('company') ? 'has-error' : '' }}">
    <div class="left-column cell-title">COMPANY (Optional)</div>
    <div class="right-column">
        {!! Form::text('company', null, array()) !!}
        <span class="help-block">{{ $errors->first('company', ':message') }}</span>
    </div>
</div>