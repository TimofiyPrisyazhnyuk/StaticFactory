<?php

/**
 * Interface Formatter
 */
interface Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string;
}
