<?php

namespace App\Service;

interface ReadDataContract
{
    public function getExt(object $object):string;
    public function getDetails();
}
