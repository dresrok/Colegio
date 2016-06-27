<?php

namespace Colegio\Entities;

use Illuminate\Database\Eloquent\Model;

class ProfesorSalon extends Model
{

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'profesores_salones';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['profesor_id', 'salon_id'];

  public function profesor()
  {
  	return $this->belongsTo('Colegio\Entities\Profesor');
  }

  public function salon()
  {
    return $this->belongsTo('Colegio\Entities\Salon');
  }

}