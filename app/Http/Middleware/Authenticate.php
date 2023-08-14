<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $this->handleUri($request);
        // return $request->expectsJson() ? null : route('login');
    }
    private function handleUri($request){
        if(!empty($request->route()->uri))
        {
            $explodedData = explode('/',$request->route()->uri);
            if(in_array('admin',$explodedData))
            {
                return route('admin.login');
            }
            else
            {
                return route('login');
            }
            
        }
        else
        {
            return route('login');
        }
        
    }
}
