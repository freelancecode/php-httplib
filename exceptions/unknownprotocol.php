<?php

class UnknownProtocol extends HttpException 
{
    public function __construct() { parent::__construct( 'Unknown Protocol' ); }  
}
