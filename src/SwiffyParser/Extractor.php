<?php

namespace SwiffyParser;

interface Extractor {
    /**
     * @param $input ExtractorInput
     * @return Result
     */
    public function extract(ExtractorInput $input);
}
