<?php
use PHPUnit\Framework\TestCase;
use Mzm\Utils\StringUtils;

class StringUtilsTest extends TestCase
{
    /**
     * @dataProvider cancatProvider
     */
    public function testConcatString(
        $string1,
        $string2,
        $expected
    ) {
        $this->assertSame($expected, StringUtils::concat($string1, $string2));
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testReplace(
        $search,
        $replace,
        $subject,
        $expected
    ) {
        $this->assertSame($expected, StringUtils::replace($search, $replace, $subject));
    }

    public function testToMd5()
    {
        $this->assertSame('9cf8212db1c7a9be950739af2c601ff0', StringUtils::toMd5('Convert me to md5'));
    }

    public function testToSha512()
    {
        $this->assertSame('aed7bbc40115a45d1fa8494934b5bb1fb4c44d65f02e24d297336e0e61600fc1e4abe6f966b4d246c1f4682e066b3d045e758c57a94c2a92198c2da2d656d7ad', StringUtils::toSha512('Convert me to sha512'));
    }

    /**
     * @dataProvider trimProvider
     */
    public function testTrim($string, $expected)
    {
        $this->assertSame($expected, StringUtils::trim($string));
    }

    public function testTrimByCharactermask()
    {
        $this->assertSame('Trim Test', StringUtils::trim('X Y XYTrim TestXYY XXY Y ', 'YX '));
    }

    /**
     * @dataProvider toUpperProvider
     */
    public function testToUpper($string, $expected)
    {
        $this->assertSame($expected, StringUtils::toUpper($string));
    }

    /**
     * @dataProvider toLowerProvider
     */
    public function testToLower($string, $expected)
    {
        $this->assertSame($expected, StringUtils::toLower($string));
    }

    public function testWriteLine()
    {
        $this->assertSame("Make me a line\n", StringUtils::writeLine('Make me a line'));
    }

    /**
     * Data provider for testing string concatenation
     */
    public function cancatProvider()
    {
        return [
            'two long sentence' => ['He is a', ' web developer', 'He is a web developer'],
            'a and b' => ['a', 'b', 'ab'],
            'empty and b' => ['', 'b', 'b'],
            'a and empty' => ['a', '', 'a'],
            'empty and empty' => ['', '', ''],
        ];
    }

    /**
     * Data provider for testing string replacing
     */
    public function replaceProvider()
    {
        return [
            ['hello', 'hi', 'hello world', 'hi world'],
            [
                ['bad', 'developer'],
                ['good', 'programmer'],
                'He is a bad developer',
                'He is a good programmer',
            ],
            [
                ['bad', 'developer'],
                ['good', 'programmer'],
                ['He is a bad developer', 'I am a bad person', 'I am developer'],
                ['He is a good programmer', 'I am a good person', 'I am programmer'],
            ]
        ];
    }

    /**
     * Data provider for testing string triming
     */
    public function trimProvider()
    {
        return [
            'ordinary space' => [' Hi ', 'Hi'],
            'new line' => ["\nTrim Me\n\n", 'Trim Me'],
        ];
    }

    /**
     * Data provider for testing string to upper case
     */
    public function toUpperProvider()
    {
        return [
            ['a', 'A'],
            ['make me upper', 'MAKE ME UPPER'],
            ['mAke me Upper', 'MAKE ME UPPER']
        ];
    }

    /**
     * Data provider for testing string to lower case
     */
    public function toLowerProvider()
    {
        return [
            ['A', 'a'],
            ['MAKE ME LOWER', 'make me lower'],
            ['MakE ME LOwER', 'make me lower'],
        ];
    }
}
