<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/app.css">
<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Roboto", sans-serif
    }
</style>

<body class="w3-light-grey">

    <header class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
            <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="/">My Resume</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-2">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/portfolio">Portfolio</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="https://media-exp1.licdn.com/dms/image/C5603AQHd9EkvQ2OQjA/profile-displayphoto-shrink_800_800/0/1612915232585?e=1669852800&v=beta&t=QrLw-QXPMK9jYJ9eiMnz-ZDlKXZwmCS9mMLZgSoKJ04"
                            style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                            <h2 style="color:white;font-family:verdana;font-weight: bold;"">Tasya Wamantassa</h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Undergraduate
                            Student and Technical Support at Solar Analytics Pty Ltd</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Bandung, Indonesia</p>
                        <p><i
                                class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>tasya160699@gmail.com
                        </p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+6285703224029</p>
                        <hr>

                        <p class="w3-large"><b><i
                                    class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                        <p>Data Analysis</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                        </div>
                        <p>Web Scraping</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                                <div class="w3-center w3-text-white">75%</div>
                            </div>
                        </div>
                        <p>Python</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">85%</div>
                        </div>
                        <p>Scrapy Framework</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">80%</div>
                        </div>
                        <br>

                        <p class="w3-large w3-text-theme"><b><i
                                    class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                        <p>Indonesian</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                        </div>
                        <p>English</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:90%"></div>
                        </div>
                        <p>French</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:40%"></div>
                        </div>
                        <br>
                    </div>
                </div><br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience
                    </h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Senior Technical Support Officer - Solar Analytics Pty Ltd
                                Australia</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Feb 2021 - <span
                                class="w3-tag w3-teal w3-round">Current</span></h6>
                        <p>Supported customers with technical support for current and past software releases<br>
                        Assisted clients with general support for hardware and installation<br>
                        Assisted Junior/L1 and L2 support agents on miscellanous escalations and tasks
                        </p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Web Scraping - Upwork</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Oct 2020 - Jan 2022
                        </h6>
                        <p>Handled multiple clients from multiple countries such as Germany and USA<br>
                            Worked independently or in a multicultural team as a freelancer<br>
                            Responsible to design and implement a web scraping solution using Scray and MySQL<br>
                            Responsible for web scraper improvements, maintenance and updates.<br>
                            Technologies used included Scrapy, Scrapy Flash, Scrapy Middleware, JSON API, Python 2.x, Python 3.x
                        </p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Math and English Second Language Tutor - A+ Study Center</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2017 - Dec 2020
                        </h6>
                        <p>Gave in-person instructions to International Students to help them acquire greater knowledge for weekly exams.<br>
                            Teaching english grammar, algebra, calculus, statistics and basic computer programming.</p><br>
                    </div>
                </div>

                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>STMIK Likmi Bandung</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Aug 2018 - <span
                                class="w3-tag w3-teal w3-round">Current</span></h6>
                        <p>Bachelor of Technology - BTech, Computer Software Technology/Technician</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>SMAN 20 Bandung</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2014 - 2017</h6>
                        <p>High School</p>
                        <hr>
                    </div>





                    <!-- End Right Column -->
                </div>

                <br>

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-bullseye fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Achievements
                    </h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>
                                1st Winner Speech Contest ESC ESA 2019</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Nov 2019</h6>
                        
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>
                                Best Speaker Model UN Parliamentary Debate UNPAS</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Aug 2017
                        </h6>
                        
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>
                                2nd Winner National Speech Competition</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Oct 2016
                        </h6>
                        
                    </div>
                </div>



                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>

        <footer class="w3-container w3-teal w3-center w3-margin-top">
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </footer>

</body>

</html>
