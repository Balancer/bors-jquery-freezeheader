<?php

namespace B2\jQuery;

class FreezeHeader
{
	static function appear($element)
	{
		\B2\jQuery::load();

//		bors_use('http://cdn.wysibb.com/js/jquery.wysibb.min.js');
		jquery::on_ready("\$($element).freezeHeader();");
	}
}
