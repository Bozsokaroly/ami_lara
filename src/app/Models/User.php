<?php

namespace App\Models;

use App\Traits\ApiKey;
use App\Traits\ApiResource;
use App\Traits\UUID;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Silber\Bouncer\Database\HasRolesAndAbilities;
//use Illuminate\Contracts\Auth\MustVerifyEmail;

/**
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 * @property string api_key
 * @property DateTime email_verified_at
 * @property string mtmt
 * @property string orcid
 * @property string issn
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, ApiResource, UUID, HasRolesAndAbilities, ApiKey;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token', 'api_key'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** Defines a many-to-many relationship between users and articles
     * @return BelongsToMany The type of the relationship
     */
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }

    /** Defines a one-to-many relationship between users and comments
     * @return BelongsToMany The type of the relationship
     */
    public function comments(): Relation {
        return $this->hasMany(Comment::class);
    }

}
