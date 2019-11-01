<?php

namespace bagduch\blackpepper\lib;

use bagduch\blackpepper\Company;

interface StorageInterface
{

    public function load();

    public function get();

    public function sort();

    public function isEmpty();

    public function destroy();

    public function add(AbstractCompany $Company);

    public function save();

    public function update();

    public function remove();

}