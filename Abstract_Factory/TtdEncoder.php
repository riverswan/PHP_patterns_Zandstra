<?php


namespace abstract_factory;


abstract class TtdEncoder implements Encoder {
	abstract public function encode(): string;
}