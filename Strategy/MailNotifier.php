<?php


class MailNotifier extends Notifier {
	public function inform($msg): void {
		echo(sprintf("Request is send by: %s with message %s \n", __CLASS__, $msg));
	}
}