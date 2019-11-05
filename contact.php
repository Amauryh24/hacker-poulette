<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="images/icons.png">
    <title>Contact</title>
</head>


<body id="contact">
   
    <div class="main-container">
        <div class="content">
            <h1>Raspberry Pi 4 </h1>
            <div class="about">
                <h3>Accessory kits to build yourself</h3>
                <ul>
                    <li>Faster</li>
                    <li>better connectivity</li>
                    <li>More memory</li>

                </ul>
            </div>
        </div>







        <div class="content-form">
            <p class="titleform">Contact us</p>
            <form action="post_contact.php" method="post">
                <div id="divfirstname">
                    <label class="none" for="inputfirstname">Firstname :</label>
                    <input type="text" name="name" placeholder="  Firstname" id="inputfirstname"
                        title="Enter Your Firstname">
                    <img src="./images/004-assistance.png" alt="image for the firsname" title="image for the firsname ">
                </div>
                <div>
                    <label class="none" for="inputlastname"> Lastname : </label>
                    <input type="text" name="lastname" value="Doe" placeholder="  Lastname" id="inputlastname"
                        title="Enter your Lastname">
                </div>
                <div id="gender">

                    <label class="choicegender" for="radiofemale">Female</label>
                    <input type="radio" name="gender" value="female" checked="checked" id="radiofemale"
                        title="Chose female" />

                    <label class="choicegender" for="radiomale">Male</label>
                    <input type="radio" name="gender" value="male" id="radiomale" title="Chose male" />

                </div>
                <div>
                    <select name="country" id="country" title="Chose your Country">
                        <option value="Malta" title="Malta">Malta</option>
                        <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                        <option value="Cyprus" title="Cyprus">Cyprus</option>
                        <option value="Estonia" title="Estonia">Estonia</option>
                        <option value="Latvia" title="Latvia">Latvia</option>
                        <option value="Slovenia" title="Slovenia">Slovenia</option>
                        <option value="Lithuania" title="Lithuania">Lithuania</option>
                        <option value="Croatia" title="Croatia">Croatia</option>
                        <option value="Ireland" title="Ireland">Ireland</option>
                        <option value="Slovakia" title="Slovania">Slovakia</option>
                        <option value="Finland" title="Finland">Finland</option>
                        <option value="Denmark" title="Denmark">Denmark</option>
                        <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                        <option value="Austria" title="Autria">Austria</option>
                        <option value="Hungary" title="Hungary">Hungary</option>
                        <option value="Sweden" title="sweden">Sweden</option>
                        <option value="Portugal" title="Portugal">Portugal</option>
                        <option value="Greece" title="Greece">Greece</option>
                        <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
                        <option value="Belgium" title="Belgium" selected>Belgium</option>
                        <option value="Netherlands" title="Netherlands">Netherlands</option>
                        <option value="Romania" title="Romania">Romania</option>
                        <option value="Poland" title="Poland">Poland</option>
                        <option value="Spain" title="Spain">Spain</option>
                        <option value="Italy" title="Itali">Italy</option>
                        <option value="France" title="France">France</option>
                        <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                        <option value="Germany" title="Germany">Germany</option>
                    </select>


                </div>
                <div>

                    <select name="subject" id="subject" title="Chose your subject subject">
                        <option value="technical" title="Technical">Technical</option>
                        <option value="repair" title="Repair">Repair</option>
                        <option value="Others" title="Others" selected>Others</option>
                    </select>
                </div>

                <div id="divemail">
                    <label class="none" for="inputmail"> Email</label>
                    <input type="text" name="email" placeholder="  Email" value=" johnDoe@Becode.org" id="inputmail"
                        title="Enter your email">

                </div>

                <div>
                    <label class="none" for="message">message :</label>
                    <textarea name="message" placeholder=" Message" id="message"
                        title="Enter your message"> Put your message here !</textarea>



                </div>
                <div id="divsubmit">
                    <button id="submit" type="submit" name="submit" value="validation"
                        title="form submissions">validation</button>
                </div>
                <div class="error">
                    <?php if (array_key_exists('errors', $_SESSION)):?>
                    
                    <p>
                        <?= implode('<br>', $_SESSION['errors']); ?>
                    </p>
                </div>

        <?php unset($_SESSION['errors']); endif; ?>


            </form>
        </div>

    </div>

    <script src="js/script.js"></script>
</body>

</html>