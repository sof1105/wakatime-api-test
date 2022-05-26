<?php

namespace App\Service;
use GuzzleHttp\Client as Guzzle;
use Mabasic\WakaTime\WakaTime;

class WakatimeService
{

    private ?string $wakatimeKey;
    public function __construct($watimeKey)
    {
        $this->wakatimeKey = $watimeKey;
    }

    public function load():WakaTime{

        $wakatime = new WakaTime(new Guzzle, $this->wakatimeKey);

        return $wakatime;
    }

}