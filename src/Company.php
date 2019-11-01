<?php

namespace bagduch\blackpepper;

use bagduch\blackpepper\lib\AbstractCompany as BaseCompany;

class Company extends BaseCompany
{

    public function __construct($name, $url, $logo)
    {
        $this->setName($name);
        $this->setUrl($url);
        $this->setLogo($logo);

    }

    public function setLogo($logo)
    {
        // TODO: Implement setLogo() method.
        // can do some image validation here.
        $this->validateUrl($logo);
        $this->logo = $logo;
    }
}
