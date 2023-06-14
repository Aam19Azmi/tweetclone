<?php 

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{

    public function setPaswoord(string $pass)
    {
        $this->attributes['passwords'] = password_hash($pass, PASSWORD_BCRYPT);
        return $this;
    }
}
