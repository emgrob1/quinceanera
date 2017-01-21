<?php

class Generals extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $general;

    /**
     *
     * @var string
     */
    public $battle;

    /**
     *
     * @var integer
     */
    public $army_id;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'generals';
    }

	public function intialize()
	{	
		$this->hasMany(
		 "army_id",
		 "theater",
		 "army_name"
		);
	}
    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Generals[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Generals
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
