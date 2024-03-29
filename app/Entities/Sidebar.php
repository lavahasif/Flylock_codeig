<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Sidebar extends Entity
{
    public $menu;
    public $selection_name;
    public $selection_index;
    public $selection_url;
    public $sidebarname;
    public $sidebarusername;
    public $logo;

    public function __construct(array $menu = null, string $selection_name = "Home", string $selection_url = "/admin", int $selection_index = 0, string $sidebarusername = "", string $sidebarname = "Flying Colour", string $logo = "fly.png")
    {
        $this->menu = $menu ?? Menu::getMenu();
        $this->selection_name = $selection_name;
        $this->selection_index = $selection_index;
        $this->selection_url = $selection_url;
        $this->sidebarusername = $sidebarusername;
        $this->sidebarname = $sidebarname;
        $this->logo = $logo;
    }
}
class Menu
{

    public $sidebarName;
    public $url;
    public $icon;
    public $submenu;

    public function __construct(string $sidebarName, string $url, string $icon, array $submenu = [])
    {
        $this->sidebarName = $sidebarName;
        $this->url = $url;
        $this->icon = $icon;
        $this->submenu = $submenu;
    }

    static function getMenu()
    {
        return array(
            new Menu('Home', '/', 'fa fa-home'),
            new Menu('Logging/Logout Report', '/', 'fa fa-clipboard'),
            new Menu('Locking Reason', '/', 'fa fa-lock', [
                new Menu('Add', '/locking-reason/create', 'fa fa-plus'),
                new Menu('Edit', '/locking-reason', 'fa fa-edit'),
                new Menu('Report', '/report/locking-reason', 'fa fa-file')
            ]),


            new Menu('User Registration', '/', 'fa fa-user-plus'),
            new Menu('DepartMent Registration', '/', 'fa fa-building')


        );
    }
}








//create menu class with two properties sidebarname and url