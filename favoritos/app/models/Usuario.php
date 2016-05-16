<?php
class Usuario extends Eloquent
{
	protected $table = 'USUARIOS';

	public function set_clave($string)
	{
		die("entrol");
		$this->set_attribute('clave', Hash::make($string));
	}	

}
