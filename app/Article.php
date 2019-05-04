<?php

namespace STEMLoyolaChallenges;

use Jenssegers\Mongodb\Eloquent\Model;


class Article extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'articles';
    
    protected $fillable = [
        'title', 'questions','body'
    ];
}
