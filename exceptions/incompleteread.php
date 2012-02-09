<?php

class IncompleteRead extends HttpException 
{
    public function __construct() { parent::__construct( 'Incomplete Read' ); }  
}
