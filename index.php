<!DOCTYPE html>
<?php 
    require_once __DIR__ . '/models/Movie.php';

    $PiratesCaribbean = new Movie('Pirates of the caribbean: the course of the black pearl', 'adventure', '80', ['Johnny Depp', 'Orlando Bloom', 'Keira Knightley', 'Geoffrey Rush', 'Kevin McNally', 'Kevin McNally']);
    $starWars = new Movie('Star wars: a new hope', 'space opera', '93', ['Mark Hamill', 'Carrie Fisher', 'Harrison Ford', 'Alec Guinness', 'Peter Mayhew', 'David Prowse']);
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP 1</title>
    </head>
    <body>
        <main>
            <article>
                <?php
                    echo "
                        <h2>$PiratesCaribbean->title</h2>
                        <p>Genre: $PiratesCaribbean->genre</p>
                        <p>Rotten tomatoes: $PiratesCaribbean->rating%</p>";

                        echo '<p>Cast</p>';

                        echo '<ul>';
                            foreach ($PiratesCaribbean->cast as $member) {
                                echo "<li>$member</li>";
                            }
                        echo '</ul>';
                ?>
            </article>

            <article>
                <?php
                    echo "
                        <h2>$starWars->title</h2>
                        <p>Genre: $starWars->genre</p>
                        <p>Rotten tomatoes: $starWars->rating%</p>";

                        echo '<p>Cast</p>';

                        echo '<ul>';
                            foreach ($starWars->cast as $member) {
                                echo "<li>$member</li>";
                            }
                        echo '</ul>';
                ?>
            </article>
        </main>
    </body>
</html>