<?php
namespace Mzm\Utils;

/**
 * StringUtils class
 * A collection of useful php functions for strings
 */
class StringUtils
{
    /**
     * Concatenation of two strings
     *
     * @param string $firstString First string to concat
     * @param string $secondString Second string to concat
     *
     * @return string
     */
    public static function concat(
        string $firstString,
        string $secondString
    ) : string {
        return $firstString . $secondString;
    }

    /**
     * Replace all occurrences of the search string with the replacement string
     * This function is case-sensitive
     *
     * @param mixed $search The value being searched for
     * @param mixed $replace The replacement value that replaces found search values
     * @param mixed $subject The string or array being searched and replaced on
     *
     * @return mixed
     */
    public static function replace($search, $replace, $subject)
    {
        return str_replace($search, $replace, $subject);
    }

    /**
     * Generate a md5 hash value of a string
     *
     * @param string $string
     *
     * @return string
     */
    public static function toMd5(string $string) : string
    {
        return hash('md5', $string, false);
    }

    /**
     * Generate a sha512 hash value of a string
     *
     * @param string $string
     *
     * @return string
     */
    public static function toSha512(string $string) : string
    {
        return hash('sha512', $string, false);
    }

    /**
     * Strip whitespace (or other characters) from the beginning and end of a string
     * according to a set of charactermasks. This function by default will strip
     * these characters: an ordinary space, a tab, a new line, a carriage return,
     * the NUL-byte and a vertical tab
     *
     * @param string $string
     * @param string $characterMask a range of characters that will stripped
     *
     * @return string
     */
    public static function trim(
        string $string,
        string $characterMask = " \t\n\r\0\x0B"
    ) : string {
        return trim($string, $characterMask);
    }

    /**
     * Make a string uppercase
     *
     * @param string $string
     *
     * @return string
     */
    public static function toUpper(string $string) : string
    {
        return strtoupper($string);
    }

    /**
     * Make a string lowercase
     *
     * @param string $string
     *
     * @return string
     */
    public static function toLower(string $string) : string
    {
        return strtolower($string);
    }

    /**
     * Put a new line at the end of string
     *
     * @param string $string
     *
     * @return string
     */
    public static function writeLine(string $string) : string
    {
        return $string . "\n";
    }
}
