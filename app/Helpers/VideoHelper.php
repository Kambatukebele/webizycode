<?php

// app/Helpers/VideoHelper.php
namespace App\Helpers;

class VideoHelper {
    public static function getVideoId($url) {
        $videoId = null;

        $urlParts = parse_url($url);
        if (isset($urlParts['query'])) {
            parse_str($urlParts['query'], $query);
            if (isset($query['v'])) {
                $videoId = $query['v'];
            }
        } elseif (preg_match('/youtu.be\/([^\/]+)/', $url, $matches)) {
            $videoId = $matches[1];
        }

        return $videoId;
    }
}