<?php

namespace SwiffyParser\Extractor;

use SwiffyParser\Extractor;
use SwiffyParser\ExtractorInput;
use SwiffyParser\Result;
use SwiffyParser\Result\StringResult;

/**
 * Class HtmlExtractor
 * @package SwiffyParser\Extractor
 * @author Athlan
 */
class HtmlExtractor implements Extractor {
    /**
     * @param $input ExtractorInput
     * @return Result
     */
    public function extract(ExtractorInput $input)
    {
        $buffer = '';
        while(!$input->isEof()) {
            $buffer .= $input->getStream();
        }

        $matchResult = preg_match('#<script>(.*?)swiffyobject = ({(.+)});(.*?)</script>#is', $buffer, $match);

        if(!$matchResult) {
            return null;
        }

        $result = new StringResult($match[2]);
        return $result;
    }

}
