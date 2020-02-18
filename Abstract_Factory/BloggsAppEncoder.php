<?php

namespace my;
require_once "AppEncoder.php";

class BloggsAppEncoder extends AppEncoder {
	public function encode(): string {
		return "Coding data in BloggsCal format \n";
	}
}