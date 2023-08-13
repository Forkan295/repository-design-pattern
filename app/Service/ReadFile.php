<?php

namespace App\Service;

use PhpParser\Node\Expr\Cast\Object_;

class ReadFile extends ReadData implements ReadFileContract
{
    public function getSize(Object $object): int
    {
        return $object->size;
    }

    public function getSizeDetails(object $object): string
    {
        return $object->sizeType;
    }
}
