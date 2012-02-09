<?php

class ImproperConnectionState extends HttpException 
{
    public function __construct() { parent::__construct( 'Improper Connection State' ); }  
}
