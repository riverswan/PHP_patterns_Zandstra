<?php

namespace app\Abstract_Factory;

class BloggsAppEncoder extends AppEncoder {
	public function encode(): string {
		return "Coding data in BloggsCal format \n";
	}
}