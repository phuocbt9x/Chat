<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Media extends Model
{
    use HasFactory;

    protected string $table = "media";

    protected array $fillable = [
        'name',
        'message_id',
        'path',
        'extension',
    ];

    public function message(): HasOne
    {
        return $this->hasOne(Messages::class, 'id', 'message_id');
    }
}
