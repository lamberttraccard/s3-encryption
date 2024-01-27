<?php

namespace App\Services\MediaLibrary;

use DateTimeInterface;
use Spatie\MediaLibrary\Support\UrlGenerator\DefaultUrlGenerator;

class UrlGenerator extends DefaultUrlGenerator
{
    public function getTemporaryUrl(DateTimeInterface $expiration, array $options = []): string
    {
        return route('medias.view', ['media' => $this->media]);
    }
}
