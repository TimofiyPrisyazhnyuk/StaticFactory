<?php

/**
 * Class FormatString
 */
class FormatString implements Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string
    {
        return $input;
    }
}
