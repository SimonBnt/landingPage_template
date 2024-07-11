<?php

require("assets/inc/form_process.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page 5</title>
    
    <!-- google font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni&family=Roboto+Flex&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link Leaflet -->

    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
      integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
      crossorigin=""
    />

    <!-- scipt Leaflet -->

    <script
      src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
      integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
      crossorigin=""
    ></script>

    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/formValidation.js" defer></script>
    <script src="assets/js/map.js" defer></script>
</head>
<body>
    <div id="darkFilter"></div>
    <header class="section">
        <img src="assets/img/logo.png" alt="logo" id="logo">
        <h2 id="brandName">brand name</h2>
        <div id="iconContainer">
            <a href="" class="icon hoverAnim" title="Click to access to my Facebook profile">
                <img src="https://cdn-icons-png.flaticon.com/128/3128/3128208.png" alt="Facebook icon">
            </a>
            <a href="" class="icon hoverAnim" title="Click to access to my Instagram profile">
                <img src="https://cdn-icons-png.flaticon.com/128/717/717392.png" alt="Instagram icon">
            </a>
            <a href="" class="icon hoverAnim" title="Click to access to my X profile">
                <img id="xIcon" src="https://cdn-icons-png.flaticon.com/128/5968/5968958.png" alt="X icon">
            </a>
            <a href="" class="icon hoverAnim" title="Click to access to my Linkedin profile">
                <img src="https://cdn-icons-png.flaticon.com/128/3128/3128219.png" alt="Linkedin icon">
            </a>
        </div>
        <!-- <a id="headerCta" href="" class="cta hoverAnim" title="Click to do something">Do something</a> -->
    </header>
    <main class="section">
        <div id="mainContentContainer">
            <div id="leftContent">
                <h1>Lorem, ipsum dolor <strong>sit amet consectetur</strong>  adipisicing elit.</h1>
                <div id="subHeadline" class="sub">Lorem ipsum, dolor <strong>sit amet consectetur</strong> adipisicing elit. Maxime, accusamus?</div>
                <a href="" id="mainCta" class="cta hoverAnim" title="Click to do something">Do something</a>
                <div id="subHeadline2" class="sub">Lorem ipsum, dolor sit amet consectetur <strong>adipisicing elit.</strong></div>
                <div id="reviewsContainer">
                    <img src="https://cdn-icons-png.flaticon.com/128/7269/7269753.png" alt="star">
                    <img src="https://cdn-icons-png.flaticon.com/128/7269/7269753.png" alt="star">
                    <img src="https://cdn-icons-png.flaticon.com/128/7269/7269753.png" alt="star">
                    <img src="https://cdn-icons-png.flaticon.com/128/7269/7269753.png" alt="star">
                    <img src="https://cdn-icons-png.flaticon.com/128/7269/7269753.png" alt="star">
                    <div>250+ reviews</div>
                </div>
                <img id="bcgImg1" src="assets/img/bcgImg1.png" alt="background image">
            </div>
            <div id="rightContent">
                <div class="formMainContainer" id="contactFormContainer">
                    <div class="card">
                        <div class="cardLogoContainer">
                            <img src="https://cdn-icons-png.flaticon.com/128/1182/1182791.png" alt="" class="formLogo">
                        </div>
                        <div class="cardHeader">
                            <h3 class="formTitle"></h3>
                            <p class="formTxt"></p>
                        </div>
                        <form action="" method="POST" class="forms" id="contactForm">
                            <div class="formItem">
                                <label for="nameInput"></label>
                                <div class="inputContainers">
                                    <span class="itemIcon material-symbols-outlined">person</span>
                                    <input type="text" name="name" id="nameInput" aria-describedby="nameError nameValidation" class="formInput" placeholder="Type your name here" onblur="validateName(this)" required>
                                    <div class="nameValidation" aria-live="polite"></div>
                                </div>
                                <div class="nameError" aria-live="polite"></div>
                            </div>
                            <div class="formItem">
                                <label for="emailInput"></label>
                                <div class="inputContainers">
                                    <span class="itemIcon material-symbols-outlined">mail</span>
                                    <input type="email" name="email" id="emailInput" class="formInput" aria-describedby="emailError emailValidation" placeholder="Enter your mail" onblur="validateEmail(this)" required>
                                    <div class="emailValidation" aria-live="polite"></div>
                                </div>
                                <div class="emailError" aria-live="polite"></div>
                            </div>
                            <div class="formItem">
                                <label for="messageInput"></label>
                                <div class="inputContainers">
                                    <span class="itemIcon material-symbols-outlined">comment</span>
                                    <textarea name="message" id="messageInput" aria-describedby="messageError messageValidation" class="formInput messageInput" placeholder="Type your message here" onblur="validateMessage(this)" required></textarea>
                                    <div class="messageValidation" aria-live="polite"></div>
                                </div>
                                <div class="messageError" aria-live="polite"></div>
                            </div>

                            <!-- reCAPTCHA -->

                            <div id="reCaptcha" class="g-recaptcha" data-sitekey="votre-site-key"></div>

                            <button class="formBtn" name="submit" type="submit" title="">submit</button>
                            <div class="errorMessagesContainers">
                                <div id="contactErrorMessage"></div>
                            </div>
                            <!-- <div id="formSubmitValidationMessage">
                                <?php
                                if (!empty($validationMessage)) {
                                    echo $validationMessage;
                                }
                                ?>
                            </div>
                            <div id="formSubmitErrorMessage">
                                <?php
                                if (!empty($errorMessage)) {
                                    echo $errorMessage;
                                }
                                ?>
                            </div> -->

                            <!-- CSRF_TOKEN -->

                            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- Map -->

        <div class="mapContainer">
            <div id="map"></div>
        </div>
    </footer>
</body>
</html>