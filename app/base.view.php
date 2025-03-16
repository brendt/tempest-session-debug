<x-component name="x-base">
    <html lang="">
    <head>
        <title>My Books</title>
        <x-vite-tags :entrypoints='["app/main.css","app/main.ts"]' />

        <style>
            input {
                border: 1px solid #cccccc;
                padding: 3px;
                border-radius: 3px;
            }
        </style>
    </head>
    <body>
        <x-slot />
    </body>
    </html>
</x-component>