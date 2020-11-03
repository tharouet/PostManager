<?php

namespace Tharouet\Controller;

class PostManager
{
    public static function Capture()
    {
        // sanitize
        foreach ($_POST as $key => $value) {
            $sanitizedData[$key] = filter_var($value, FILTER_SANITIZE_EMAIL);
        }
        // convert to object
        $result = (object)$sanitizedData;

        // return result
        return $result;
    }
}