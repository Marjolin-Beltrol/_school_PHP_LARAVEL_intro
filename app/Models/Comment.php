<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['text', 'user_id', 'message_id'];
    // Si la clé primaire est un UUID
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
