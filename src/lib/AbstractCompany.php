<?php

namespace bagduch\blackpepper\lib;

use bagduch\blackpepper\lib\validation\Validation;

abstract class AbstractCompany
{
    use Validation;

    protected $name;
    protected $url;
    protected $logo;

    public function setName($name)
    {
        $this->name = (string)$name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setUrl($url)
    {
        $this->validateUrl($url);
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    abstract public function setLogo($logo);

    public function getLogo()
    {
        return $this->logo;
    }

}