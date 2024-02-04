<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
// Purpose of this class to avoid reuse old jquery and bootstrap any new pages

class SkipCssJs extends Entity
{


    public  $script;
    public  $stylesheet;
    public function __construct(Script $script = null, Stylesheet $stylesheet = null)
    {
        $this->script = $script ?? new Script();
        $this->stylesheet = $stylesheet ?? new Stylesheet();
    }
}
