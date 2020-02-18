<?php


namespace abstract_factory;


class BloggsTtdencoder extends TtdEncoder {
	public function encode(): string {
		return "Coding data in TtdEncoder format \n";
	}
}