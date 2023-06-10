<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // table name
    protected $table            = 'users';
    // The table content
    protected $allowedFields = [
        'username', 'password', 'fullname'
    ];

    protected $returnType = \App\Entities\User::class;
    public $rules = [
        'username' => 'required|alpha_numeric|min_length[5]|is_unique[users.usernames]',
        'password' => 'required|min_length[5]',
        'confirmation' => 'required_with[password]|matches[password]',
        'fullname' => 'required|min_length[5]',
    ];

    public $loginRules = [
        'username' => 'required',
        'password' => 'required'
    ];

    public function addUser($data)
    {
        $user = new \App\Entities\User();
        $user->username = $data['username'];
        $user->password = $data['password'];
        $user->fullname = $data['fullname'];
        $this->save($user);
        return [$user->username, $this->getInsertID()];
    }
}
