<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bestCow = new Cow('Hello you');

$bestCow->setEyes('oO')
    ->setTongue('U');
echo $bestCow;