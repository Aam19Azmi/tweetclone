<?php

namespace App\Models;

use CodeIgniter\Model;

class TweetModel extends Model
{
    // table name
    protected $table            = 'tweets';

    // The table content
    protected  $allowedFields = [
        'user_id', 'content', 'category'
    ];

    protected $returnType = \App\Entities\Tweet::class;
    public $rules = [
        'content' => 'required',
        'category' => 'required'
    ];

    public function newTweet($curUser, $post)
    {
        $tweet = new \App\Entities\Tweet();
        $tweet->user_id = $curUser['userid'];
        $tweet->content = $post['content'];
        $tweet->category = $post['category'];
        $this->save($tweet);
    }

}
