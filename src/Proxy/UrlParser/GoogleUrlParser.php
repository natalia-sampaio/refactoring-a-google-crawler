<?php

namespace CViniciusSDias\GoogleCrawler\Proxy\UrlParser;

use Psr\Http\Message\ResponseInterface;

interface GoogleUrlParser
{
    /**
     * Parses an URL based on how they are encoded in the proxy service
     *
     * @param string $url
     * @return string
     * @throws InvalidResultException
     */
    public function parseUrl(string $googleUrl): string;
}