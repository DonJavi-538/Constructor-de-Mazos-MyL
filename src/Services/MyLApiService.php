<?php

namespace App\Service;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

class MyLApiService
{

    public function __construct()
    {
        $this->base_uri = 'https://api.myl.cl';
    }

    public function editionBySlug(string $edslug): string
    {
        $data = file_get_contents("https://api.myl.cl/cards/edition/$edslug");
        $data = json_decode($data);
        $data = json_encode($data, JSON_PRETTY_PRINT);

        return $data;
    }

    public function editionInfo(string $edslug): string
    {
        $data = json_decode($this->editionBySlug($edslug))->edition;
        $data = json_encode($data, JSON_PRETTY_PRINT);

        return $data;
    }

    public function racesByEdition(string $edslug): string
    {
        $data = json_decode($this->editionBySlug($edslug))->races;
        $data = json_encode($data, JSON_PRETTY_PRINT);

        return $data;
    }

    public function raritiesByEdition(string $edslug): string
    {
        $data = json_decode($this->editionBySlug($edslug))->rarities;
        $data = json_encode($data, JSON_PRETTY_PRINT);

        return $data;
    }

    public function typesByEdition(string $edslug): string
    {
        $data = json_decode($this->editionBySlug($edslug))->types;
        $data = json_encode($data, JSON_PRETTY_PRINT);

        return $data;
    }

    public function keywordsByEdition(string $edslug): string
    {
        $data = json_decode($this->editionBySlug($edslug))->keywords;
        $data = json_encode($data, JSON_PRETTY_PRINT);

        return $data;
    }

    public function cardsByEdition(string $edslug): string
    {
        $data = json_decode($this->editionBySlug($edslug))->cards;
        $data = json_encode($data, JSON_PRETTY_PRINT);

        return $data;
    }

    public function cardCover(string $edid, string $cid): string
    {

        $ref =  "https://api.myl.cl/static/cards/$edid/$cid.png";

        return $ref;
    }
}
