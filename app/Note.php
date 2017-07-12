<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['note', 'user_id'];
  
  /**
   * Note belongs to User
   *
   * @return User
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
