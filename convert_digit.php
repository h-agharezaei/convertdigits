<?php

function convert_digit($digits,$mod='fa'){
        $persian_digits = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
        $english_digits = array('0','1','2','3','4','5','6','7','8','9');
        return($mod=='fa')?str_replace( $persian_digits,$english_digits,$digits): str_replace($english_digits, $persian_digits, $digits);
    }
