<?php

class UnknownTransferEncoding extends HttpException 
{
    public function __construct() { parent::__construct( 'Unknown Transfer Encoding' ); }  
}
