<?php

namespace bagduch\blackpepper;

use bagduch\blackpepper\lib\AbstractCompany;
use bagduch\blackpepper\lib\StorageInterface;
use bagduch\blackpepper\lib\validation\Validation;

class Csvloader implements StorageInterface
{
    use Validation;
    protected $filePath;
    protected $data = [];

    public function __construct($filePath)
    {
        $this->validateCsv($filePath);
        $this->filePath = $filePath;
        $this->load();

    }

    public function load()
    {
        // TODO: Implement load() method.
        if (($handle = fopen($this->filePath, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $company = new Company($data[0], $data[1], $data[2]);
                $this->data[strtolower($company->getName()[0])][] = $company;
            }
            fclose($handle);
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
        $alphas = range('A', 'Z', 2);

        foreach ($this->data as $row) {

        }

        // TODO: Implement sort() method.
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