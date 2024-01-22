<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Show extends Model
{
    use HasFactory;

    public function tags(): BelongsToMany{
        return $this->belongsToMany(Tag::class, 'show_tags');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'my_lists', 'show_id', 'user_id');
    }
}
