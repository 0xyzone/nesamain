{{-- {{ $news->body }} --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="quill-content prose max-w-none">
        {{ new \Illuminate\Support\HtmlString($news->body) }}
    </div>
</body>
</html>