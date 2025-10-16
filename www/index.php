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
    <div class="container">
        <header id="home" class="header">
            <!-- NAVBAR -->
            <?php include 'navbar.php' ?>
            
        </header>
        <!-- LEFT SIDE BAR -->
        <div class="content">
            <aside class="sidebar-left">
                <h1>Dimitris Panagiotidis</h1>
                <img src="./images/Dimitris_cartoon.png" alt="Dimitris Panagiotidis">
                <h2>Software Developer</h2>
                <h3>In Progress</h3>
                <h3>at Nova College</h3>
                <h3>Haarlem</h3>
                <h3>The Netherlands</h3>
                <h3>Contact: dimitris@example.com</h3>
                <h3>Social Media:</h3>
                </aside>
            <main class="intro">
                <!-- BEGIN OF ABOUT ME  -->
                <section id="about" class="about">
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
                

                <!-- BEGIN OF EDUCATION -->
                <section id="education" class="education">
                    <h2>Education</h2>
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Institution</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Year</th>
                                <th scope="col">More Information</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($educations as $education): ?>
                                <tr>
                                    <td><?php echo $education['school_name']; ?></td>
                                    <td><?php echo $education['difficulty']; ?></td>
                                    <td><?php echo $education['start_year']; ?> - <?php echo $education['end_year'] ?></td>
                                    <td><a href="education-details.php?id=<?php echo $education['id'] ?>">More Information</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </main>
                    <!--RIGHT SIDEBAR  -->
            <aside class="sidebar-right">
                <p>TEST</p>
            </aside>
        </div>
        <footer>
            <?php include 'footer.php' ?>
        </footer>
    </div>
</body>

</html>