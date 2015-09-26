<?php

namespace SwiffyParser;

use SwiffyParser\Result\StringResult;

class HtmlExtractor implements Extractor {
    /**
     * @param $input ExtractorInput
     * @return Result
     */
    public function extract(ExtractorInput $input)
    {
        $string = '';
        while(!$input->isEof()) {
            $string .= $input->getStream();
        }

        $result = new StringResult($string);
        return $result;
    }

}
