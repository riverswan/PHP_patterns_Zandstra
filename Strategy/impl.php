<?php
spl_autoload_extensions(".php");
spl_autoload_register();
$lesson[] = new Seminar(4, new TimedCostStrategy());
$lesson[] = new Lecture(4, new FixedCostStrategy());