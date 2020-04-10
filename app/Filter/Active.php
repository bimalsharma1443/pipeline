<?php

namespace App\Filter;

class Active extends Filter
{

	public function applyFilter($handler)
	{
		return $handler->where('status',request($this->getFilterName()));
	}

}