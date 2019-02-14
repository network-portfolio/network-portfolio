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
      'timestamps', 'user_id', 'name', 'description', 'elevator_pitch', 'github', 'twitter', 'facebook', 'production_url', 'status', 'tags'
   ];

   /**
    * The attributes that should be hidden for arrays.
      *
      * @var array
      */
   protected $hidden = [
      'lessons_learnt'
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

   public function addMembers($usersList)
   {
      $users = User::whereIn('nickname', $usersList)->get();
      // Add the owner as a member if not already present
      $users = $users->push($this->user()->first())->unique('id');

       $this->projectMembers()->createMany(
         $users->map(function($user) {
            return [
               'user_id' => $user->id
            ];         
        })->toArray()
       );
   }

}
