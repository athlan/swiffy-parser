<?php

namespace SwiffyParser\Result;

use SwiffyParser\Result;

/**
 * Class StringResult
 * @package SwiffyParser\Result
 * @author Athlan
 */
class StringResult implements Result {

    /**
     * @var string
     */
    private $result;

    /**
     * @var boolean
     */
    private $eof;

    /**
     * @param string $result
     */
    public function __construct($result) {
        $this->result = $result;
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
        return $this->result;
    }

    /**
     * @return boolean
     */
    public function isEof() {
        return $this->eof;
    }
}
