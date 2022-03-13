<?php

namespace Allen\DesignPatterns\Proxy1;

/**
 * The Proxy class is our attempt to make the download more efficient. It wraps
 * the real downloader object and delegates it the first download calls. The
 * result is then cached, making subsequent calls return an existing file
 * instead of downloading it again.
 *
 * Note that the Proxy MUST implement the same interface as the Real Subject.
 */
class CachingDownloader implements Downloader
{
    /**
     * @var SimpleDownloader
     */
    private $downloader;

    /**
     * @var string[]
     */
    private $cache = [];

    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }
        return $this->cache[$url];
    }
}