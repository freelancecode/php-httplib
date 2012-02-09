<?php

class BadStatusLine extends HttpException 
{
    public function __construct() { parent::__construct( 'Bad Status Line' ); }  
}
