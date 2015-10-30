<?php

namespace Philsquare\LaraDev\Filesystem;

use Illuminate\Support\Facades\File;

class Filesystem {

    public function directoryExists($path)
    {
        return File::isDirectory($path);
    }

    public function createDirectory($path)
    {
        return File::makeDirectory($path, null, true);
    }

    public function copyDirectory($from, $to)
    {
        return File::copyDirectory($from, $to);
    }
}