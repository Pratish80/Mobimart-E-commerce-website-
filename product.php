<?php include_once('header.php');
include ('hms/include/config.php');
?>

<body><div class="tab" >
<a href="samsung.php"><h2>SmartPhones</h2></a>
  <a href=""><h2>Basic Mobiles</h2></a>
 <a href="redmi.php"><h2>Gadgets</h2></a> 
 <a href=""><h2>Accessories</h2></a> 
</div>
<div class="tab">
<a href="samsung.php"><h4>SAMSUNG</h4></a>
  <a href="redmi.php"><h4>REDMI</h4></a>
 <a href="oneplus.php"><h4>ONEPLUS</h4></a> 
 <a href="realme.php"><h4>REALME</h4></a> 
 <a href="nokia.php"><h4>NOKIA</h4></a>
  <a href="oppo.php"><h4>OPPO</h4></a>
 <a href="redmi.php"><h4>VIVO</h4></a> 
 <a href="moto"><h4>MOTORELA</h4></a> 
</div>
  
<div class="product" id="Product">
        <section id="pro1">
        <section id="pro2">
          
        <section id="pro3">
            <div class="container" style="max-width: 1200px;">
                <h1 class="title-shop"
                    style="color: rgba(236, 12, 12, 0.79);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    Products</h1>
                <main class="main bd-grid">
                <?php
                //  $maincat='smartphones';
                $sql = mysqli_query($con, "select * from product LIMIT 4");


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
                        </div>
                        <form class="form-submit">
                                <input type="hidden" class="pname" value="<?php echo $row['proname']; ?>">
                                <input type="hidden" class="pprice" value="<?php echo $row['proprice']; ?>">
                                <input type="hidden" class="pimage" value="<?php echo $row['proimg']; ?>">
                                <input type="hidden" class="pcode" value="<?php echo $row['id']; ?>">

                                <button id="addItem" class=" more_btn">Add To Cart</button>
                                <div class="alert-message"></div>

                            </form>
</article>
<?php } ?>
                </main>
            </div>
        </section>
        </section>
        </section>

        <script>
  $(document).ready(function(){
 $(document).on('click','#addItem',function(e){
e.preventDefault();
var form=$(this).closest(".form-submit");
var pcode=form.find('.pcode').val();
var pname=form.find('.pname').val();
var pimage=form.find('.pimage').val();

var pprice=form.find('.pprice').val();
//var $this = $(this);
var alertmsg=form.find('.alert-message');
$.ajax({
url:'action.php',
method:'post',
data:{pcode:pcode,pname:pname,pimage:pimage,pprice:pprice},
success:function(response){
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
function load_cart_item_number(){
  $.ajax({
url:'action.php',
method:'get',
data:{cartItem:"cart_item"},
success:function(response){

  $("#cart-item").html(response);
  
}
});
}

  });
 
</script>
    
       

    <?php include_once('footer.php');?>
</body>

</html>