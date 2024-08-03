<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://app.diagrams.net/#G1R9_DKMIKJC6dEATPrEbHeBT79K5Kva4m#%7B%22pageId%22%3A%222cc2dc42-3aac-f2a9-1cec-A%22%7D" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'></div>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>