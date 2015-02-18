<?php

namespace iiifx\Interkassa;

# @TODO Переписать

class Shop {

    public function __construct () {

    }

























    /*
    protected $_id;
    protected $_secret_key;
    public static function factory ( array $options ) {
        return new Interkassa_Shop( $options );
    }
    public function __construct ( array $options ) {
        if ( !isset( $options[ 'id' ] ) ) {
            throw new Interkassa_Exception( 'Shop id is required' );
        }

        if ( !isset( $options[ 'secret_key' ] ) ) {
            throw new Interkassa_Exception( 'Secret key is required' );
        }

        $this->_id = $options[ 'id' ];
        $this->_secret_key = $options[ 'secret_key' ];
    }
    public function createPayment ( array $data ) {
        return Interkassa_Payment::factory( $this, $data );
    }
    public function receiveStatus ( array $source = NULL ) {
        if ( $source == NULL ) {
            $source = $_REQUEST;
        }

        return Interkassa_Status::factory( $this, $source );
    }
    public function getId () {
        return $this->_id;
    }
    public function getSecretKey () {
        return $this->_secret_key;
    }
    */
}