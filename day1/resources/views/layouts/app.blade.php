<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITI Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="navbar-brand" href="#">ITI Blog</a>
                    <a class="nav-link" href="{{ route('posts.index') }}">All Posts</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container-fluid mt-4">

        @yield('content')
    </div>
</body>

</html>
