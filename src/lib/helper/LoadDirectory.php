<?php

namespace bagduch\blackpepper\lib\helper;

trait LoadDirectory
{

    public function loadDirectCsv($path)
    {
        if ($path == "") {
            $files = glob("*.csv");
        } else {
            $files = glob($path . "/*.csv");
        }
        return $files;
    }


}