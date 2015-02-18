<?php

namespace iiifx\Interkassa;

class Facade {

    public static function createShop ( $config ) {
        return new Shop( $config );
    }

    /*
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_LINK = 'LINK';
    const METHOD_OFF = 'OFF';

    const STATE_SUCCESS = 'success';
    const STATE_FAIL = 'fail';

    const FEES_PAYER_SHOP = 0;
    const FEES_PAYER_BUYER = 1;
    const FEES_PAYER_EQUAL = 2;
    */

}