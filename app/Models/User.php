<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable //implements FilamentUser
{
    public function hasrole($role)
    {
        return User::where('role', $role)->get();
    }

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'no_telp',
        'role',
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

    // public function canAccessPanel(Panel $panel): bool
    // {
    //     $user = Auth::user();
    //     $roles = $user->getRoleNames();

    //     if($panel->getId() === 'admin' && $roles->contains('admin')) {
    //         return true;
    //     }
    //     elseif($panel->getId() === 'koperasi' && $roles->contains('koperasi')) {
    //         return true;
    //     }
    //     else {
    //         return false;
    //     }
    // }

    // public function canAccessPanel(Panel $panel): bool
    // {
    //     if ($panel->getId() === 'admin') {
    //         return str_ends_with($this->email, '@admin.com') && $this->hasVerifiedEmail();
    //     }
    //     elseif($panel->getId() === 'koperasi') {
    //         return str_ends_with($this->email, '@koperasi.com') && $this->hasVerifiedEmail();
    //     }
    //     else {
    //         return false;
    //     }
    // }

}
