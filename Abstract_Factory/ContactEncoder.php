<?php


namespace abstract_factory;


abstract class ContactEncoder implements Encoder {
	abstract public function encode(): string;
}