<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class Listcontroller extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'App';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'command:Listcontroller';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'List all the controller in the admin folder';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'command:Listcontroller [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $controllers = [];

        $files = glob(APPPATH . 'Controllers/admin/*.php');

        foreach ($files as $file) {
            $controller = basename($file, '.php');
            $controllers[] = $controller;
        }

        CLI::write('Controllers:');
        CLI::write(implode("\n", $controllers));
    }
}
