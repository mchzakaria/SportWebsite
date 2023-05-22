<?php
    if(isset($_POST['submit'])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $subject= $_POST["message"];
        ini_set('SMTP', 'aymanegassi972003@gmail.com');
        ini_set('smtp_port', 587);
        $head = "From : ". $email;
        $main = $nom."\r\n".$phone."\r\n".$subject;
        $to="aymanegassi972003@gmail.com";
        if($nom=="" || $prenom=="" || $subject=="" || $phone==""|| $email==""){
            header('location:./index.php?missing');
        }
        else if(mail($to,$subject,$main,$head)){
            header('location:./index.php?Done');
        }
    }
?>
<footer>
    <div class="container11">
    <div class="mydiv">
    <div class="tex">
         <h1>Contact Us</h1> <br>
    </div>
    <?php
    if(isset($_GET['missing'])){
                    echo("<div>Fill All the Blanks</div>");
                }
    if(isset($_GET['Done'])){
                    echo("<div>Your Email Has Been Sent</div>");
                }
    ?>
      <div class="contact-box">
            
      <div class="contact-left">
                  <h3 class="sent">SENT YOUR REQUEST</h3>
                  <form method="POST" action="#">
                     <div class="input-row">
                        <div class="input-group">
                           <label >Nom</label>
                           <input name="nom" type="text" placeholder="ex:Lisa">
                        </div>

                        <div class="input-group">
                           <label >Prenom</label>
                           <input name="prenom" type="text" placeholder="ex:Paul">
                        </div>
                     </div>

                     <div class="input-row">

                        <div class="input-group">
                           <label >Email</label>
                           <input name="email" type="email" placeholder="ex:youremail@gmail.com">
                        </div>

                        <div class="input-group">
                           <label >Phone</label>
                           <input name="phone"  type="text" placeholder="ex:+212 5222-56831">
                        </div>
                     </div>
                     <label>Message</label>
                     <textarea name="message" type="text" rows="5"placeholder="Write your message"></textarea>
                     <button name="submit"  type="submit">Send</button>
                  </form>
            </div>
      </div>
    </div>
    </div>
</html>
</footer>

<!-- <script src="<?= $home; ?>js/bootstrap.bundle.min.js"></script> -->
</body>
</html>



