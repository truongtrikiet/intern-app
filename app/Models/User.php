<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'address',
        'status',
        'role',
    ];

    //Accessor for 'name'
    public function getNameAttribute() {
        return "{$this->first_name} {$this->last_name}";
    }

    //Get Status
    public function getStatusUser() {
        $status = [
            0 => "waiting",
            1 => "approved",
            2 => "denied",
            3 => "locked"
        ];
        return $status[$this->status] ?? "Unknown";
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    public function isAdmin() {
        return $this -> role === 'admin';
    }
    public function isUser() {
        return $this -> role === 'user';
    }
}
