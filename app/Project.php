<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'timestamps', 'user_id', 'name', 'description', 'elevator_pitch', 'github', 'twitter', 'facebook', 'production_url', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function user()
    {
       return $this->belongsTo('App\User');
    }
    
    public function images()
    {
       return $this->hasMany('App\Image');
    }
    
    public function projectMembers()
    {
       return $this->hasMany('App\ProjectMember');
    }

}