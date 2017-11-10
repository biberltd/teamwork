<?php

namespace Biberltd\Teamwork;


use Biberltd\Teamwork\Contracts\ClientInterface;

class Factory
{
    private $client;

    /**
     * Factory constructor.
     * @param $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }


}