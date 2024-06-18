<?php

class FileWriter
{
    public function write(string $content)
    {
        // Code to write content to a file
        echo "Writing to file: " . $content . "\n";
    }
}

class DatabaseWriter
{
    public function write(string $content)
    {
        // Code to write content to a database
        echo "Writing to database: " . $content . "\n";
    }
}

class Report
{
    private $fileWriter;
    private $dbWriter;

    public function __construct($writer)
    {
        if ($writer === 'file') {
            $this->fileWriter = new FileWriter();
        }
        if ($writer === 'db') {
            $this->dbWriter = new DatabaseWriter();
        }
    }

    public function generate(string $data)
    {
        // Generate report content
        $content = "Report Data: " . $data;
        if ($this->fileWriter) {
            $this->fileWriter->write($content);
        }
        if ($this->dbWriter) {
            $this->dbWriter->write($content);
        }
    }
}

// Usage
$report = new Report('file');
$report->generate("Sample Data");
