<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use PhpParser\Node\Scalar\String_;

class Header extends Entity
{
    public $heading;
    public $url;
    public $homename;
    public $home_url;
    public function __construct(string $heading = "Home", String $url = "/admin",String $homename="Home",$home_url="/admin")
    {
        $this->heading = $heading;
        $this->url = $url;
        $this->homename = $homename;
        $this->home_url = $home_url;
    }
}
