<?php

namespace SwiffyParser;

/**
 * Interface Result
 * @package SwiffyParser
 * @author Athlan
 */
interface Result {

    /**
     * @return string
     */
    public function getStream();

    /**
     * @return boolean
     */
    public function isEof();
}
