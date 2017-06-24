<?php
namespace Twitch\ApiBundle\Service;

use Psr\Log\LoggerInterface;
use GuzzleHttp\Client;
class TwitchClientService
{
    const TWITCH_API_HEADER_VERSION = 'application/vnd.twitchtv.v5+json';
    const TWITCH_API_ROOT_URL = 'https://api.twitch.tv/kraken/';

    /* @var LoggerInterface */
    private $logger;

    /* @var Client */
    private $guzzel;

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

    public function __construct(LoggerInterface $logger, $twitchApiClientId, $twitchApiClientSecret)
    {
        $this->logger = $logger;
        $this->guzzel = new Client([
            'base_uri' => self::TWITCH_API_ROOT_URL
        ]);
        $this->twitchApiClientId = $twitchApiClientId;
        $this->twitchApiClientSecret = $twitchApiClientSecret;
    }

    public function getHello(){
        return 'hi';
    }

}