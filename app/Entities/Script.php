<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Script extends Entity
{
    public $jquery;
    public $bootstrap;
    public $adminlte;
    public $custom;

    public function __construct(bool $jquery = false, bool $bootstrap = false, bool $adminlte = false, bool $custom = false)
    {
        $this->jquery = $jquery;
        $this->bootstrap = $bootstrap;
        $this->adminlte = $adminlte;
        $this->custom = $custom;
    }
}
