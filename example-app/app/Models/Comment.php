<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = "comments";
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id', 'commentaires', 'post_id'];

    public function posts(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}