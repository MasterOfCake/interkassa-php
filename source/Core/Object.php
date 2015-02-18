<?php

namespace iiifx\Interkassa\Core;

use iiifx\Interkassa\Exception;

class Object {

    protected $configData = [ ];

    public static function className () {
        return get_called_class();
    }

    protected static function configure ( $object, $config ) {
        foreach ( $config as $name => $value ) {
            $object->$name = $value;
        }
        return $object;
    }

    public function __construct ( $config = [ ] ) {
        if ( $config ) {
            self::configure( $this, $config );
        }
        $this->initialize();
    }

    public function initialize () {}

    public function __set ( $name, $value ) {
        $setter = "set{$name}";
        if ( isset( $this->configData[ $name ] ) ) {
            $this->configData[ $name ] = $value;
        } elseif ( method_exists( $this, $setter ) ) {
            $this->$setter( $value );
        } elseif ( method_exists( $this, "get{$name}" ) ) {
            throw new Exception( 'Read-only property: ' . get_class( $this ) . '::' . $name );
        } else {
            throw new Exception( 'Unknown property: ' . get_class( $this ) . '::' . $name );
        }
    }

    public function __get ( $name ) {
        $getter = "get{$name}";
        if ( isset( $this->configData[ $name ] ) ) {
            return $this->configData[ $name ];
        } elseif ( method_exists( $this, $getter ) ) {
            return $this->$getter();
        } elseif ( method_exists( $this, "set{$name}" ) ) {
            throw new Exception( 'Write-only property: ' . get_class( $this ) . '::' . $name );
        } else {
            throw new Exception( 'Unknown property: ' . get_class( $this ) . '::' . $name );
        }
    }

    public function __isset ( $name ) {
        $getter = "get{$name}";
        if ( method_exists( $this, $getter ) ) {
            return $this->$getter() !== NULL;
        } else {
            return FALSE;
        }
    }

    public function __unset ( $name ) {
        $setter = "set{$name}";
        if ( method_exists( $this, $setter ) ) {
            $this->$setter( NULL );
        } elseif ( method_exists( $this, "get{$name}" ) ) {
            throw new Exception( 'Read-only property: ' . get_class( $this ) . '::' . $name );
        }
    }

}