<?php
namespace Boxful;
use Boxful\Http\RestClient;

class Entity
{
    public function read()
    {
        $class = get_called_class();
        RestClient::get($class, [], []);
    }

    public function create()
    {
        RestClient::post([]);
    }

    public function update()
    {
        RestClient::put();
    }

    public function delete()
    {
        RestClient::delete();
    }

    public function getAttributes()
    {

    }
}
