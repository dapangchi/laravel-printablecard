<?php

if(!function_exists('admin_url')) 
{
    function admin_url($uri='')
    {
        return URL::to("admin/$uri");
    }
}

if(!function_exists('upload_url')) 
{
    function upload_url($uri='')
    {
        return URL::to(UPLOADS_BASE . "/$uri");
    }
}

if(!function_exists('upload_path')) 
{
    function upload_path($uri='')
    {
        return public_path(UPLOADS_BASE . "/$uri");
    }
}

if(!function_exists('upload_uri')) 
{
    function upload_uri($uri='')
    {
        return UPLOADS_BASE . "/$uri";
    }
}

if(!function_exists('current_url')) 
{
    function current_url()
    {
        $url = Request::url();
        return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
    }
}

if(!function_exists('current_url_template')) 
{
    function current_url_for_template()
    {
        $url = Request::url();
        
        $items = array();
        foreach($_GET as $key => $val)
        {
            if($key != 'page') $items[] = $key . '=' . $val;
        }
        
        return count($items) > 0 ? $url.'?'.implode('&', $items) : $url;
    }
}

if ( ! function_exists('prep_url'))
{
    /**
     * Prep URL
     *
     * Simply adds the http:// part if no scheme is included
     *
     * @param   string  the URL
     * @return  string
     */
    function prep_url($str = '')
    {
        if ($str === 'http://' OR $str === '')
        {
            return '';
        }
        if($str === '#')
        {
            return $str;
        }
        
        $url = parse_url($str);
        if ( ! $url OR ! isset($url['scheme']))
        {
            return 'http://'.$str;
        }
        return $str;
    }
}

if(!function_exists('my_route')) 
{
    function my_route($route)
    {
        if(!Session::has($route)) return route($route);
        
        $params = Session::get($route);
        return route($route, $params);
    }
}

if(!function_exists('inet_aton')) 
{
    function inet_aton($ip)
    {
        if ($ip == "") {
            return 0;
        } else {
            $ips = explode (".", "$ip");
            return ($ips[3] + $ips[2] * 256 + $ips[1] * 256 * 256 + $ips[0] * 256 * 256 * 256);
        }
    }
}