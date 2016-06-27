<?php

namespace Colegio\Entities;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'salones';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['nombre', 'numero'];

  public function profesores()
  {
  	return $this->hasMany('Colegio\Entities\ProfesorSalon');
  }

}