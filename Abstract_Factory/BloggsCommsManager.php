<?php
namespace PHP_patterns_Zandstra\Abstract_Factory;
use AbstractFactory\CommsManager;
//spl_autoload_register();

class BloggsCommsManager extends CommsManager {

	public function getHeaderText(): string {
		return "BlogsCall upper title \n";
	}

	public function getFooterText(): string {
		return "BlogsCall footer title \n";
	}


	public function make(int $flag): Encoder {
//		switch ($flag) {
//			case self::APPT :
//				return new BloggsAppEncoder();
//			case self::TTD :
//				return new BloggsTtdencoder();
//			case self::CONTACT :
//				return new BloggsContactEncoder();
//		}
	}
}
