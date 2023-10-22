<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filterable responsive lightbox gallery tutorial</title>

    <!-- magnific-popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style3.css">

</head>
<body>

<?php




$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
    die("sorry we failed to connect" . mysqli_connect_error());
} 

    ?>
<div class="gallery">

    <ul class="controls">
        <li class="buttons active" data-filter="all">all</li>
        <li class="buttons" data-filter="ice-cream">women</li>
        <li class="buttons" data-filter="chocolate">men</li>
        <li class="buttons" data-filter="juice">kids</li>
       
    </ul>

    <div class="image-container">

        <a href="images/ice-cream1.jpg" class="image ice-cream">
            <img src="images/blouse.jfif" alt="">
        </a>
        <a href="images/ice-cream2.jpg" class="image ice-cream">
            <img src="images/gharara.webp" alt="">
        </a>
        <a href="images/ice-cream3.jpg" class="image ice-cream">
            <img src="images/lehenga.jfif" alt="">
        </a>
        <a href="images/ice-cream3.jpg" class="image ice-cream">
            <img src="images/jumpsuites.jpg" alt="">
        </a>



        <a href="images/chocolate1.jpg" class="image chocolate">
            <img src="images/achkan.jpg" alt="">
        </a>
        <a href="images/chocolate2.jpg" class="image chocolate">
            <img src="images/bandhgala.jfif" alt="">
        </a>
        <a href="images/chocolate2.jpg" class="image chocolate">
            <img src="images/formal.jfif" alt="">
        </a>
        <a href="images/chocolate2.jpg" class="image chocolate">
            <img src="images/suits.jpg" alt="">
        </a>
        <a href="images/chocolate2.jpg" class="image chocolate">
            <img src="images/trousers.jfif" alt="">
        </a>
        
        <a href="images/juice1.jpg" class="image juice">
            <img src="images/boy1.jfif" alt="">
        </a>
        <a href="images/juice2.jpg" class="image juice">
            <img src="images/girl.jfif" alt="">
        </a>
        <a href="images/juice3.jpg" class="image juice">
            <img src="images/frok.jfif" alt="">
        </a>
        <a href="images/juice3.jpg" class="image juice">
            <img src="images/jump.jfif" alt="">
        </a>

        
    </div>

</div>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>

$(document).ready(function(){

    $('.buttons').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter')

        if(filter == 'all'){
            $('.image').show(400);
        }else{
            $('.image').not('.'+filter).hide(200);
            $('.image').filter('.'+filter).show(400);
        }

    });

    $('.gallery').magnificPopup({

        delegate:'a',
        type:'image',
        gallery:{
            enabled:true
        }

    });

});

</script>
    
</body>
</html>