<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="action_page.php">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Poppins", sans-serif;
        }

        body {
      font-size: 16px;
    }

    a {
        text-decoration: none;
    }
    </style>
</head>

<body bgcolor="lightgray">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
                title="close menu">
            </a>
            
            <img src="images/logo.png" style="width:45%;" class="w3-round">
            
            <br><br>
            <h4><b>YEO</b></h4>
            <p class="w3-text-grey">Let's start learning</p>
        </div>

        <div class="w3-bar-block w3-col-padding">
            <button onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-w3-theme-d5">
                <i class="fa fa-th-large fa-fw w3-margin-right"></i>HOMEPAGE</button>


            <div class="w3-dropdown-hover">
            <button onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-suitcase fa-fw w3-margin-right"></i>JOBS</button>
                    <div class="w3-dropdown-content w3-bar-block w3-border">
                        <a href="after10th_links.html" class="w3-bar-item w3-button">After 10th</a>
                        <a href="after12th_links.html" class="w3-bar-item w3-button">After 12th</a>
                    </div>
            </div>


            <a href="support.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-support fa-fw w3-margin-right"></i>SUPPORT</a>

            <a href="study.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-book fa-fw w3-margin-right"></i>LEARN</a>


            <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
            <br><br>

            <div id="translate_element" class="w3-padding"></div>

                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement(
                            { pageLanguage: 'en' },
                            'translate_element'
                        );
                    }
                </script>

                <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                class="fa fa-bars"></i></span>

        <br>
        <br>
        <div class="w3-container">
    <h1 class="w3-jumbo"><b>Youth Employment Opportunities</b></h1><br><br>
  </div>


        <!-- Photo grid -->
      <div class="w3-row-padding">
        <div class="w3-half">
          <img src="images/study.jpg" style="width:100%; height: 300px;" alt="career picture">
        </div>

        <div class="w3-half">
          <img src="images/jobs.jpg" style="width:100%; height: 300px;" alt="courses picture">
        </div>
      </div>

      <!-- Services -->
      <div class="w3-container" id="services" style="margin-top:75px; text-align: justify;">
        <h1 class="w3-xxxlarge w3-text-darkblue"><b>Services</b></h1>
        <hr style="width:250px; border:3px solid darkblue" class="w3-round">
        <p>
          We provide information about the employment schemes that the government has declared for rural and
          underprivileged people. We put different e-books and online links to youtube courses to meet the requirements of
          the jobs. If an individual wants to enhance their skills, we love to show the job vacancies related to the
          skills of the people.
        </p>
      </div>

      <!-- Purpose -->
      <div class="w3-container" id="purpose" style="margin-top:75px; text-align: justify;">
        <h1 class="w3-xxxlarge w3-text-darkblue"><b>Purpose</b></h1>
        <hr style="width:250px;border:3px solid darkblue;" class="w3-round">
        <p> We have seen that most people are unaware of the opportunities and benefits the government has in front of
          them. Thus, we define our goal to make all these opportunities readily accessible to them. We will endeavour to
          do this by making our content as accessible as possible.
        </p>
      </div>
                    <BR><BR>

        <!-- Contact Section -->
        <div class="w3-container w3-padding-large">
            <h2 id="contact"><b>Contact Us</b></h2>
            <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
                <div class="w3-half w3-dark-grey">
                    <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                    <p>yeoalways@gmail.com</p>
                </div>
                <div class="w3-half w3-dark-grey">
                    <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                    <p>Ahmedabad, Gujarat</p>
                </div>
            </div>
            <hr class="w3-opacity">
            <form action="action_page.php" method="post">
                <div class="w3-section">
                    <label>Name</label>
                    <input class="w3-input w3-border" type="text" name="name" required>
                </div>
                <div class="w3-section">
                    <label>Email</label>
                    <input class="w3-input w3-border" type="text" name="email" required>
                </div>
                <div class="w3-section">
                    <label>Message</label>
                    <input class="w3-input w3-border" type="text" name="message" required>
                </div>
                <button type="submit" class="w3-button w3-black w3-margin-bottom"><i
                        class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
            </form>
        </div>

        <div class="w3-black w3-center w3-padding-24">Made for growing India!</div>





        <!-- End page content -->
    </div>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>

</body>

</html>