<?php

require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM educations WHERE id =$id";
$result = mysqli_query($conn,$sql);
$education = mysqli_fetch_assoc($result);









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $education['school_name']; ?> - Details</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header id="home" class="header">
            <!-- NAVBAR -->
            <?php include 'navbar.php' ?>
        </header>
        
        <main class="content-education-detail">
            <section class="education-detail">
                <h1><?php echo $education['school_name']; ?></h1>
                
                <div class="detail-content">
                    <div class="detail-image">
                        <img src="./images/<?php echo $education['image']; ?>" alt="<?php echo $education['school_name']; ?>">
                    </div>
                    
                    <div class="detail-text">
                        <h2>Details</h2>
                        <p><strong>Degree:</strong> <?php echo $education['difficulty']; ?></p>
                        <p><strong>Year:</strong> <?php echo $education['start_year']; ?> - <?php echo $education['end_year']; ?></p>
                        <p><strong>Description:</strong> <?php echo $education['description']; ?></p>
                        <a href="index.php#education">Back to Education List</a>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <?php include 'footer.php' ?>
        </footer>
    </div>
</body>
</html>