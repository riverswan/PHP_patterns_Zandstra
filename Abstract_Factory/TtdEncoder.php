<?php

namespace app\Abstract_Factory;


abstract class TtdEncoder implements Encoder {
	abstract public function encode(): string;
}	