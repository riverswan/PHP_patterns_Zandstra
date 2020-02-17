<?php
spl_autoload_extensions(".php");
spl_autoload_register();
$lessons1 = new Seminar(4, new TimedCostStrategy());
$lessons2 = new Lecture(4, new FixedCostStrategy());


$mgr = new RegistrationMgr();
$mgr->register($lessons1);
$mgr->register($lessons2);