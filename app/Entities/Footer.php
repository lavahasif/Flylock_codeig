<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Footer extends Entity
{
    public $name;
    public $version;

    public function __construct(string $name = "Flying Colour", int $version = 1)
    {
        $this->name = $name;
        $this->version = $version;
    }
}
