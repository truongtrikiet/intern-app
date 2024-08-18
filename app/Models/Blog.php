<?php

namespace App\Models;

use App\Enums\BlogStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

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

    protected $casts = [
        'status' => BlogStatus::class,
        // 'publish_date' => 'datetime',
    ];

    public function getStatusLabelAttribute(): string {
        return $this->status_blog->label();
    }
}
