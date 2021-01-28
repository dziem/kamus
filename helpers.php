<?php

if (! function_exists('to_besar')) {
    function to_besar(string $word)
    {
        return Dziem\Kamus\Uppercase::upper($word);
    }
}
