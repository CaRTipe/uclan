<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="SSstyle.css"> <!-- Link to the stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<style>
    video,
    iframe {
        border-radius: 20px;
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
    }

    li {
        list-style: none;
    }
</style>

<body>

    <?php
    include('navbar/navbar.php');
    ?>
    <div class="container mt-5"> <!-- Main content section -->
        <h2 class="h2" style="text-align: center; color: rgb(60, 105, 196);">Where opportunity creates success</h2> <!-- Subheading message -->
        <div class="main-writings"> <!-- Brief introductory message -->
            <p>Every student at The University of Central Lancashire is automatically a member of the Students'Union. We're here to make life better for students - inspiring you to succeed and achieve your goals.</p>

            <p> Everything you need to know about UCLan Students'Union. Your membership starts here.</p>
        </div>
    </div>

    <div class="container mt-5"> <!-- Embedded video for promotional content -->
        <h3 class="h2 mt-5" style="text-align: center; color: rgb(60, 105, 196);">Together</h3> <!-- Community Section -->
        <video class="ratio" controls autoplay muted loop>
            <source src="./assets/videos/video.mp4">
            <source src="video.WebM">
            This browser doesnot support HTML5 <!-- Fallback message for browsers that do not support video -->
        </video>

        <h3 class="h2 mt-5" style="text-align: center; color: rgb(60, 105, 196);">Join Our Global Community</h3> <!-- promotional content heading -->
        <iframe class="frame" style="border:0" src="https://youtube.com/embed/EI_lco-qdw8"></iframe> <!-- Embedded Youtube video -->
    </div>

    <?php
    include('navbar/footer.php'); // Include the footer from an external file
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>

</html>