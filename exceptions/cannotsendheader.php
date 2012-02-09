<?php

class CannotSendHeader extends HttpException 
{
    public function __construct() { parent::__construct( 'Cannot Send Header' ); }  
}
