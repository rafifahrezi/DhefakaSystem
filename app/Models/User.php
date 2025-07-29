<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Order;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'role   ',
    ];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function getRoleBadgeColorAttribute(): string
    {
        return match ($this->role) {
            'admin' => 'success',
            'user' => 'info',
            default => 'secondary'
        };
    }

    public function getRoleDisplayAttribute(): string
    {
        return ucfirst($this->role);
    }

    public function scopeAdmins($query)
    {
        return $query->where('role', 'admin');
    }

    public function scopeUsers($query)
    {
        return $query->where('role', 'user');
    }
    
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->role === 'admin';
        
        $valid_user_domains = explode(',', env('VALID_USER_DOMAINS'));

        // $valid_user_emails = explode(',', env('VALID_USER_EMAILS'));

        foreach ($valid_user_domains as $domain) {
            if (str_ends_with($this->email, $domain)) {
                return true;
            }
        }

        // foreach ($valid       _user_emails as $email) {
        //     if ($this->email == $email) {
        //         return true;
        //     }
        // }

        return false;
    }
}
