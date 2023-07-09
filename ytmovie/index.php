<?php
include("header.php");
include("conn.php");

$con = new connec();
$dta = $con->select_all('slider');
?>


<section style="min-height:450px;">

<div id="carouselId" class="carousel slide" data-ride="carousel">
    <?php
    if ($dta && $dta->num_rows > 0) {
        $i = 0;

        echo '<ol class="carousel-indicators">';
        while ($row = $dta->fetch_assoc()) {
            if ($i === 0) {
                echo '<li data-target="#carouselId" data-slide-to="' . $i . '" class="active"></li>';
            } else {
                echo '<li data-target="#carouselId" data-slide-to="' . $i . '"></li>';
            }
            $i++;
        }
        echo '</ol>';

        echo '<div class="carousel-inner" role="listbox">';
        $j = 0;
        $dta->data_seek(0); // Reset the result set pointer to the beginning
        while ($row1 = $dta->fetch_assoc()) {
            if ($j === 0) {
                ?>
                <div class="carousel-item active">
                    <img src="<?php echo $row1["image_path"]; ?>" alt="<?php echo $row1["alt"]; ?>"
                        style="width:100%; height:450px;">
                </div>
                <?php
            } else {
                ?>
                <div class="carousel-item">
                    <img src="<?php echo $row1["image_path"]; ?>" alt="<?php echo $row1["alt"]; ?>"
                        style="width:100%; height:450px;">
                </div>
                <?php
            }
            $j++;
        }
        echo '</div>'; // Closing div for carousel-inner
    }
    ?>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</section>

<?php
include("footer.php");
?>


<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        main{
            width: 70%;
            height: 400px;
            margin: auto;
            margin-top: 100px;
            box-shadow: 0px 0px 3px grey;
            position: relative;
            overflow: hidden; /* Added overflow property to hide overflowing images */
        }
        .slide{
            width: 100%;
            height: 100%;
            position: absolute;
            transition: transform 0.3s ease-in-out; /* Added transition property for smooth animation */
        }
        .nav{
            display: flex; /* Added display property to flex to center buttons */
            justify-content: center;
            margin-top: 10px;
        }
        .nav button{
            font-size: 25px;
            padding: 5px;
            background: none;
            border: none;
            cursor: pointer;
        }
        .nav button:focus {
            outline: none;
        }
        .nav button::before {
            content: "";
            display: inline-block;
            width: 10px;
            height: 10px;
            border-top: 2px solid #000;
            border-right: 2px solid #000;
            transform: rotate(45deg);
            margin-right: 5px;
        }
        .nav .prev::before {
            transform: rotate(-135deg);
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <main>
        <img src="images/bg1.jfif" class="slide" alt="">
        <img src="images/bg1.jfif" class="slide" alt=""> 
        <img src="images/bg1.jfif" class="slide" alt="">
    </main>
    <div class="nav">
        <button class="prev" onclick="goprev()"></button>
        <button class="next" onclick="gonext()"></button>
    </div>

    <script type="text/javascript">
        const slides = document.querySelectorAll(".slide"); // Added dot before the class name to select all slides
        var counter = 0;
        slides.forEach(
            (slide, index)=>{
                slide.style.left = `${index * 100}%`; // Added missing backticks to correctly interpolate the value
            }
        );
        const goprev = () => {
            counter--;
            slideImage();
        };
        const gonext = () => {
            counter++;
            slideImage();
        };
        const slideImage = () => {
            slides.forEach(
                (slide) =>{
                    slide.style.transform = `translateX(-${counter * 100}%)`; // Added missing backticks and closed curly brace
                }
            );
        };
    </script>
</body>
</html>
    -->