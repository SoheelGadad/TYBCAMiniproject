<footer class="footer">
    <div class="container_footer">
        <div class="row">
            <div class="footer_title">
                <ul></ul>
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
                </ul>

                <br><br>
                </i>
                <div class="footer-row">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Aboutus.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-col">
                <h4>Subscribe</h4>
                <div class="Subscribe_form">
                    <form action="#" method="POST">
                        <input type="text" name="fname" placeholder="Enter your Name">
                        <input type="email" name="email" placeholder="Enter your Email">
                        <input type="submit" value="Subscribes" class="Submit" name="subscribes">
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="tag">
        <center>Made with <i class="fa-solid fa-heart"></i> in india</center>
    </div>
</footer>
<?php
$conn = mysqli_connect("localhost", "root", "", "catringservices");
  
if(isset($_POST['subscribes']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    
    $query = "INSERT INTO subscribedata(`fname`, `email`) VALUES('$fname','$email')";
    $data = mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('Thank you')</script>";
    }
    else{
        echo "error";
    }
}


?>