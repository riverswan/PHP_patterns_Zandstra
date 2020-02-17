<?php
spl_autoload_register();

abstract class CommsManager {
	abstract public function getHeaderText(): string;
	abstract public function getAppEncoder() : AppEncoder;
	abstract public function getFooterText() : string ;

}