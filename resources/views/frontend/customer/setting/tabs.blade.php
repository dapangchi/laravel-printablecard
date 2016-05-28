<div class="settings-nav-wrap">
    <ul class="settings-nav">
        <li class="@if($page=='account') active @endif"><a href="{{ route('customer.setting.account') }}">ACCOUNT SETTING</a></li>
        <li class="@if($page=='password') active @endif"><a href="{{ route('customer.setting.password') }}">PASSWORD</a></li>
        <li class="@if($page=='shipping') active @endif"><a href="{{ route('customer.setting.shipping') }}">SHIPPING</a></li>
        <li class="@if($page=='billing') active @endif"><a href="{{ route('customer.setting.billing') }}">BILLING</a></li>
    </ul>
</div>