<?php


namespace my;
require_once "TtdEncoder.php";

class BloggsTtdencoder extends TtdEncoder {
	public function encode(): string {
		return "Coding data in TtdEncoder format \n";
	}
}