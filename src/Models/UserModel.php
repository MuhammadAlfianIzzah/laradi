<?php

namespace Alfianizzah\Laradi\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
