<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
        <div class='post'>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
        </div>
        <div class="back">[<a href="/posts">back</a>]</div>
    </body>
</html>