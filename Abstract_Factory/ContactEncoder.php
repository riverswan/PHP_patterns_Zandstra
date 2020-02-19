<?php


namespace app\Abstract_Factory;


abstract class ContactEncoder implements Encoder {
	abstract public function encode(): string;
}