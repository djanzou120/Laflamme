<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ManagerController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable implements JWTSubject
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, Notifiable, SearchableTrait;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'last_name', 'bio', 'first_name', 'email', 'password', 'profile', 'role_id',
    ];


    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'companies.name' => 10,
            'users.email' => 10,
            'users.phone' => 10,
            'users.last_name' => 5,
            'users.first_name' => 5,
        ],
        'joins' => [
            'companies' => ['users.id', 'companies.user_id']
        ],
    ];

    public function isAdmin()
    {
        return Auth::user()->role->rank >= Role::find(Role::ADMIN)->rank;
    }

    public function isRoot()
    {
        return Auth::user()->role->rank >= Role::find(Role::ROOT)->rank;
    }


    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }


    public function responses(){
        return $this->hasMany('App\Models\Response');
    }

    public function subjects(){
        return $this->hasMany('App\Models\Subject');
    }

    public function getProfileAttribute($image)
    {
        return $image == null ? "http://placehold.it/400x400" : asset($image);
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function setProfileAttribute($value)
    {
        $this->attributes['profile'] = (new Controller())->saveMediaB64($value, Controller::USER_PROFILE_PATH);
    }
}
