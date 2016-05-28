<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    protected $table = 'social_profiles';
    
    protected $fillable = ['email', 'first_name', 'last_name', 'avatar', 'social_name', 'social_id'];
}
