<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;



class Response extends Entity
{
    protected $attributes = [
        'status'  => false,
        'message' => null,
        'data'    => null,
    ];

    public function __construct(bool $status, string $message, $data = null)
    {
        parent::__construct();

        $this->attributes['status'] = $status;
        $this->attributes['message'] = $message;
        $this->attributes['data'] = $data;
    }

    public function setStatus(bool $status)
    {
        $this->attributes['status'] = $status;
        return $this;
    }

    public function setMessage(string $message)
    {
        $this->attributes['message'] = $message;
        return $this;
    }

    public function setData($data)
    {
        $this->attributes['data'] = $data;
        return $this;
    }
}
