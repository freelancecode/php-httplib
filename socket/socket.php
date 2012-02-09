<?php

class Socket implements ISocket
{
    const CHUNKED = 4096;
    
    protected $socket;
    
    public function open( $host, $port, $timeout )
    {
        $errno = '';
        $errstr = '';
        
        try
        {
            $this->socket = fsockopen( $host, $port, $errno, $errstr, $timeout );
        }
        catch( Exception $e ) { throw new SocketError( $errstr, $errno ); }
        
        $this->setAttribute( array( 'set_blocking' => 0 ) );
    }
    
    
    public function get() { return $this->socket; }
    public function valid() { return ( ! feof( $this->socket ) ); }
    public function getStatus() { return socket_get_status( $this->socket ); }
    public function setAttribute( array $attribute )
    {
        if( isset( $attribute['set_blocking'] ) ) 
        {
            socket_set_blocking( $this->socket, $attribute['set_blocking'] );
        }
        
        if( isset( $attribute['set_timeout'] ) ) 
        {
            socket_set_timeout( $this->socket, $attribute['set_timeout'] );
        }
    }
    
    public function read( $length = self::CHUNKED ) { return fread( $this->socket, $length ); }
    public function write( $data, $length = NULL )
    {
        if( ! is_null( $length ) ) return fwrite( $this->socket, $data, $length );
        
        return fwrite( $this->socket, $data );
    }
    
    public function send( $data ) { return $this->write( $data ); }
    public function close() { if( $this->socket ) fclose( $this->socket ); }
}
