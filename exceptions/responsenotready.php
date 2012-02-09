<?php

class ResponseNotReady extends HttpException 
{
    public function __construct() { parent::__construct( 'Response Not Ready' ); }  
}
