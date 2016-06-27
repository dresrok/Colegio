<?php

namespace Colegio\Entities;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'profesores';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['nombre', 'email', 'telefono'];

  public function salones()
  {
  	return $this->hasMany('Colegio\Entities\ProfesorSalon');
  }

}
