<?php

class UnimplementedFileMode extends HttpException 
{
    public function __construct() { parent::__construct( 'Unimplemented File Mode' ); }  
}
