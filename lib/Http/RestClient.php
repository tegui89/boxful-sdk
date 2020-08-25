<?php
namespace Boxful\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\StreamInterface;

class RestClient
{
    /**
     * @var Client
     */
    protected static $client;

    /**
     * @var array
     */
    protected static $header;

    /**
     * @param string $entity Nombre de la entidad
     * @param array|null $params El array de parametros de la URL
     * @param array|null $qs El array de querystring
     * @return StreamInterface|null
     * @throws GuzzleException
     * @see     http://docs.guzzlephp.org/en/stable/quickstart.html#making-a-request
     */
    public static function get(string $entity, array $params = null, array $qs = null)
    {
        $qs = [
            'query' => $qs,
        ];

        $options = array_merge(self::$header, $qs);

        $r =self::$client->get($entity, $options);

        $response = $r->getBody()->getContents();
        if (empty($response) || $response == 'null') {
            return null;
        }

        return json_decode($response);
    }

    public static function post(array $params)
    {
        $body = [
            'json' => $params,
        ];

        /*$options = array_merge($this->headers, $body);

        $r = $this->client->post('comprobante', $options);

        $t = $r->getBody()->getContents();

        if (empty($t) || $t == 'null') {
            return null;
        }

        return json_decode($t);*/
    }

    public static function put()
    {
        // todo method
    }

    public static function delete()
    {
        //todo method
    }

    public static function setClient(array $config)
    {
        self::$client = new Client($config);
    }

    public static function setHeader(array $opt)
    {
        self::$header = $opt;
    }
}
