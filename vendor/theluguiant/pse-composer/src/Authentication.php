<?php
namespace theluguiant\PseComposer;

class Authentication {
    private $login;
    private $tranKey;
    private $seed;
    private $additional;

    public function __construct( $additional = null ) {
        $key = "024h1IlD";
        $this->login      = '6dd490faf9cb87a9862245da41170ff2';
        $this->seed       = date( 'c' );
        $this->tranKey    = sha1( $this->seed . $key, false ); 
        $this->additional = $additional;
    }
}

