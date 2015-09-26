<?php

namespace SwiffyParser;

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
