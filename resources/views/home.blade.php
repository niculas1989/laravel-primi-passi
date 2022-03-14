<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <header>
        <ul>
            <li>
                <a href="{{route('link-one')}}">Link uno</a>
            </li>
            <li>
                <a href="{{route('link-two')}}">Link due</a>
            </li>
            <li>
                <a href="{{route('link-three')}}">Link tre</a>
            </li>

        </ul>
    </header>

    <h1>Test</h1>
    @foreach ($welcome as $wl)
    <p>{{ $wl }}</p>
    @endforeach
</body>

</html>