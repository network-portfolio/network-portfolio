<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectMember extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'timestamps', 'project_id', 'priority', 'url', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    
    public function project()
    {
       return $this->belongsTo('App\Project');
    }

    public function user()
    {
       return $this->belongsTo('App\User');
    }    

}