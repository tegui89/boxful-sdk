<?php
namespace Boxful;

use Boxful\Http\RestClient;

/**
 * Class Boxful
 * @package Boxful
 */
class Boxful
{
    /**
     * The user accessToken to be used for requests.
     * @var string
     *
     */
    public static $access_token;

    /**
     * The base URL for the Boxful API.
     * @var string
     */
    public static $apiBase = 'https://vidroop.boxful.io/api/v1';

    /**
     * The base URL for the OAuth API.
     * @var string
     */
    public static $connectBase = '';

    /**
     * string|null The version of the Boxful API to use for requests.
     * @var string|null
     */
    public static $apiVersion = null;

    /**
     * The account ID for connected accounts requests.
     * @var string|null
     */
    public static $accountId = null;

    /**
     * produce messages.
     * Util\LoggerInterface|null The logger to which the library will
     * @var string|null //cambiar aca
     */
    public static $logger = null;

    /**
     * Permite configurar el client de guzzle
     * @throws \Exception
     */
    public static function initialize()
    {
        if (!empty(self::$access_token)) {
            RestClient::setClient([
                'base_uri' => self::$apiBase,
                'timeout' => 20,
                'allow_redirects' => false,
            ]);

            RestClient::setHeader([
                'bearer' => self::$access_token
            ]);
        } else {
            throw new \Exception('Please, set access_token first');
        }
    }

    /**
     * @return string The accessToken used for requests.
     */
    public static function getAccessToken()
    {
        return self::$access_token;
    }

    /**
     * Sets the accessToken to be used for requests.
     *
     * @param $accessToken
     */
    public static function setAccessToken($accessToken)
    {
        self::$access_token = $accessToken;
    }

    /**
     * @return string The API version used for requests. null if we're using the
     *    latest version.
     */
    public static function getApiVersion()
    {
        return self::$apiVersion;
    }

    /**
     * @param string $apiVersion The API version to use for requests.
     */
    public static function setApiVersion($apiVersion)
    {
        self::$apiVersion = $apiVersion;
    }

//   /**
//     * @return Util\LoggerInterface The logger to which the library will
//     *   produce messages.
//     */
//    public static function getLogger()
//    {
//        if (self::$logger == null) {
//            return new Util\DefaultLogger();
//        }
//        return self::$logger;
//    }
//    /**
//     * @param Util\LoggerInterface $logger The logger to which the library
//     *   will produce messages.
//     */
//    public static function setLogger($logger)
//    {
//        self::$logger = $logger;
//    }
}
