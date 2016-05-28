<?php
   
if($item->product_type != PRODUCT_DESIGN) 
{
    $custom_sets = unserialize($item->custom_sets);
    $set = $item->sets;  
    if(!$item->hasCustomSets())
    {
        $cards_per_set = $item->qty / $item->sets;
        echo "$set sets / $cards_per_set cards per set";
    }
    else
    {
        echo "$set sets / various cards per set<br/>";
        foreach($item->customSets() as $r)
        {
            echo "&nbsp;-{$r['name']} : {$r['quantity']}<br/>";
        }
    }
}
?>