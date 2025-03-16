<?php

use App\BookController;
use function Tempest\uri;

?>

<x-base>
    <x-form action="<?= uri([BookController::class, 'store']) ?>">
        <x-input name="title" label="Title" />
        <x-input name="description" label="Description" />
        <x-input type="date" name="publishedAt" label="Published at" />
        <x-submit />
    </x-form>
    <div>

    </div>
</x-base>