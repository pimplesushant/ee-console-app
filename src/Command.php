<?php namespace Console;

use OzdemirBurak\JsonCsv\File\Json;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Command
 * @package Console
 */
class Command extends SymfonyCommand
{
    /**
     * @var Json
     */
    private $json;

    /**
     * Command constructor.
     */
    public function __construct()
    {
        $this->json = new Json('data.json');
        parent::__construct();
    }

    /**
     * @param OutputInterface $output
     */
    protected function csv(OutputInterface $output)
    {
        $output->writeln(["This is Console App for JSON to CSV Conversion!"]);
        $output->write('Generating CSV.....');
        $csvPath = $this->generateCSV();
        $output->write('Please find CSV at : ' . $csvPath);
    }

    /**
     * @return string
     */
    private function generateCSV()
    {
        $dir = 'exports';
        $path = 'CSV_' . time() . '.csv';
        $this->json->convert();
        $this->json->convertAndSave($dir . '/' . $path);
        return $dir . '/' . $path;
    }
}