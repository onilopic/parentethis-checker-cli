#!/usr/bin/env php
<?php

declare(strict_types=1);

include_once('../vendor/autoload.php');

use Onilopic\Command\ParenthesisCheckerCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new ParenthesisCheckerCommand());

try {
    $application->run();
} catch (\Exception $e) {
    echo $e->getMessage();
}



