<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn script imports-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

    <!-- cdn css import -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">

    <!-- custom script and css import -->
    <script type="text/javascript" src="js/main/script.js"></script>
    <link rel="stylesheet" href="css/main/ShoppingCart.css">
    <link rel="stylesheet" href="css/main/style.css">
    <title></title>

    <style>
        .img-thumbnail:hover {
            content: url("images/Linen/Women/5_1.jpg") ;
            height:250px;

        }
    </style>
</head>
<body>

<!-- header -->
<?php include 'includes/header.php' ?>

<main>
    <section>
        <div class="shopping_cart_header">
            <div class="col-2">
                <h4>Shopping Cart</h4>
            </div>

        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-4">
                <img  class="img-thumbnail" src="images/Linen/Men/1.jpg" class="SC_imgs">
                <label class="item_name">Mens Linen Shirt</label><br>
                <label class="item_price">2500.00</label><br>

                <button class="item_b">Remove</button>


            </div>
            <div class="col-4">
                <img class="img-thumbnail" src="images/Linen/Men/2.jpg" class="SC_imgs">
                <label class="item_name">Mens Black Shirt</label><br>
                <label class="item_price">3500.00</label><br>
                <button class="item_b">Remove</button>


            </div>
            <div class="col-4">
                <img class="img-thumbnail" src="images/Linen/Women/1.jpg" class="SC_imgs">
                <label class="item_name">Womens Tank top</label><br>
                <label class="item_price">2900.00</label><br>
                <button class="item_b">Remove</button>


            </div>
        </div>
    </section>


    <section>
        <div class="row">
            <div class="col-9">
                <div class="price_section">
                    <label class="price_name">Sub Total </label>
                    <label class="price_price">8900.00</label>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">

            <div class="col-9">
                <div class="code_input" >
                    <input class="input" type="text" placeholder="Coupon/Gift Voucher Code"><br>
                    <button class="item_b">Check Out</button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-12">
                <div class="ssyl_header">
                    <hr>
o                </div>

                <div class="ssyl_content">
                    <div class="col-4">
                        <img  class="img-thumbnail" src="images/Linen/Men/1.jpg" class="SC_imgs">
                        <label class="ssyl_name">Mens Linen Shirt</label><br>
                        <label class="item_price">2500.00</label><br>

                        <button class="item_b">Add</button>


                    </div>
                    <div class="col-4">
                        <img class="img-thumbnail" src="images/Linen/Men/2.jpg" class="SC_imgs">
                        <label class="ssyl_name">Mens Black Shirt</label><br>
                        <label class="item_price">3500.00</label><br>
                        <button class="item_b">Add</button>


                    </div>
                    <div class="col-4">
                        <img class="img-thumbnail" src="images/Linen/Women/1.jpg" class="SC_imgs">
                        <label class="ssyl_name">Womens Tank top</label><br>
                        <label class="item_price">2900.00</label><br>
                        <button class="item_b">Add</button>


                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<?php include 'includes/footer.php'; ?>
</body>
</html>
