<?php


namespace abstract_factory;


class BloggsContactEncoder extends ContactEncoder {

	public function encode(): string {
		return "Coding data in BloggsContactEncoder format \n";
	}
}