{{-- {{ $news->body }} --}}
@use(Illuminate\Support\HtmlString)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <link href="https://fonts.bunny.net/css?family=fira-code:300,400,500,600,700|pt-serif:400,400i,700,700i&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --font-serif-family: "PT Serif";
            --font-mono-family: "Fira Code";
        }
    </style>
</head>
<body>
    <div class="quill-content dark:prose-invert max-w-none" @style([ '--ql-default-size: 14px' ])>
        {{ new HtmlString($news->body) }}
    </div>
</body>
</html>
