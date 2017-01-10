<?php

namespace Ivebe\Lffmpeg\Helpers;

/**
 * Class Consts
 *
 * Just a helper
 *
 * @package Ivebe\Lffmpeg\Helpers
 */
class Consts
{
    const _1080p = '1080p';
    const _720p  = '720p';
    const _480p  = '480p';

    const ENCODING_PENDING = 0;
    const ENCODING_THUMBS  = 1;
    const ENCODING_VIDEO   = 2;
    const ENCODING_DONE    = 3;
    const READY            = 4;
}
