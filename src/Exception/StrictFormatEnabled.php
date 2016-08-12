<?php

namespace NewInventor\TagUtility\Exception;


class StrictFormatEnabled extends \Exception
{
    /**
     * StrictFormatEnabled constructor.
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($code = 0, \Exception $previous = null)
    {
        parent::__construct('You should use only lower case english letters, numbers and minus sign.', $code, $previous);
    }
}