<?php

trait accessible
{
	public function __get ( $property )
	{
		if ( isset ( $this-> { $property } ) )
			return $this-> { $property };
	}

	public function __isset ( $name ) 
	{
    	return isset ( $this->{ $name } );
	}

	public function jsonSerialize ( )
    {
        return get_object_vars ( $this );
    }
}