<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        /* display: grid; */
        /* place-items: center; */
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }
</style>
</head>
<body>
        <?php
            $books = [
                [
                    'name' => 'History',
                    'author'=> 'Francis',
                    'release' => 2001,
                    'url' => 'http://history.in'
                ],
                [
                    'name' => 'Civics',
                    'author'=> 'Gorge',
                    'release' => 1995,
                    'url' => 'http://civics.in'
                ],
                [
                    'name' => 'Economics',
                    'author'=> 'john',
                    'release' => 2005,
                    'url' => 'http://economics.in'
                ],
                [
                    'name' => 'Geography',
                    'author'=> 'john',
                    'release' => 1978,
                    'url' => 'http://geography.in'
                ]
                ];
                function filterByAuthor($books) {
                    $filterBooks = [];

                    foreach($books as $book) {
                        if($book['author'] === 'john') {
                            $filterBooks[] = $book;
                        }
                    }
                    return $filterBooks;
                }
        ?>
        <h1>Recommended Books;</h1>
        <ul>
            <?php foreach(filterByAuthor($books) as $book) : ?>
                <li>    
                    <a href="<?= $book['url'] ?>">
                        <?= $book['name'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
       </div> 
</body>
</html>