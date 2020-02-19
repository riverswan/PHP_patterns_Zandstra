<?php


namespace app\Abstract_Factory;

class BloggsTtdencoder extends TtdEncoder {
	public function encode(): string {
		return "Coding data in TtdEncoder format \n";
	}
}