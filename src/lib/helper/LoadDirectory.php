<?php

namespace bagduch\blackpepper\lib\helper;

trait LoadDirectory
{

    public function loadDirectCsv($path)
    {
        $files = glob($path . "/*.csv");
        return $files;
    }


}