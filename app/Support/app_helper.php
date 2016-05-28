<?php 

use App\Models\Setting;
use App\Libraries\MyCart;
use App\Libraries\MyImageManager;
                               
if ( ! function_exists('force_redirect'))
{
    function force_redirect($uri = '', $method = 'location', $http_response_code = 302)
    {
        if ( ! preg_match('#^https?://#i', $uri))
        {
            $uri = url($uri);
        }

        switch($method)
        {
            case 'refresh': 
                header("Refresh:0;url=".$uri);
                break;
            default: 
                header("Location: ".$uri, TRUE, $http_response_code);
                break;
        }
        exit;
    }
}

if(!function_exists('mkpath')) 
{
    function mkpath($path)
    {
        if(@cmkdir($path) or file_exists($path)) return true;
        return (mkpath(dirname($path)) and cmkdir($path));
    }
    function cmkdir($path)
    {
        $result = mkdir($path);
        if($result)
        {
            if(!file_exists($path . '/index.html')) 
            {
                $str = '<html><head><title>403 Forbidden</title></head><body><p>Directory access is forbidden.</p></body></html>';

                $file = fopen($path . '/index.html', 'w');
                fwrite($file, $str);
                fclose($file);
            }
        }

        return $result;
    }
}

if(!function_exists('the_content')) 
{
    function the_content($str='')
    {
        return nl2br($str);
    }
}

if(!function_exists('format_currency')) 
{
    function format_currency($number, $currency='', $convert=true)
    {
        if($currency == '')
        {
            $currency = MyCart::getCurrency();
        }
        
        $result = '';
        if($currency == 'USD')
        {
            $result = '$ ' . number_format($number, 2);
        }
        else
        {
            if($convert == true)
            {
                //get currency rate from db
                $rate = Setting::getCurrencyRate();
                
                $result = '$' . number_format($number * $rate, 2) . ' CAD';
            }
            else
            {
                $result = '$' . number_format($number, 2) . ' CAD';
            }
        }
        
        return $result;
    }
}

if(!function_exists('currency_convert')) 
{
    function currency_convert($number, $currency='')
    {
        if($currency == '')
        {
            $currency = MyCart::getCurrency();
        }
        
        $result = '';
        if($currency == 'USD')
        {
            $result = number_format($number, 2);
        }
        else
        {
            //get currency rate from db
            $rate = Setting::getCurrencyRate();
            
            $result = number_format($number * $rate, 2);
        }
        
        return $result;
    }
}

if(!function_exists('format_perent')) 
{
    function format_perent($number)
    {
        return $number . '%';
    }
}

if(!function_exists('array_convert2to1')) 
{
    function array_convert2to1($array, $key, $value)
    {
        $result = array();
        foreach($array as $arr)
        {
            $result[$arr[$key]] = $arr[$value];
        }
        
        return $result;
    }
}

if ( !function_exists('creditcard_expire_months') )
{
    function creditcard_expire_months()
    {
        $result = array();
        for($i=1; $i<=12; $i++)
        {
            $result[$i] = $i;
        }
        
        return $result;
    }
}

if ( !function_exists('creditcard_expire_years') )
{
    function creditcard_expire_years($years=10)
    {
        $result = array();
        $from = date('Y');
        for($i=$from; $i<=$from+$years; $i++)
        {
            $result[$i] = $i;
        }
        
        return $result;
    }
}

if ( !function_exists('get_transit_time') )
{
    function get_transit_time($code)
    {
        $codes = [
            'ONE_DAYS' => '1 days',
            'TWO_DAYS' => '2 days',
            'THREE_DAYS' => '3 days',
            'FOUR_DAYS' => '4 days',
            'FIVE_DAYS' => '5 days',
            'SIX_DAYS' => '6 days',
            'SEVEN_DAYS' => '7 days',
            'EIGHT_DAYS' => '8 days',
            'NINE_DAYS' => '9 days',
            'TEN_DAYS' => '10 days',
        ];
        
        return $codes[$code];
    }
}

if ( !function_exists('ip_details') )
{
    function ip_details($IPaddress) 
    {
        $json    = file_get_contents("http://ipinfo.io/{$IPaddress}");
        $details = json_decode($json);
        
        return $details;
    }
}

if ( !function_exists('get_country_code_by_ip') )
{
    function get_country_code_by_ip($IPaddress) 
    {
        $json    = file_get_contents("http://ipinfo.io/{$IPaddress}");
        $details = json_decode($json);
        
        return isset($details->country) ? $details->country : 'CA';
    }
}

if ( !function_exists('get_sorting_options') )
{
    function get_sorting_options() 
    {
        return array(
            SORTBY_NAME_AZ  => 'Name (A-Z)',
            SORTBY_NAME_ZA  => 'Name (Z-A)',
            SORTBY_NEWEST   => 'Newest',
            SORTBY_OLDEST   => 'Oldest',
            SORTBY_POPULARITY => 'Popularity'
        );
    }
}

