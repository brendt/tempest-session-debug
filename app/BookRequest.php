<?php

namespace App;

use DateTimeImmutable;
use Tempest\Router\IsRequest;
use Tempest\Router\Request;

final class BookRequest implements Request
{
    use IsRequest;

    public string $title;

    public string $description;

    public ?DateTimeImmutable $publishedAt = null;
}