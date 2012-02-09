<?php

class InvalidUrl extends HttpException 
{
    public function __construct() { parent::__construct( 'Invalid Url' ); } 
}
