<?php

namespace Chatty\Models;

//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    
    protected $table = 'users';
   
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'location',
    ];
   
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getName() 
    {
        if ($this->first_name && $this->last_name) {
            return ("{$this->first_name} {$this->last_name}");
        }

        if ($this->first_name){
            return $this->first_name;            
        }

        return null;
    }

    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->username;
    }

    public function getFirstNameOrUsername()
    {
        return $this->first_name ?: $this->username;
    }

    public function getAvatarUrl()
    {
        //return "https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50";
        return "https://www.gravatar.com/avatar/{{md5($this->email)}}?d=mm&s=40";
    }
}
