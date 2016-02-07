<?php

namespace FaizShukri\Quran\Repositories\Source;

use FaizShukri\Quran\Supports\Config;

class SQLRepository implements SourceInterface
{
    private $config;

    public function setConfig(Config $config)
    {
        $this->config = $config;
    }

    public function initialize()
    {
    }

    public function surah($surah = null)
    {
        // TODO: Implement chapter() method.
    }

    public function ayah($surah, $ayah, $translation = 'ar')
    {
        // TODO: Implement ayah() method.
    }
}
