<?php

namespace App\Helpers;

class TitleGenerator
{
    /**
     * Parts of title
     *
     * @var string[]
     */
    public $parts = [];

    public function __construct() {
        $this->parts[] = config('app.name');
    }

    public function push($part) {
        $this->parts[] = (string) $part;
    }

    public function compile() {
        switch (count($this->parts)) {
            case 3:
                return $this->parts[2] . ' - ' . $this->parts[1] . ' | ' . $this->parts[0];
            case 2:
                return $this->parts[1] . ' | ' . $this->parts[0];
            case 1:
            default:
                return config('app.name');
        }
    }
}
