<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

        <h1>
           <?= $name ?>'s Laravel Page. And he's <?= (string)$age ?>. Just sayin'...
        </h1>

        <ul>
            <?php foreach ($phpinfo as $info) : ?>
                <li><?= $info ?></li>
            <?php endforeach ?>
        </ul>

        <ul>
            @foreach ($phpinfo as $info)
                <li>{{ $info }}</li>
            @endforeach
        </ul>

    </body>
</html>
