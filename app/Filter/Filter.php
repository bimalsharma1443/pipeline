<?php

namespace App\Filter;

use Closure;
use Illuminate\Support\Str;

abstract class Filter
{

	public function handle($request,$next)
	{

		if(!request()->has($this->getFilterName())) {
    		return $next($request);
    	}

    	$handler = $next($request);
    	
    	return $this->applyFilter($handler);
	}


	protected function getFilterName()
	{
		return str::snake(class_basename($this));
	}


	protected abstract function applyFilter($handler);


}