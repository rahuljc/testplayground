<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use App\Models\Event;

class Workshop extends Model
{

    /**
     * Get the post that owns the comment.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
