<?php

namespace NewInventor\TagUtility\Exception;


class TagToTextAddition extends \Exception
{
    /**
     * StrictFormatEnabled constructor.
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($code = 0, \Exception $previous = null)
    {
        parent::__construct('You can not add children to text tag.', $code, $previous);
    }
}