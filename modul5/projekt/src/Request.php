<?php
namespace Parser;


class Request
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getHtmlForRequest()
    {
        return file_get_contents($this->url);
    }
}