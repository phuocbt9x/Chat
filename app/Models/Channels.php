<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Channels extends Model
{
    use HasFactory;

    protected string $table = "channels";

    protected array $fillable = [
        'name'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(Users::class, 'channel_user', 'channel_id', 'user_id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Messages::class, 'channel_id', 'id');
    }
}
