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

    /**
     * to get all sports objects
     *
     * @return array
     */
    public static function getAllSports()
     {
		$sports = DB::table('sports')->orderBy('name', 'asc')->get();
		return $sports;
     }

}
