<?php

namespace bagduch\blackpepper\lib\validation;

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
}
