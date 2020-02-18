<?php
namespace my;
require_once "Encoder.php";

abstract class AppEncoder implements Encoder {
	abstract public function encode() : string ;
}