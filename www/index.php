<?php

require 'database.php';

$sql = "SELECT * FROM educations";
$result = mysqli_query($conn, $sql);
$educations = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimitris Panagiotidis</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
</head>

<body>
    <header id="home">
        <!-- NAVBAR -->
        <?php include 'navbar.php' ?>
        <!-- END OF NAVBAR -->
        <div class="intro">
            <h1>Sup! My name is Dimitrios Panagiotidis</h1>
            <h2>Software Developer wannabe...</h2>
            <img src="./images/Dimitris_cartoon.png" alt="Dimitris Panagiotidis">
        </div>
    </header>
    <main>
        <!-- BEGIN OF ABOUT ME  -->
        <section id="about">
            <article>
                <h2>About Me</h2>
                <p>My name is Dimitris and I am 22 years old.</p>
                <ul>
                    <li>I am a Software Developer in progression.</li>
                    <li>At the moment, I am educating myself at Nova College in Haarlem.</li>
                    <li>I have been working/studying as a cook for 4 years straight from 2019 until 2023.</li>
                    <li>I am self-taught in building computers — in my spare time, I am usually around technology.</li>
                    <li>Dutch | English | Greek</li>
                </ul>
            </article>
        </section>
        <!-- END OF ABOUT ME -->

        <!-- BEGIN OF EDUCATION -->
        <section id="education">
            <h2>Education</h2>
            <table>
                <caption>Educational background</caption>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Institution</th>
                    <th scope="col">Degree</th>
                </tr>
                <tr>
                    <td>2023 - Present</td>
                    <td>Nova College, Haarlem</td>
                    <td>Software Developer (MBO-4)</td>
                </tr>
                <tr>
                    <td>2017 - 2019</td>
                    <td>ROC van Amsterdam, Amsterdam</td>
                    <td>Cook (MBO-3)</td>
                </tr>
                <tr>
                    <td>2011 - 2017</td>
                    <td>Montessori Lyceum, Amsterdam</td>
                    <td>High School Diploma (HAVO)</td>
                </tr>
            </table>
        </section>

        <!-- END OF EDUCATION -->



    </main>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

</html>