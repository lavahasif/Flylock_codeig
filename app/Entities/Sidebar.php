<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Sidebar extends Entity
{
    public $menu;

    public function __construct(array $menu = [])
    {
        $this->menu = $menu;
    }
}
