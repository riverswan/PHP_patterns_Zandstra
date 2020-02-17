<?php


class RegistrationMgr {
	public function register(Lesson $lesson){
		$notifier = Notifier::getNotifier();
		$notifier->inform(sprintf("New lesson: price is %s",$lesson->cost()));
	}
}