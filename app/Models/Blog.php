<?php

namespace App\Models;

use App\Enums\BlogStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Fluent\Concerns\Interaction;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections;

class Blog extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $table = 'blogs';

    protected $fillable = [
        'user_email',
        'title',
        'slug',
        'description',
        'content',
        'thumbnail',
        'publish_date',
        'status_blog',
    ];
    protected $datas = ['deleted_at'];

    public function user() {
        return $this->belongsTo(User::class, 'user_email', 'email');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumbnails')->singleFile()->useDisk('blogs');;
    }

    protected $casts = [
        'status' => BlogStatus::class,
        // 'publish_date' => 'datetime',
    ];

    public function getStatusLabelAttribute(): string {
        return $this->status_blog->label();
    }
}
