<div class="contact-us section" id="contact-us">
    <div class="section-heading text-center">
        <h2>Contact Us</h2>
        <h6>We understand you, so we provide quickest service.</h6>
    </div>
    <div class="card custom-shadow p-4">
        <div class="row">
            <div class="col">
                <div id="map-container-google-1" class="z-depth-1-half map-container mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220016.02869949676!2d85.04629697078256!3d25.56666133676536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1627710548782!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col p-4">
                <h3>GET IN TOUCH</h3>
                <div class="row">
                    <div class="col">
                        <address>
                            <i class="fas fa-address-book"></i> 767 Fifth Avenue <br>Patna <br> PT 800001
                        </address>
                    </div>
                    <div class="col">
                        <i class="fas fa-mobile-alt"></i> &nbsp; +91 8002046457 <br>
                        <i class="fas fa-envelope"> &nbsp; </i><a href="mailto:admin@gmail.com?subject=Hello">admin@gmail.com</a>
                    </div>
                </div>
                <form action="../apis/account-daemon.php" method="post" class="pr-4">
                    <?php
                    if ($_SESSION['category'] == 'customer' || $_SESSION['category'] == 'seller') {
                        $uid = $_SESSION['uid'];
                        $read_user_details = "SELECT * FROM users WHERE uid ='$uid' ";
                        $response = mysqli_query($conn, $read_user_details) or die(mysqli_error($conn));
                        $user_details = mysqli_fetch_row($response);
                        $user_name = ucwords($user_details[1]);
                        echo "
                            <div class='form-group'>
                                <label for='name'>Name:</label>
                                <input type='text' class='form-control' readonly name='name' value='$user_name' required>
                            </div>
                            <div class='form-group'>
                                <label for='email'>Email:</label>
                                <input type='email' class='form-control' readonly name='email' value='$user_details[2]' required>
                            </div>
                        ";
                    } else {
                        echo "
                            <div class='form-group'>
                                <label for='name'>Name:</label>
                                <input type='text' class='form-control' name='name' placeholder='Enter your name here...' required>
                            </div>
                            <div class='form-group'>
                                <label for='email'>Email:</label>
                                <input type='email' class='form-control' name='email' placeholder='Enter email here...' required>
                            </div>
                        ";
                    }
                    ?>
                    <div class='form-group'>
                        <label for='message'>Message:</label>
                        <textarea type='text' class='form-control' name='message' cols='30' rows='8' max='250' placeholder='Please provide a detailed query' required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="contact" class="btn btn-outline-info w-50">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>