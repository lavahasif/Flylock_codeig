<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Stylesheet extends Entity
{
    public $fontAwesome;
    public $ionIcons;
    public $bootstrap;
    public $custom;
    public $themeColor;
    public $textColor;

    public function __construct(
        bool $fontAwesome = false,
        bool $ionIcons = false,
        bool $bootstrap = false,
        bool $custom = false,
        string $themeColor = "",
        string $textColor = ""
    ) {

        // Assign properties
        $this->fontAwesome = $fontAwesome;
        $this->ionIcons = $ionIcons;
        $this->bootstrap = $bootstrap;
        $this->custom = $custom;
        $this->themeColor = $themeColor;
        $this->textColor = $textColor;
    }
}
