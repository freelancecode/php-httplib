<?php

class UnsupportedSentData extends HttpException 
{
    public function __construct( $data ) 
    { 
        $message = 'Unsupported sent data with type: \''.gettype( $data ).'\'. ';
        parent::__construct( $message ); 
    }  
}
