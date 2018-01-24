<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
  public function section()
{
  return $this->belongsTo(User::class, 'section_id');
}
}
