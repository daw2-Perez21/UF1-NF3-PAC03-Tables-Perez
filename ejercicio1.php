<?php
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (4, "2020-09-23", "CJ", "Peli chevere", 4),
    (4, "2020-09-2", "Santiago Abascal", "Me gusto la peli pero no sale España", 2),
    (4, "2020-09-6", "Donald Trump", "Make america great again", 5),
    (5, "2020-06-5", "Michel Jordan", "i like", 5),
    (5, "2020-04-12", "Messi", "chula la peli", 3),
    (5, "2020-05-2", "Usaint Bolt","demasiado lenta", 1),
    (6, "2020-03-3", "Eric.G", "Me gusto la peli aunque mas las palomitas", 4),
    (6, "2020-09-6", "Marc.A", "Me gusto la peli pero no php", 1),
    (6, "2020-04-4", "Joel.L", "asies", 5)    
ENDSQL;
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Movie database successfully updated!';
?>
