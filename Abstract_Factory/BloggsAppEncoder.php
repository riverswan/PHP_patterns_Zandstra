<?php

namespace abstract_factory;

class BloggsAppEncoder extends AppEncoder {
	public function encode(): string {
		return "Coding data in BloggsCal format \n";
	}
}