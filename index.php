<?php 
    if(isset($_POST['submit'])){
        $to = "michaelbrady712@gmail.com"; 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = "Form Submission";
        $top = "Portfolio Site";
        $text = "Contact name: " . $name .
            "\nEmail: " . $email .
            "\nMessage: " . $message;
        $header = "From: " . $top;
        mail($to,$subject,$text,$header);
        header("Location: confirmation.html");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Michael Brady
        </title>
        <link href="styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body onload="particle()" id="body">
        <a id="top"></a>
        <nav id="myNav">
            <ul class="header">
                <li class="menu" id="menu"><a href="#top">Home</a></li>
                <li class="menu" id="menu"><a href="#projects">Projects</a></li>
                <li class="menu" id="menu"><a href="#about">About</a></li>
                <li class="menu" id="menu"><a href="images/Michael_Brady_Resume.pdf">Resume</a></li>
                <li class="menu" id="menu"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
                <img src="images/portrait.jpg" class="portrait">
                <h1>
                    Michael Brady
                </h1>
                <p class="mid">Hello! I'm an experienced Front-End Developer based in Austin, TX</p>
            <div class="projects" id="projects">
                <h1>
                    Projects
                </h1>
                <section class="georgia">
                   <h2>
                       Capstone Project: Site for Piano Teacher Georgia Sears
                   </h2>
                   <a  href="http://webtrain.austincc.edu/~mbrady/portfolio/pianowithgeorgia/seconddraft/index.php">
                    <img src="images/pianowithgeorgia.png" class="project">
                </a>
                </section>
                <section class="beach">
                    <h2>
                        Class Project: The Amy Beach Foundation
                    </h2>
                    <a href="http://webtrain.austincc.edu/~mbrady/portfolio/beach/interhtmlfinal.html">
                        <img src="images/beach.png" class="project">
                    </a>
                </section>
                <section class="schubert">
                    <h2>
                        Class Project: Schubert's Last Six Piano Sonatas
                    </h2>
                    <a href="http://webtrain.austincc.edu/~mbrady/portfolio/schubert/gradedassignment1.html">
                        <img src="images/schubert.png" class="project">
                    </a>
                </section>
            </div>
            <div class="about" id="about">
                <h1>
                    About
                </h1>
                <img src="images/headshot.jpg" class="headshot">
                <div class="about2">
                    <p>Originally from Baltimore, MD, I came to Austin to study piano at UT. I graduated with my Bachelor's in 
                        Music Performance in Piano in 2019 and went on to obtain my Master's in 
                        Piano Performance from Texas State in 2021. I currently teach piano at the Orpheus Academy
                        of Music in Austin, TX.
                    </p>
                    <br>
                    <p>Although I received my degrees in music, I've always been interested in technology. 
                        I took several coding courses in high school, worked as an audio/visual technician 
                        while at UT, and have edited music videos for student projects at Orpheus. My interest in tech
                        led me to the Web Certification program at ACC, where I hope to gain the skills necessary 
                        to pursue front end development as a career.
                    </p>
                </div>
            </div>
            <div class="contact" id="contact">
                <h1>
                    Contact
                </h1>
                <div class="form" id="form">
                    <form action="" method="post" onsubmit="return validate()">
			            <br><input type="text" name="name" placeholder="Name" size="25" id="name"><div class="error" id="nameerror">*Field is required</div> 
				        <br><input type="text" name="email" placeholder="Email" size="25" id="email"><div class="error" id="emailerror">*Field is required</div>
				        <br><textarea rows="5" name="message" cols="30" placeholder="Message" id="message"></textarea><div class="error" id="messageerror">*Field is required</div>
                        <input type="submit" name="submit" value="Send">
				    </form>
                </div>
            </div>
            <footer>
                <ul class="social">
                    <li class="icon"><a href="https://github.com/mbrady712" class="fa fa-linkedin fa-2x" id="icon"></a></li>
                    <li class="icon"><a href="https://www.linkedin.com/in/michael-brady-91777a21a/" class="fa fa-github fa-2x" id="icon"></a></li>
                    <li class="icon"><a href="mailto:michaelbrady712@gmail.com" class="fas fa-envelope" id="icon"></a></li>
                </ul>
                <p class="phone"><i class='fas fa-phone-alt'></i>410-608-8071</p>
                <p class="copyright">&copy Michael Brady 2021</p>
            </footer>
            <script src="https://unpkg.com/feather-icons"></script>
            <script src="script.js"></script>
    </body>
</html>

