<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'avatar','name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        if(isset($value)) {

            return asset('storage/' . $value );
    
        } else {
    
            return asset('images/default_avatar.png');
        }
    }
    

    public function timeline()
    {

        // include all of the users tweets
        //as well as the tweets of everyone 
        //they follow... in descending order by date.

        $friends = $this->follows()->pluck('id');
        $friends->push($this->id);

        return Tweet::whereIn('user_id', $friends)
        ->orWhere('user_id', $this->id)
        ->withLikes()
        ->latest()->paginate(5);

    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }


    
    public function setPasswordAttribute($value)
    {
          $this->attributes['password'] = bcrypt($value);
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function path($append = '')
    {
        $path =  route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }
    
    
    public function getRouteKeyName()
    {
        return 'name';
    }

 

}
