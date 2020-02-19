<?php
namespace app\Abstract_Factory;

abstract class AppEncoder implements Encoder {
	abstract public function encode(): string;
}