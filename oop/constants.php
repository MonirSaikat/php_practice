<?php

/**
 * Class constants are named value associated with a class that remains fixed and 
 * unchangeable once defined. Serving as a convient way to store and reference constant data
 * related to a class.
 */

class HttpStatus
{
  const OK = 200;
  const NOT_FOUND = 404;
  const SERVER_ERROR = 500;
  const CREATED = 201;
  const ACCEPTED = 202;
}

$responseCode = 201;
if ($responseCode == HttpStatus::CREATED) {
  echo 'The resource was successfully created';
}


