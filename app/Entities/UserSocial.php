<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\DataBase\Eloquent\SoftDeletes;

class UserSocial extends Model
{
    use SoftDeletes;
    use Notifiable;

    public    $timeStamps = true;
    protected $table      = 'UserSocial';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'social_network', 'social_id', 'social_email', 'social_avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}
