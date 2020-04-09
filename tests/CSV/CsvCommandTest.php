<?php

namespace tests\CSV;

use Console\CsvCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class CsvCommandTest extends TestCase
{
    /** @var CommandTester */
    private $commandTester;

    protected function setUp(): void
    {
        $application = new Application();
        $application->add(new CsvCommand());
        $command = $application->find('csv');
        $this->commandTester = new CommandTester($command);
    }

    protected function tearDown(): void
    {
        $this->commandTester = null;
    }

    public function testExecute()
    {
        $this->commandTester->execute([]);
        $this->assertStringContainsString('Generating CSV.....Please find CSV at :', $this->commandTester->getDisplay());
        $this->assertStringContainsString('.csv', $this->commandTester->getDisplay());
    }
}