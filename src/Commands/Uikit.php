<?php namespace Philsquare\LaraDev\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Philsquare\LaraDev\Filesystem\Filesystem;

class Uikit extends Command {

    protected $signature = 'install:uikit';

    protected $description = 'Install uikit';

    protected $version = '2.23.0';

    protected $lessVendorPath = 'resources/assets/less/vendor';

    protected $jsVendorPath = 'resources/assets/js/vendor';

    protected $fontVendorPath = 'public/fonts/uikit/';

    protected $file;

    public function __construct(Filesystem $file)
    {
        parent::__construct();
        $this->file = $file;
    }

    public function handle()
    {
        $this->installLess();
        $this->installJs();
        $this->installFonts();
    }

    public function installLess()
    {
        $path = $this->buildPath([$this->lessVendorPath, 'uikit-' . $this->version]);

        $this->copyDirectory(__DIR__ . '/../resources/less/uikit-' . $this->version, $path);
    }

    public function installJs()
    {
        $path = $this->buildPath([$this->jsVendorPath, 'uikit-' . $this->version]);

        $this->copyDirectory(__DIR__ . '/../resources/js/uikit-' . $this->version, $path);
    }

    public function installFonts()
    {
        $this->copyDirectory(__DIR__ . '/../resources/fonts', $this->fontVendorPath);
    }

    private function buildPath(array $segments)
    {
        return implode('/', $segments);
    }

    private function copyDirectory($from, $to)
    {
        if(! $this->file->directoryExists($to)) $this->file->createDirectory($to);

        $this->file->copyDirectory($from, $to);
    }
}