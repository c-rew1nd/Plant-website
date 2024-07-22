<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>From every day to the extraordinary,Plants helps you buy without any troubles from the comfert of your home. Plants's Same Day plants Delivery in India is all you need. Every time you buy plants online, you get a chance to buy another at a discounted price.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Doorstep delivery so that the customer can avoid the humdrum of taking the plant home with care and endless vrities to chose from.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We believe that Green is Good and are here to enable Indians to access plants in the easiest way possible – online! We are here to shape the future of gardening!</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>>My experience with Plants.com was disappointing at first. I ordered a Money Tree for my daughters birthday. It arrived late, and also when she received it, all the leaves fell off but 2. I contacted them and they went out of their way to apologize for it being late, and also sent another Money Tree at a later date which my daughter as so thrilled. To me that is the best customer service you could ask for. Thank you very much for making me a happy customer.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jack snider</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>My sister sent me one . I loved it. I sent my friend one . He loved it. His sister saw it and she loved it . I said next time you send her a gift, because he never knows what to
            get her this is it. They were all different. I think this is the perfect gift to buy when you don’t know what to buy or for the person who has everything. Love the name and all the products. I don’t buy many gifts but now I’m a new customer.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sofia de william</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>My plant was a gift and was delivered to the wrong address— Fed Ex delivery failure. It was missing for about a day until someone spotted the package at an occupied house. In that time, I asked Plants.com know the situation and they issued a replacement delivery free of charge.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mark stef</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Ordered two willow trees. The box looked a little rough when it arrived, but the trees were in good shape, still potted and no damage. I planted them as directed, including the root powder, and so far so good for fall planting. The real test will come this Spring.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nicki S</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Olive trees
I bought two Manzinillo olive trees from Nature Hill Nursery I received them potted and wrapped carefully. I was amazed at the care in shipping. They were hardy and a really good size too. I will definitely buy more from this nursery!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John stefan</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>LMiniature Gildenrod
Easy order, reasonable price and very healthy specimens! Well packaged and ready to plant in late summer. I'll be anxious to see how these goldenrods come out of the winter season.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Duane Johnson</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>