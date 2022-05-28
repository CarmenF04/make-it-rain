<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Webshop</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ====navigation================================ -->
    <header>
        <nav class="navigation">

            <!-- logo -->
            <a href="#" class="logo">
                Carmen
            </a>

            <!-- menu -->
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Nieuw</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="/login.php">Login</a></li>
            </ul>

            <!-- shopping cart/like -->
            <section class="right-nav">

                <!-- like -->
                <a href="#" class="like">
                    <i class="fa-regular fa-heart"></i>
                    <span>0</span>
                </a>

                <!-- cart -->
                <a href="#" class="cart">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <span>0</span>
                </a>
            </section>
        </nav>
    </header>
    <!-- ====navigation end==== -->
    
    

    <!-- ====search-banner=============================== -->
    <section id="search-banner">

        <!-- images -->
        <img src="" class="ring-1" alt="">

        <!-- text -->
        <figure class="search-banner-text">
            <h1>Elegance with Perfection.</h1>
            <strong>#Tot wel 50% korting!
                <i class="fa-solid fa-bag-shopping"></i>
            </strong>

            <!-- search-box -->
            <form action="" class="search-box">
                <!-- icon -->
                <i class="fas fa-search"></i>

                <!-- input -->
                <input type="text" class="search-input" placeholder="Vind ringen, armbanden, kettingen..." name="search"
                    required>

                <!-- btn -->
                <input type="submit" class="search-btn" value="Zoek">
            </form>
        </figure>
    </section>
   <!-- ====search-banner end==== -->



    <!-- ====new products=============================== -->
    
    <section class="section section--first">

        <!-- text -->
        <figure class="new-products-box">

        <p class="new-products-text">Nieuwe Producten!</p>

        <strong>Gratis verzending bij bestellingen boven de €20!  
            <p>&#160</p>
            <i class="fa-solid fa-truck"></i>
        </strong>
    </figure>

        <ul class="new-products">
            <li class="new-product">
                <img src="/img/zilverenring-1.JPG" alt="#">
            </li>
            <li class="new-product">
                <img src="/img/zilverenoorbel-1.JPG" alt="">
            </li>
            <li class="new-product">
                <img src="/img/zilverenring-2.JPG" alt="">
            </li>
            <li class="new-product">
                <img src="/img/zilverenkettinghanger-1.JPG" alt="">
            </li>
        </ul>

    </section>

    <!-- ====new products end==== -->

    <section class="section section--second">

    </section>

</body>

</html>