<?php


namespace my;
require_once "Encoder.php";

abstract class ContactEncoder implements Encoder {
	abstract public function encode(): string;
}