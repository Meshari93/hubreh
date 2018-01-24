<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Property extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'properties';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'phon_num_one', 'phon_num_two', 'poryorty', 'time_entry', 'time_out', 'status', 'evaluation', 'describstion', 'num_section'];

    public function owner()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

  /**
   * function relationshep .
   *
   */

  public function section()
  {
      return $this->hasMany('App\Section', 'property_id');
  }


}