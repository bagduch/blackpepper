<?php

namespace bagduch\blackpepper;

use bagduch\blackpepper\lib\AbstractCompany;
use bagduch\blackpepper\lib\StorageInterface;
use bagduch\blackpepper\lib\helper\Validation;
use bagduch\blackpepper\lib\helper\LoadDirectory;
use bagduch\blackpepper\lib\helper\Sort;

class Csvloader implements StorageInterface
{
    use Validation, LoadDirectory, Sort;
    protected $filePath = [];
    protected $data = [];

    public function __construct($filePath = "storage", $filename = "")
    {
        if ($filename == "") {
            $files = $this->loadDirectCsv($filePath);
            foreach ($files as $file) {
                $this->validateFile($file);
                $this->filePath[] = $file;
            }
        } else {
            $file = $filePath . "/" . $filename;
            $this->validateFile($file);
            $this->filePath[] = $file;
        }

        $this->load();

    }

    public function load()
    {
        // TODO: Implement load() method.
        foreach ($this->filePath as $filepath) {
            if (($handle = fopen($filepath, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $company = new Company($data[0], $data[1], $data[2]);
                    $this->data[strtolower($company->getName()[0])][] = $company;
                }
                fclose($handle);
            }
        }
    }

    public function get()
    {
        // TODO: Implement get() method.
        if (!$this->isEmpty())
            $this->sort();
        return $this->data;
    }

    public function sort()
    {
        // TODO: Implement sort() method.
        $this->data = $this->sortByAlpha($this->data, 2);
    }

    public function isEmpty()
    {
        // TODO: Implement isEmpty() method.
        return empty($this->data);
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
        $this->data = [];
    }

    public function add(AbstractCompany $company)
    {
        // TODO: Implement add() method.
    }

    public function save()
    {
        // TODO: Implement save() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function remove()
    {
        // TODO: Implement remove() method.
    }
}