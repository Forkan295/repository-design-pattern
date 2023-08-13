<?php

namespace App\Service;

class ReadData implements ReadDataContract
{

    public function getExt(object $object): string
    {
        return (string) $object->ext;
    }

    public function getDetails()
    {
        // TODO: Implement getDetails() method.
    }
}
