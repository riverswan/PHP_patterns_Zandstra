<?php


namespace app\Abstract_Factory;

class BloggsContactEncoder extends ContactEncoder {

	public function encode(): string {
		return "Coding data in BloggsContactEncoder format \n";
	}
}