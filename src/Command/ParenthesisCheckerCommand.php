<?php

namespace Onilopic\Command;


use Onilopic\ParenthesisChecker\ParenthesisChecker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ParenthesisCheckerCommand extends Command
{
    protected static $defaultName = 'app:check-parenthesis';
    protected static $defaultDescription = 'CLI app used parenthesis-checker';

    protected function configure(): void
    {
        $this->addArgument('path', InputArgument::REQUIRED, 'The path to file with string for checking.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // запрашивает путь до файла, в котором хранится строка, которую он будет обрабатывать.
        $path = $input->getArgument('path');
        //По переданному пути, исполняемый файл читает строку целиком
        $string = file_get_contents($path);
        // и передаёт её в вашу бибилотеку
        $checker = new ParenthesisChecker($string);
        $result = $checker->match();
        // и выводит результат в терминал.
        $output->writeln([$string, $result]);

        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;

        // or return this to indicate incorrect command usage; e.g. invalid options
        // or missing arguments (it's equivalent to returning int(2))
        // return Command::INVALID
    }
}