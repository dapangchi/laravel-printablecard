<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stuffs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password', 'passsalt', 'first_name', 'last_name', 'is_active', 'active_code'];

    public function full_name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
