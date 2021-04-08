<?php

include_once(__DIR__ . "/classes/autoload.php");

new CBase(['message' => 'This is a task']);

echo CBase::getParam('message');