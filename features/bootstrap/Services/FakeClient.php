<?php

namespace Services;

use Inviqa\Worldpay\Api\Client;

class FakeClient implements Client
{
    public function sendAuthorizationRequest(string $xml)
    {
    }
}
