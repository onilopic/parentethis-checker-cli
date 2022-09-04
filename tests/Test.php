<?php


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testCommandHasNotEmptyName()
    {
        $command = new \Onilopic\Command\ParenthesisCheckerCommand();
        $this->assertNotEmpty($command->getName(), 'Не указана название команды!');
    }

    public function testCommandDescription()
    {
        $command = new \Onilopic\Command\ParenthesisCheckerCommand();
        $this->assertEquals('CLI app used parenthesis-checker', $command->getDescription());
    }
}
