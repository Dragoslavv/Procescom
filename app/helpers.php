<?php
if(! function_exists('subDomain')) {
    function subDomain(){
        if(isset($_SERVER['HTTP_HOST'])){
            return explode('.', $_SERVER['HTTP_HOST'])[0];
        }
        return env('ADMIN_SUB_DOMAIN');
    }
}
if (! function_exists('UberAdmin')) {
    function UberAdmin()
    {
        return env('ADMIN_SUB_DOMAIN', 'admin') == subDomain();
    }
}