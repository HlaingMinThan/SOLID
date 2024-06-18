<?php

class FileWriter
{
    public function write(string $content)
    {
        // Code to write content to a file
        echo "Writing to file: " . $content . "\n";
    }
}

class Report
{
    private $fileWriter;

    public function __construct()
    {
        $this->fileWriter = new FileWriter();
    }

    public function generate(string $data)
    {
        // Generate report content
        $content = "Report Data: " . $data;
        $this->fileWriter->write($content);
    }
}

// Usage
$report = new Report();
$report->generate("Sample Data");
