<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;
use Request;
use Config;
use Redirect;
use Session;
use App;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $url = Request::url();

        $parsedUrl = parse_url($url);

        $host = explode('.', $parsedUrl['host']);

        $subdomain = $host[0];

        if(count($host) == 2){
            App::setLocale(Cookie::get('lang'));
        }else{
            if ($subdomain != 'en' && in_array($subdomain, Config::get('app.languages'))) {
                Cookie::queue('lang', $subdomain, 2628000, null, env('SESSION_DOMAIN', null));
                App::setLocale($subdomain);
            }

            if($subdomain == 'en'){
                return Redirect::to('http://' . Config::get('app.base_address'))->withCookie('lang', 'en', 2628000, null, env('SESSION_DOMAIN', null));
            }else if (count($host) > 3 || !in_array($subdomain, Config::get('app.languages'))) {
                return Redirect::to('http://' . Config::get('app.base_address'));
            }
        }
        
        return $next($request);
    }
}
