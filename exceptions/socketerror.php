<?php

/**
 * The base exception for HTTPConnection
 * @package httplib
 */ 
class SocketError extends HttpException 
{
    public function __construct( $msg, $code ) 
    { 
        $message = sprintf( 'Socket Error on: %s %d', $msg, $code );
        parent::__construct( $message ); 
    }  
}
