<?php

/**
 * Class FormatNumber
 */
class FormatNumber implements Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string
    {
        return number_format($input);
    }
}
