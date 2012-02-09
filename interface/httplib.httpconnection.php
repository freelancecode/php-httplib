<?php

interface IHttpConnection
{
    public function request( $method, $uri, $body = NULL, $headers = array() );
    public function setHostPort( $host, $port );
    public function setTunnel( $host, $port = NULL, $headers = NULL );
    public function getTunnel();
    public function getResponse();
    public function connect();
    public function close();
    
    public function putRequest( $request, $selector, $skipHeader = FALSE, $skipAcceptEncoding = FALSE );
    
    public function detectIPv6( $host );
    public function output( $val );
    
    public function putHeader( $header, $arg );
    public function setContentLength( $body )
    public function endHeaders( $messageBody = NULL ) 
    
    public function send( $data );
    public function sendRequest( $method, $url, $body, $headers );
    public function sendOutput( $messageBody = NULL );
}
