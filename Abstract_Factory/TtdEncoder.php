<?php


namespace my;
require_once "Encoder.php";

abstract class TtdEncoder implements Encoder {
	abstract public function encode(): string;
}