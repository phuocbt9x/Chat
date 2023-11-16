<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Messages extends Model
{
    use HasFactory;

    protected string $table = "messages";

    protected array $fillable = [
        'sender_id',
        'channel_id',
        'message',
        'type'
    ];

    public function channel(): BelongsTo
    {
        return $this->belongsTo(Channels::class, 'channel_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

    public function media(): HasOne
    {
        return $this->hasOne(Media::class, 'message_id', 'id');
    }
}
