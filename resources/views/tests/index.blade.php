<!DOCTYPE html>
<html>
    <head>
        
        <title> </title>

    </head>
    <body>

        <ul>
            @foreach ($tests as $test)
                <li>{{ $test->info }}</li>
            @endforeach
        </ul>

    </body>
</html>