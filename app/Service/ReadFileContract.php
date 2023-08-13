<?php

namespace App\Service;

interface ReadFileContract
{
    public function getSize(object $object):int;
    public function getSizeDetails(object $object):string;
}
