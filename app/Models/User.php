<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     */
    protected $table = 'tblUser';

    /**
     * The primary key for the table.
     */
    protected $primaryKey = 'Id';

    /**
     * Indicates if the IDs are auto-incrementing.
     */
    public $incrementing = true;

    /**
     * The "type" of the primary key.
     */
    protected $keyType = 'int';

    /**
     * Laravel timestamps are disabled because the table uses
     * CreatedDate and ModifiedDate instead of created_at/updated_at.
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'CompanyId',
        'Username',
        'PasswordHash',
        'PasswordSalt',
        'Email',
        'Role',
        'CreatedDate',
        'ModifiedDate',
    ];

    /**
     * The attributes that should be hidden for arrays/JSON.
     *
     * @var list<string>
     */
    protected $hidden = [
        'PasswordHash',
        'PasswordSalt',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string,string>
     */
    protected $casts = [
        'CreatedDate' => 'datetime',
        'ModifiedDate' => 'datetime',
    ];

    /**
     * Override the password field used by Laravel Auth.
     */
    public function getAuthPassword()
    {
        return $this->PasswordHash;
    }
}
