<?php

namespace Onilopic\Command;

use Symfony\Component\Console\Application;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class ParenthesisCheckerCommandTest extends TestCase
{
    public function testExecute()
    {
        $path =  '../../../example/test.txt';
        $string = file_get_contents($path);
//        $application = new Application();
        $command = new ParenthesisCheckerCommand();
        $commandTester = new CommandTester($command);
        $commandTester->execute(['path' => $path]);

        $commandTester->assertCommandIsSuccessful();

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        $this->assertStringContainsString($string, $output);
        $this->assertStringContainsString(1, $output);
    }
}
