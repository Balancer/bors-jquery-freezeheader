<?php

namespace B2\jQuery;

class FreezeHeader
{
	static function appear($element)
	{
		\B2\jQuery::load();

		bors_use('/bower-asset/jquery.browser/dist/jquery.browser.min.js');
		bors_use('/components/jquery-freezeheader/jquery.freezeheader.js');
		\B2\jQuery::on_ready("\$($element).freezeHeader();");
	}
}
