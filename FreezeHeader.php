<?php

namespace B2\jQuery;

class FreezeHeader
{
	static function appear($element, $params=[])
	{
		\B2\jQuery::load();

		bors_use('/bower-asset/jquery.browser/jquery.browser.min.js');
		bors_use('/components/jquery-freezeheader/jquery.freezeheader.js');

		if($params)
			$params = \blib_json::encode_jsfunc($params);
		else
			$params = "";

		\B2\jQuery::on_ready("\$($element).freezeHeader({$params});");
	}
}
