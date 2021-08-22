<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;

class Event extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
