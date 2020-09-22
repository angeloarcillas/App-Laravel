<?php

namespace App\Traits;

trait Commentable
{
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable')
            ->orderBy('created_at', 'DESC');
    }
}
