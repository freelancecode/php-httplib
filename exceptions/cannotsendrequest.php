<?php

class CannotSendRequest extends HttpException 
{
    public function __construct() { parent::__construct( 'Cannot Send Request' ); }  
}
