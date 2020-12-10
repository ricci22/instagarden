<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyBlog extends Model
{
  use HasFactory;

  // Table Name
  protected $table = 'my_blogs';

  // Primary Key
  public $primaryKey = 'id';

  // TimeStamp
  public $timestamps = true;

  // Relationship
  public function users(){
    return $this->belongsTo(User::class, 'user_id', 'id');
  }
}