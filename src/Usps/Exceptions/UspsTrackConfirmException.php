<?php
/**
 * Created by PhpStorm.
 * User: Patrick Breen
 * Date: 2/14/2018
 * Time: 2:54 PM
 */

namespace Usps\Exceptions;

use Throwable;

class UspsTrackConfirmException extends UspsException
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
}
