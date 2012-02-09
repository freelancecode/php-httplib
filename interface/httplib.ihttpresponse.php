<?php

interface IHttpResponse
{
    public function read( $length );
    public function getHeader( $name, $default = NULL );
    public function getHeaders();
    public function msg();
    public function version();
    public function status();
    public function reason();
}
