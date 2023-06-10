<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use \App\Models\UserModel;

class Tweet extends Entity
{

    public function getCreatedAt(string $format = ['d-m-Y'])
    {
        // convert to CodeIgniter\I18n\Time object
        $this->attributes['created_at'] = $this->muteData($this->attributes['created_at']);
        $timezome = $this->timezone ?? app_timezone();
        $this->attributes['created_at']->setTimezone($timezome);
        return $this->attributes['created_at']->format($format);
    }
}