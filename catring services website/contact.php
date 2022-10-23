<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal catring</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <header>
        <!--Nav bar-->
        <?php
    include('nav/nav.php')
  ?>
    </header>

    <br><br>
    <div class="containe">
        <?php
    if(isset($_SESSION['status']))
    {
        ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['status']; ?>
        </div>
        <?php
        unset ($_SESSION['status']);
    }
    ?>
        <?php
    if(isset($_SESSION['status_error']))
    {
        ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['status_error']; ?>
        </div>
        <?php
        unset ($_SESSION['status_error']);
    }
    ?>

        <center>
            <div class="topic-text">
                Get in Touch
        </center>
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Ponda, Ponda</div>
                    <div class="text-two">Goa</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one"><a href="tel:+12 3456 7898">+12 3456 7898</a></div>
                    <div class="text-two">+12 3456 7898</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one"><a href="mailto:soheelgadad@16@gmail.com">text@gmail.com</a></div>
                    <div class="text-two">text@gmail.com</div>
                </div>
            </div>
            <div class="right-side">

                <p>If you have any types of quries related to my Catring Services, you can send me message
                    from here.
                    It's my pleasure to help you.</p>


                <form action="db.php" method="post">
                    <?php
                    include('auth/auth.php')
                    ?>
                    <div class="input-box">
                        <input type="text" name="username" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                        <input type="text" name="email" placeholder="Enter your email">
                    </div><br>
                    <div class="input-box message-box">
                        <input type="textbox" name="message" placeholder="Enter your message">
                    </div>
                    <div class="button">
                        <input type="button" name="Back" onclick="parent.location='index.php'" value="Back..">
                    </div>
                    <div class="button_submit">
                        <input type="submit" name="save_data" value="Send Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- footer section-->
    <footer class="footer">
        <div class="container_footer">
            <div class="row">
                <div class="footer_title">
                    <center>
                        <ul>
                            <li><a href="index.php">
                                    <h1>Bon Appetit Caterers</h1>
                                </a></li> <br>
                            <li><label>Need Help?</label></li>
                            <li>
                                <p>Visit our Customer support</p>
                            </li>
                            <li><a>
                                    <p>info.Bonappetit.in</p>
                                </a></li>
                            <li><a>1234567890</a></li>
                            <br>
                            <div class="footer-row-2">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="Aboutus.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                        </ul>
                </div>
                </center>
            </div>
        </div>
        </div>
        <!-- Copyright section-->
        <div class="tag">
            <center>Made with <i class="fa-solid fa-heart"></i> in india</center>
        </div>
    </footer>
    <script src="index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>