if ( !function_exists('resize_image') )  
{
    function resize_image($path, $width=0, $height=0, $mode='real')
    {
        $image = 'frontend/img/placeholder.jpg';
        if(file_exists($path))
        {
            $image = $path;            
        }
        
        if($mode == 'real')
        {
            return asset( $image );
        }
        else
        {
            return asset(MyImageManager::imageCache( $image, $width, $height, $mode ));
        }
    }
}
////////////////////////////////////////////////////////////////////
// Lanuage & Status
////////////////////////////////////////////////////////////////////
{
    if(!function_exists('lang_service_name')) 
    {
        function lang_service_name($service_type)
        {
            if($service_type == SVC_BUSINESS_CARD)
            {
                return 'Business Card';
            }
            else if($service_type == SVC_BUSINESS_CARD_TEMPLATE)
            {
                return 'Business Card Template';
            }
            else if($service_type == SVC_INVITATION)
            {
                return 'Invitation';
            }
            else if($service_type == SVC_INVITATION_TEMPLATE)
            {
                return 'Invitation Template';
            }
            else if($service_type == SVC_DESIGN_SERVICES)
            {
                return 'Design Services';
            }
            
            return 'Business Card';
        }
    }

    if(!function_exists('order_status_list')) 
    {
        function order_status_list()
        {
            return array(
                ORDER_PENDING => 'Pending',
                ORDER_NEW => 'New',
                ORDER_PROCESSING => 'Processing',
                ORDER_COMPLETED => 'Completed',
                ORDER_REFUNDED => 'Refunded'
            );
        }
    }
}

////////////////////////////////////////////////////////////////////
//sortable table
////////////////////////////////////////////////////////////////////
{
    if(!function_exists('sort_th')) 
    {
        function sort_th($base_uri, $col_label, $order_field, $text_align='center')
        {
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            $class = 'sorting';
            if($order_field == $order)
            {
                if($order_by == 'asc') 
                {
                    $class = 'sorting_asc';
                }
                else 
                {
                    $class = 'sorting_desc';
                }
            }
            
            $link = url($base_uri . sort_link($order_field)); 
            $result = "<th class='sort_th text-$text_align $class' data-href='$link'>$col_label</th>";
            return $result;        
        } 
    }

    if(!function_exists('sort_th_with_route')) 
    {
        function sort_th_with_route($route, $col_label, $order_field, $text_align='center')
        {
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            $class = 'sorting';
            if($order_field == $order)
            {
                if($order_by == 'asc') 
                {
                    $class = 'sorting_asc';
                }
                else 
                {
                    $class = 'sorting_desc';
                }
            }
            
            $link = URL::route($route, sort_link_with_route($order_field)); 
            $result = "<th class='sort_th text-$text_align $class' data-href='$link'>$col_label</th>";
            return $result;        
        } 
    }

    if ( !function_exists('sort_link') )
    {
        function sort_link($order_field='')
        {     
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            $stack = array();
            $stack[] = "order=" . $order_field;  
            if($order == $order_field) $stack[] = 'orderby=' . ($order_by == 'asc' ? 'desc' : 'asc');         
            else $stack[] = 'orderby=asc';
            
            $query = '';
            if(!empty($stack))
            {
                $query .= '?' . join('&', $stack);
            }
            
            return $query;
        }
    }

    if ( !function_exists('sort_link_with_route') )
    {
        function sort_link_with_route($order_field='')
        {     
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            $stack = array();
            $stack[] = "order=" . $order_field;  
            if($order == $order_field) $stack[] = 'orderby=' . ($order_by == 'asc' ? 'desc' : 'asc');         
            else $stack[] = 'orderby=asc';
            
            $query = '';
            if(!empty($stack))
            {
                $query .= join('&', $stack);
            }
            
            return $query;
        }
    }

    if ( !function_exists('paginate_links') )
    {
        function paginate_links($rows)
        {
            if(empty($rows)) return '';
            
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            if($order != '' && $order_by != '')
            {
                $rows->appends(['order' => $order])
                    ->appends(['orderby' => $order_by]);
            }
            
            return $rows->render();    
        }
    }

    if ( !function_exists('paginate_links_with_params') )
    {
        function paginate_links_with_params($rows)
        {
            if(empty($rows)) return '';
            
            foreach(Request::all() as $key => $value)
            {
                $rows->appends([$key => $value]);
            }
            
            return $rows->render(new App\Libraries\Pagination($rows));    
        }
    }
    
    if ( !function_exists('paginate_links_with_params2') )
    {
        function paginate_links_with_params2($rows)
        {
            if(empty($rows)) return '';
            
            foreach(Request::all() as $key => $value)
            {
                $rows->appends([$key => $value]);
            }
            
            return $rows->render(new App\Libraries\Pagination2($rows));    
        }
    }
}