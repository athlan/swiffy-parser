<?php

namespace SwiffyParser;

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
