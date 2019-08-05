<?php

namespace LegacyBeta\Tapfiliate\Laravel;

use LegacyBeta\Tapfiliate\Adapter\Guzzle;
use LegacyBeta\Tapfiliate\Auth\ApiKey;
use LegacyBeta\Tapfiliate\Endpoints\Commissions;
use LegacyBeta\Tapfiliate\Endpoints\Conversions;

class Tapfiliate
{
    protected $adapter;

    public function __construct()
    {
        $auth = new ApiKey(config('tapfiliate.api-key'));
        $this->adapter = new Guzzle($auth);
    }

    public function commissions(): Commissions
    {
        return new Commissions($this->adapter);
    }

    public function conversions(): Conversions
    {
        return new Conversions($this->adapter);
    }
}