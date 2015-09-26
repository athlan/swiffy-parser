<?php

namespace SwiffyParser\Result;

use SwiffyParser\Result;

/**
 * Class ResultUtil
 * @package SwiffyParser\Result
 */
class ResultUtil {

    /**
     * @param Result $result
     * @return string
     */
    public static function toString(Result $result) {
        $buff = '';

        while(!$result->isEof()) {
            $buff .= $result->getStream();
        }

        return $buff;
    }

}
