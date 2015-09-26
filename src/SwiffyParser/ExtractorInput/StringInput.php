<?php

namespace SwiffyParser\Result;

use SwiffyParser\ExtractorInput;

class StringInput implements ExtractorInput {

    /**
     * @var string
     */
    private $input;

    /**
     * @var boolean
     */
    private $eof;

    /**
     * @param string $input
     */
    public function __construct($input) {
        $this->input;
        $this->eof = false;
    }

    /**
     * @return string
     */
    public function getStream() {
        if($this->eof) {
            throw new \InvalidArgumentException("EOF reached");
        }

        $this->eof = true;
        return $this->input;
    }

    /**
     * @return boolean
     */
    public function isEof() {
        return $this->eof;
    }
}
