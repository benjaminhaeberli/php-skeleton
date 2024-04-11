<?php

declare(strict_types=1);

if (!function_exists('phpSkeleton')) {
    /**
     * Get the currently authenticated user (typed method for Nanou).
     */
    function phpSkeleton(): string
    {
        return 'This is a PHP skeleton created by Benjamín Haeberli';
    }
}
