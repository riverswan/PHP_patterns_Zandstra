<?php
namespace abstract_factory;


abstract class AppEncoder implements Encoder {
	abstract public function encode() : string ;
}