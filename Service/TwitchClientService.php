<?php

namespace Twitch\ApiBundle\Service;

use Psr\Log\LoggerInterface;
use GuzzleHttp\Client;

class TwitchClientService
{
    const TWITCH_API_HEADER_VERSION = 'application/vnd.twitchtv.v5+json';
    const TWITCH_API_ROOT_URL = 'https://api.twitch.tv';

    /* @var LoggerInterface */
    private $logger;

    /* @var Client */
    private $client;

    /**
     * Twitch Client Id
     * @var string
     */
    private $twitchApiClientId;

    /**
     * Twitch Client Secret
     * @var string
     */
    private $twitchApiClientSecret;

    /**
     * base headers
     */
    private $headers;

    /**
     * TwitchClientService constructor.
     * @param LoggerInterface $logger
     * @param $twitchApiClientId
     * @param $twitchApiClientSecret
     */
    public function __construct(LoggerInterface $logger, $twitchApiClientId = null, $twitchApiClientSecret = null)
    {
        $this->logger = $logger;
        $this->twitchApiClientId = $twitchApiClientId;
        $this->twitchApiClientSecret = $twitchApiClientSecret;
        $this->headers = $twitchApiClientId ? [
            'Client-ID' => $twitchApiClientId,
            'Accept' => self::TWITCH_API_HEADER_VERSION
        ] : [
            'Accept' => self::TWITCH_API_HEADER_VERSION
        ];
        $this->client = new Client([
            'base_uri' => self::TWITCH_API_ROOT_URL,
            'headers' => $this->headers
        ]);
    }

    public function getRequest($url, $headers = [], $type = 'GET')
    {
        $response = $this->client->request($type, $url, ['headers' => $headers]);
        return $response->getBody()->getContents();
    }


}