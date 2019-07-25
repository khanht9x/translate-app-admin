<?php

namespace App\Modules\Helper;

use Keygen;

class KeygenHelper
{
    static public function generateCode()
    {
        return Keygen::bytes()->generate(
            function ($key) {
                // Generate a random numeric key
                $random = Keygen::numeric()->generate();

                // Manipulate the random bytes with the numeric key
                return substr(md5($key . $random . strrev($key)), mt_rand(0, 8), 20);
            },
            function ($key) {
                // Add a (-) after every fourth character in the key
                return join('-', str_split($key, 4));
            },
            'strtoupper'
        );
    }
}
