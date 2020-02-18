<?php

namespace PHP_patterns_Zandstra\Abstract_Factory;
//spl_autoload_register();

abstract class CommsManager {

	const APPT = 1;
	const TTD = 2;
	const CONTACT = 3;


	abstract public function getHeaderText(): string;

	abstract public function make(int $flag): Encoder;

	abstract public function getFooterText(): string;

}