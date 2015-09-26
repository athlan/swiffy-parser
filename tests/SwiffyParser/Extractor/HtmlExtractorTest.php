<?php

namespace SwiffyParser;

class HtmlExtractorTest extends \PHPUnit_Framework_TestCase {

    public function test_should_extract_properly() {
        $contents = file_get_contents('resources/example.html');

        $this->assertTrue($contents != '');
    }

}
