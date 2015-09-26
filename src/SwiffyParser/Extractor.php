<?php

namespace SwiffyParser;

/**
 * Interface Extractor
 * @package SwiffyParser
 * @author Athlan
 */
interface Extractor {
    /**
     * @param $input ExtractorInput
     * @return Result
     */
    public function extract(ExtractorInput $input);
}
