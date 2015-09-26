<?php

use SwiffyParser\Extractor\HtmlExtractor;
use SwiffyParser\ExtractorInput\StringInput;
use SwiffyParser\Result\ResultUtil;

/**
 * Class HtmlExtractorTest
 * @package SwiffyParser
 * @author Athlan
 */
class HtmlExtractorTest extends \PHPUnit_Framework_TestCase {

    public function test_should_extract_properly() {
        $contents = file_get_contents('resources/example.html');

        $input = new StringInput($contents);
        $extractor = new HtmlExtractor();

        $result = $extractor->extract($input);

        $this->assertNotNull($result);

        $resultString = ResultUtil::toString($result);
        $this->assertEquals(
            '{"as3":false,"frameRate":25,"frameCount":325,"backgroundColor":-1}',
            $resultString
        );
    }

}
