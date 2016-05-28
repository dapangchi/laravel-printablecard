@if($settings['site.patience'] == YES)
<div id="custom-notification">Our new website is currently under construction. Thank you for your patience while we sort out the issues. Please email <a href="mailto:{{ $settings['email.saler_email'] }}">{{ $settings['email.saler_email'] }}</a> if you require assistance ordering or have any questions.</div>    
@endif