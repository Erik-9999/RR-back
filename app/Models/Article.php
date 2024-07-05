<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'media',
        'img',
        'validated',
        'user_id'
    ];
    protected $casts = [
        
        'validated' => 'boolean',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function commentaries(): hasMany
    {
        return $this->hasMany(Commentary::class);
    }
    public function favories(): hasMany
    {
        return $this->hasMany(Favorite::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->BelongsToMany(Category::class);
    }
}
