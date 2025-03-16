<?php

declare(strict_types=1);

namespace App;

use Tempest\Router\Get;
use Tempest\Router\Post;
use Tempest\Router\Responses\Redirect;
use Tempest\View\View;
use function Tempest\uri;
use function Tempest\view;

final readonly class BookController
{
    #[Get('/')]
    public function index(): View
    {
        return view('book.view.php');
    }

    #[Post('/books')]
    public function store(BookRequest $request): Redirect
    {
        return new Redirect(uri([self::class, 'index']));
    }
}
