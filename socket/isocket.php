<?php

{
    interface ISocket
    {
        public function open( $host, $port, $timeout );
        public function setAttribute( array $attribute );
        public function getStatus();
        
        public function get();
        public function valid();
        public function read( $length );
        public function write( $data, $length = NULL );
        
        public function send( $data );
        public function close();
    }
}
