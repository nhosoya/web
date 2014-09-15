<?php

class Sport extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sports';

	/**
     * to use create method
     *
     * @var array
     */
     protected $guarded = array('id'); 

}
