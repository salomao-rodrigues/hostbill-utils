<?php

namespace HBUtils;

/**
* PageHelper
*/
class PageHelper
{
    public static function isHomePage($requestURI) {
        // Remove query from URI
        $location = explode('?', $requestURI)[0];

        // Remove slashes, in case we have something like /index.php///
        $location = str_replace('/', '', $location);

        return in_array($location, ['', 'index.php']);
    }
}
