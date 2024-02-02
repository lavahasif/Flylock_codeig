<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LockSystemSeeder extends Seeder
{
    public function run()
    {
        $lockReasons = [
            'Lunch Break',
            'Collaboration Meeting',
            'Training',
            'Team Meeting',
            'PE Meeting',
            'Board Meeting',
            'Personal Break',
            'Client Meeting',
            'Meeting',
        ];

        foreach ($lockReasons as $reason) {
            $data = [
                'lock_reason' => $reason,
                'is_active'   => true,
                'delete'      => false,
                'created_at'  => date('Y-m-d H:i:s'), // Current timestamp
            ];

            // Adjust this line based on your actual model and database structure
            $this->db->table('lockingtypes')->insert($data);
        }
    }
}
