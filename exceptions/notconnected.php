<?php

class NotConnected extends HttpException 
{
    public function __construct() { parent::__construct( 'Not Connected' ); }  
}
