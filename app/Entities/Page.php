<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Page extends Entity
{

    public $pageTitle;
    public $footer;
    public $sidebar;
    public $isSkipCssJs;
    public $header;

    public function __construct(string $pageTitle = "Flying colour", Footer $footer = null, Sidebar $sidebar = null, SkipCssJs $isSkipCssJs = null, Header $header = null)
    {
        $this->pageTitle = $pageTitle;
        $this->footer = $footer ?? new Footer();
        $this->sidebar = $sidebar ?? new Sidebar();
        $this->isSkipCssJs = $isSkipCssJs ?? new SkipCssJs();
        $this->header = $header ?? new Header();
    }
}
