<?php

namespace JohnDoe\BlogPackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  public $table = 'touch_n_go';
  public $timestamps = true;
  protected $guarded = [];
}