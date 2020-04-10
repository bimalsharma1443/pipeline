<?php

namespace App\Filter;

class Order extends Filter
{

	public function applyFilter($handler)
	{
		return $handler->orderby('name',request($this->getFilterName()));
	}

}