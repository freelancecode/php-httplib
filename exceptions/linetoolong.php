<?php

class LineTooLong extends HttpException 
{
    public function __construct( $subject ) { parent::__construct( $subject.' is too long' ); }  
}
