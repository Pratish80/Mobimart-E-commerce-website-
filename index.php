<?php include_once('header1.php');
include ('hms/include/config.php');
?>

<body>
    <div class="main-slider">
        <div class="slider">
            <div>
                <div class="slider-img">
                    <img src="img/backgroundimg.jpg">
                    <div class="slider-text">
                        <div class="container" id="slide">
                            <div class="col-md-8 textside position-relative">
                                <div class="content text-center">
                                    <h6 class="mb-0 ">Welcome to MOBI MART </h6>
                                    <h4 class="mb-0 ">Start where you are. Use what you have. Do what you can.</h4>

                                </div>

                            </div> <a class="more_btn " href="#contact-form">Join Us </a>
                        </div>

                    </div>
                </div> <!-- img -->
            </div><!-- slider -->
            <div>
                <div class="slider-img ">
                    <img src="img/back6.jpg">
                    <div class="slider-text">
                        <div class="container" id="slide">
                            <div class="col-md-8 textside position-relative">
                                <div class="content text-center">
                                    <h6 class="mb-0 ">Welcome to MOBI MART </h6>
                                    <h4 class="mb-0 ">Start where you are. Use what you have. Do what you can.</h4>

                                </div>

                            </div> <a class="more_btn" href="#contact-form">Join Us </a>
                        </div>

                    </div>
                </div> <!-- img -->
            </div><!-- slider -->
            <div>
                <div class="slider-img ">
                    <img src="img/back5.jpg">
                    <div class="slider-text">
                        <div class="container" id="slide">
                            <div class="col-md-8 textside position-relative">
                                <div class="content text-center">
                                    <h6 class="mb-0">Welcome to MOBI MART </h6>
                                    <h4 class="mb-0">Start where you are. Use what you have. Do what you can.</h4>

                                </div>

                            </div>
                            <a class="more_btn" href="#">Join Us</a>
                        </div>

                    </div>

                </div> <!-- img -->
            </div><!-- slider -->

        </div>
    </div><!-- main-slider -->




    <!-- about us         -->

    <div class="section1" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="display: flex;">
                    <img src="img/aboutimg-removebg-preview.png" alt="avatar" style="margin-left: 180px;">

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="mybox" id="mybox1">
                        <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">About
                            us</h1>
                        <p>
                            MOBIMART is a leading platform
                            that provides resources
                            and coding challenges for programmers and
                            technology enthusiasts,along with interview
                            There are different basic and advanced
                            types of data structures that are used
                            in almost every program or software
                            system that has been developed.
                        </p>

                    </div>
                    <a href="aboutus.php"><button>
                            Read More
                        </button></a>

                </div>
                <script src="script.js"></script>
            </div>
        </div>

    </div>
    </div>



    <div class="product" id="Product">
        <section id="pro1">
            <div class="container" style="max-width: 1200px;">
                <h1 class="title-shop"
                    style="color: rgba(236, 12, 12, 0.79);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    Products</h1>
                <main class="main bd-grid">
                    <?php
                // $procat='breakfast';
                $sql = mysqli_query($con, "select * from product LIMIT 3 ");


                while ($row = mysqli_fetch_array($sql)) {
                    ?>
                    <article class="card">
                        <div class="card__img">
                            <!-- imagen -->
                            <img src="hms/images/<?php echo $row['proimg']; ?>" height="150px" alt="Product 2">
                        </div>
                        <div class="card__name">
                            <p> <?php echo $row['proname']; ?></p>
                        </div>

                        <div class="card1">
                            <a href=""> <i class="fa fa-heart-o" aria-hidden="true" style="font-size: 27px;"></i></a>
                            <div>
                                <p class="par">
                                    <?php echo $row['prodesc']; ?>
                                </p>

                                <span class="card_price_new">$ <?php echo $row['proprice']; ?></span>
                            </div>
                            <a href="" class="cardicon"><i class="fa fa-cart-plus" aria-hidden="true"
                                    style="margin-top: 50px;  font-size: 35px;"></i></a>
                            <form class="form-submit">
                                <input type="hidden" class="pname" value="<?php echo $row['proname']; ?>">
                                <input type="hidden" class="pprice" value="<?php echo $row['proprice']; ?>">
                                <input type="hidden" class="pimage" value="<?php echo $row['proimg']; ?>">
                                <input type="hidden" class="pcode" value="<?php echo $row['id']; ?>">


                            </form>
                        </div>
                        <button id="addItem" class=" more_btn">Add To Cart</button>
                        <div class="alert-message"></div>

                    </article>
                    <?php } ?>
                </main>
            </div>
        </section>

        <div class="ex">
            <a href="product.php"> <button type="submit" class="Explore">Explore Products</button></a>
        </div>
    </div>
    <div class="logo">
        <div class="container">
            <div class="row">
                <div class="imgg">
                    <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                        <div class="avatar1">
                            <h3
                                style="color: rgba(217, 24, 24, 0.858); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-bottom: 10px;margin-left: 480px;">
                                Search By Brands</h3>
                            <a href="product.php"><img src="img/productlogo/1665485917.png" alt="Avatar"
                                    style="margin-left: 120px;"></a>
                            <a href="product.php"> <img src="img/productlogo/1665494539.png" alt="Avatar"></a>
                            <a href="product.php"> <img src="img/productlogo/1665495185.png" alt="Avatar"></a>
                            <a href="product.php"> <img src="img/productlogo/1665495315.png" alt="Avatar"> </a><br><br>
                            <a href="oppo.php"> <img src="img/productlogo/1665495332.png" alt="Avatar"
                                    style="margin-left: 120px;"></a>
                            <a href="product.php"> <img src="img/productlogo/1665495408.png" alt="Avatar"></a>
                            <a href="samsung.php"><img src="img/productlogo/1665495463.png" alt="Avatar"></a>
                            <a href="product.php"> <img src="img/productlogo/1665495586.png" alt="Avatar"></a>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="payment">
            <div class="container">
                <div class="row">

                    <i class="fa fa-rocket" aria-hidden="true" style="margin-top: 30px;"></i>

                    <div class="col-sm-4 col-xs-12 col-md-2 col-lg-2">
                        <p>
                        <h5>Fast Payment</h5>
                        </p>
                        <p>Secure payment</p>

                    </div>
                    <i class="fa fa-credit-card" aria-hidden="true" style="margin-top: 30px;"></i>
                    <div class="col-sm-12 col-xs-12 col-md-2 col-lg-2">
                        <p>
                        <h5>Secure Payment</h5>
                        </p>
                        <p> 100% secure payment</p>
                    </div>
                    <i class="fa fa-comments-o" aria-hidden="true" style="margin-top: 30px;"></i>
                    <div class="col-sm-12 col-xs-12 col-md-2 col-lg-2">
                        <p>
                        <h5>24/7 Support</h5>
                        </p>

                        <p>Dedicated support</p>
                    </div>
                    <i class="fa fa-gift" aria-hidden="true" style="margin-top: 30px;"></i>
                    <div class="col-sm-12 col-xs-12 col-md-2 col-lg-2">
                        <p>
                        <h5> Exclusive offers</h5>
                        </p>

                        <p>On Top Brands</p>
                    </div>


                </div>
            </div>
        </div>


        <div class="sec4">
            <section class="contact-form" id="contact-form">
                <div class="banner">
                    <img src="img/contactbg2.png" alt="Welcome to our Contact Us page" width="200px">
                    <h2>Get in Touch With Us</h2>
                    <p>
                        We're here to answer any questions you may have.
                    </p>
                    <a href="contact.php"> <button type="submit" class="submit-button" id="contact">Contact
                            Us</button></a>
                </div>


        </div>
        </section>
    </div>
    <script>
    $(document).ready(function() {
        $(document).on('click', '#addItem', function(e) {
            e.preventDefault();
            var form = $(this).closest(".form-submit");
            var pcode = form.find('.pcode').val();
            var pname = form.find('.pname').val();
            var pimage = form.find('.pimage').val();

            var pprice = form.find('.pprice').val();
            //var $this = $(this);
            var alertmsg = form.find('.alert-message');
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: {
                    pcode: pcode,
                    pname: pname,
                    pimage: pimage,
                    pprice: pprice
                },
                success: function(response) {
                    console.log(response);
                    alertmsg.html(response);

                    // $this.closest('.alert-message').html(response)
                    //$(this).closest('.alert-message').html(response);
                    //alertmsg.html(response);
                    //window.scrollto(0,0);
                    load_cart_item_number();
                }
            });

        });

        load_cart_item_number();

        function load_cart_item_number() {
            $.ajax({
                url: 'action.php',
                method: 'get',
                data: {
                    cartItem: "cart_item"
                },
                success: function(response) {

                    $("#cart-item").html(response);

                }
            });
        }

    });
    </script>



    <?php include_once('footer.php');?>
</body>