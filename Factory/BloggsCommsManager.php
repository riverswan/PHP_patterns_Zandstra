<?php
spl_autoload_register();

class BloggsCommsManager extends CommsManager {

	public function getHeaderText(): string {
		return "BlogsCall upper title \n";
	}

	public function getAppEncoder(): AppEncoder {
		return new BloggsAppEncoder();
	}

	public function getFooterText(): string {
		return "BlogsCall footer title \n";
	}
}
