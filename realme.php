<?php include_once ('header.php');
include ('hms/include/config.php');
?>

<body>
  <div class="bg">
    <div class="bg-image">
      <img src="img/back6.jpg" alt="img" height="200px" width="100%">
      <div class="bg-text">
        <h1>Products</h1>

      </div>
    </div>
  </div>
  <section id="pro1">
    
    <div class="container" style="max-width: 1200px;">
      <h1 class="title-shop">SAMSUNG</h1>
      <main class="main bd-grid">

        <?php
        $maincat = 'samsung';
        $sql = mysqli_query($con, "select * from product where maincat='$maincat'");


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
              <!-- <a href="" class="cardicon"><i class="fa fa-cart-plus" aria-hidden="true"
                                    style="margin-top: 50px;  font-size: 35px;"></i></a> -->
            </div>
            <form class="form-submit">
              <input type="hidden" class="pname" value="<?php echo $row['proname']; ?>">
              <input type="hidden" class="pprice" value="<?php echo $row['proprice']; ?>">
              <input type="hidden" class="pimage" value="<?php echo $row['proimg']; ?>">
              <input type="hidden" class="pcode" value="<?php echo $row['id']; ?>">
              <br><div class="star" >
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              </div>
              <button id="addItem" class=" more_btn">Add To Cart</button>
              <div class="alert-message"></div>

            </form>
          </article>
        <?php } ?>
      </main>
    </div>
  </section>
1
  <script>
    $(document).ready(function () {
      $(document).on('click', '#addItem', function (e) {
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
          data: { pcode: pcode, pname: pname, pimage: pimage, pprice: pprice },
          success: function (response) {
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
          data: { cartItem: "cart_item" },
          success: function (response) {

            $("#cart-item").html(response);

          }
        });
      }

    });

  </script>

  <?php include_once ('footer.php'); ?>
</body>