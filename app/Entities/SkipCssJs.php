<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
// The objective of this class is to prevent the reuse of outdated versions of jQuery and Bootstrap across different pages.
// If the 'yes' property is set, it indicates permission to hide the default jQuery and Bootstrap elements that are included in the main layout of the page.

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
