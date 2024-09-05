<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <nav>
        <a @class(['current' => request()->is('/')]) href="/">Todos</a>
        <a @class(['current' => request()->is('counter')]) href="/counter">Counter</a>
        <a @class(['current' => request()->is('posts')]) href="/posts">Posts</a>
        <a @class(['current' => request()->is('create-post')]) href="/create-post">Create Post</a>
    </nav>
    {{ $slot }}
</body>

</html>
