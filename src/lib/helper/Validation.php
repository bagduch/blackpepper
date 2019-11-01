<?php

namespace bagduch\blackpepper\lib\helper;

trait Validation
{
    public function validateUrl($url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new \Exception('Invalid ' . $url);
        }
    }

    public function validateLogo($url)
    {

    }

    public function validateFile($file)
    {
        if (!is_file($file)) {
            throw new \Exception('Invalid file' . $file);
        }
    }

}
