<?php include_once ('header.php'); ?>

<body>
    <div class="bg">
        <div class="bg-image">
            <img src="img/back6.jpg" alt="img" height="200px" width="100%">
            <div class="bg-text">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    </div>

    <div class="section4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-lg-3 col-md-3">
                    <section class="contact-form1" id="contact-form">
                        <div class="banner">
                        <div class="img1">
                        <img src="img/contactbg2.png" alt="Welcome to our Contact Us page" width="200px" style="margin: left 200px;">
                    </div>

                            <h2>Get in Touch With Us</h2>
                            <p>
                                We're here to answer any questions you may have.
                            </p>
                        </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-lg-9 col-md-9">
                 
                    <div class="form-container">

                        <h2>Your Details</h2>
                        <form action="#" method="POST">

                            <label class="text-danger" id="nameErr">Name: </label>
                            <input type="text" id="name" name="name" placeholder="Name *"
                                onkeyup="document.getElementById('nameErr').innerHTML=''" required>

                            <label class="text-danger" id="emailErr">Email: </label>
                            <input type="email" id="email" name="email" placeholder="EmailID*"
                                onkeyup="document.getElementById('emailErr').innerHTML=''" required>

                            <label class="text-danger" id="phoneErr">Phone: </label>
                            <input type="tel" id="phone" name="phone" placeholder="PhoneNO*"
                                onkeyup="document.getElementById('phoneErr').innerHTML=''" required>

                            <label class="text-danger" id="subjectErr">Subject: </label>
                            <input type="text" id="subject" name="subject" placeholder="Your subject *"
                                onkeyup="document.getElementById('subjectErr').innerHTML=''" required>

                            <label class="text-danger" id="messageErr">Message: </label>
                            <textarea id="message" name="message" rows="4" placeholder="Address*"
                                onkeyup="document.getElementById('messageErr').innerHTML=''" required></textarea>

                            <button type="submit" class="submit-button" id="btnSubmit">Submit</button>

                            <div id="mail-status"></div>
                        </form>
                        <script>

                            $(document).ready(function () {

                                $("#btnSubmit").click(function (event) {

                                    event.preventDefault();

                                    var data = new FormData($('#contactform')[0]);

                                    if ($('#name').val().trim() == '') {

                                        document.getElementById("nameErr").innerHTML = "Please provide Name";

                                        document.getElementById("name").focus();

                                        return;

                                    }

                                    if ($('#email').val().trim() == '') {

                                        document.getElementById("emailErr").innerHTML = "Please provide Email";

                                        document.getElementById("email").focus();

                                        return;

                                    }

                                    if ($('#phone').val().trim() == '') {

                                        document.getElementById("phoneErr").innerHTML = "Please provide Mobile Number";

                                        document.getElementById("phone").focus();

                                        return;

                                    }
                                    if ($('#subject').val().trim() == '') {

                                        document.getElementById("subjectErr").innerHTML = "Please provide subject";

                                        document.getElementById("subject").focus();

                                        return;

                                    }

                                    if ($('#message').val().trim() == '') {

                                        document.getElementById("messageErr").innerHTML = "Please provide Message";

                                        document.getElementById("message").focus();

                                        return;

                                    }

                                    $("#btnSubmit").prop("disabled", true);

                                    $.ajax({

                                        type: "POST",

                                        url: "sendmail.php",

                                        data: data,

                                        processData: false,

                                        contentType: false,

                                        cache: false,

                                        success: function (data) {
                                            console.log(data);
                                            $("#mail-status").removeClass('text-danger');

                                            $("#mail-status").addClass('text-success');

                                            $("#mail-status").html("We have received your enquiry successfully!");

                                            $("#btnSubmit").prop("disabled", false);

                                            $('#name').val('');

                                            $('#email').val('');

                                            $('#phone').val('');
                                            $('#subject').val('');

                                            $('#message').val('');

                                        },

                                        error: function (error) {

                                            $("#mail-status").removeClass('text-success');

                                            $("#mail-status").addClass('text-danger');

                                            $("#mail-status").html("Something went wrong..Please try again!");

                                        }







                                    });

                                });

                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
  <div class="row">

        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="c_details_item" style="height: 147.6px; border:28px solid black; background-color:red; padding:20px; width:80%;">
                <div class="media">
                    <div class="media-left"><i class="fa fa-map-marker"><span class="hide-mobile">&nbsp;</span></i>
                    </div>
                    <div class="media-body">
                        <p>Shop No. 1 of H.NO.2122, Brahma Nagar, Majagaon,Belgavi-590008
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="c_details_item" style="height: 147.6px; border:28px solid black; background-color:red; padding:20px; width:80%;">
                <div class="media">
                    <div class="media-left"><i class="fa fa-phone"><span class="hide-mobile">&nbsp;</span></i></div>
                    <div class="media-body">
                        <p>+91 9538454318</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="c_details_item"style="height: 147.6px; border:28px solid black; background-color:red; padding:20px; width:80%;">
                <div class="media">
                    <div class="media-left"><i class="fa fa-clock-o"><span class="hide-mobile">&nbsp;</span></i></div>
                    <div class="media-body">
                        <p>Monday - Saturday: 8:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>

        </div>

    </div> 
    <div class="container2">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122283.79400675438!2d74.15646573526752!3d16.708452233336907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1000cdec07a29%3A0xece8ea642952e42f!2sKolhapur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1709567584466!5m2!1sen!2sin"
            width="100%" height="50%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php include_once ('footer.php'); ?>
</body>