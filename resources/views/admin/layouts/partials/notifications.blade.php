<?php
use App\Libraries\Template;

$messages = Template::get_messages();    
?>

@if (count($messages) > 0)
@foreach ($messages as $m)

<script>
alertify.set({delay: 10000});
<?php 
$msg = addslashes($m['message']);
switch($m['type'])
{
    case "danger":
        echo "alertify.error('$msg');";        
        break;
    case "success":
    default:
        echo "alertify.success('$msg');";        
        break;
}
?>
</script>

@endforeach
@endif 