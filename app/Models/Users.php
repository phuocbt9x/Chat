<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Users extends Model
{
    use HasFactory;

    protected string $table = "users";

    protected array $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    public function channels(): BelongsToMany
    {
        return $this->belongsToMany(Channels::class, 'channel_user', 'users_id', 'channel_id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Messages::class, 'sender_id', 'id');
    }
}
