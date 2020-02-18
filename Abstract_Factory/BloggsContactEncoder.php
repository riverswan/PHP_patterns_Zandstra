<?php


namespace my;
require_once "ContactEncoder.php";

class BloggsContactEncoder extends ContactEncoder {

	public function encode(): string {
		return "Coding data in BloggsContactEncoder format \n";
	}
}