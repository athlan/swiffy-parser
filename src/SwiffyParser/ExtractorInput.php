<?php

namespace SwiffyParser;

/**
 * Interface ExtractorInput
 * @package SwiffyParser
 * @author Athlan
 */
interface ExtractorInput {

    /**
     * @return string
     */
    public function getStream();

    /**
     * @return boolean
     */
    public function isEof();
}
