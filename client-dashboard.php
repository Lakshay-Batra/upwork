<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Jobs</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light text-left">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #292b2c;">
        <a class="navbar-brand" style="color: teal; font-weight: bold;" href="#"><img src="images/iniesta-logo.jpg"
                alt="iniesta-logo" style="border-radius: 5px;"> INIESTA Freelancing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="" class="nav-link">Find Work</a>
                </li>
                <li class="nav-item dropdown trainings">
                    <a href="" class="nav-link">Report</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="">Messages</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link">My Profile &nbsp; <img class="feed-profile-logo"
                            src="images/feed-profile-logo.jpg" alt=""></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container top-container-client-dashboard">
        <div class="text-right mb-5 mt-3">
            <a href="client-dashboard.html" class="btn btn-info">Post a Job</a>
            &nbsp;&nbsp;
            <a href="" class="btn btn-secondary text-light">Rehire a freelancer</a>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card text-center card-client-dashboard">
                    <div class="card-header bg-dark text-light card-header-client-dashboard" style="border-radius: 10px 10px 0 0;">
                        My Job Postings
                    </div>
                    <div class="card-body" style="padding: 10% 5%;">
                        <a class="btn btn-secondary btn-lg btn-block" href="">Post a Job</a>
                        <br>
                        <p class="card-text">
                            <h5 class="teal"><b>Or use a job template to get started!</b></h5>
                        </p>
                        <br>
                        <i class="fas fa-sign-in-alt fa-5x text-secondary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="footer-top row">
            <div class="col-lg-4">
                <h5><u><b>Help for you</b></u></h5>
                <h6><a type="button" data-toggle="modal" data-target="#contactModal">Contact Support</a></h6>
                <h6>FAQs</h6>
            </div>
            <div class="col-lg-4">
                <h5><u><b>Safety and Privacy</b></u></h5>
                <h6><a href="TERMS OF SERVICES.pdf">Terms of services</a></h6>
                <h6><a href="">Privacy Policy</a></h6>
                <h6>Safety Tips</h6>
            </div>
            <div class="col-lg-4">
                <h5><u><b>About</b></u></h5>
                <h6><a type="button" data-toggle="modal" data-target="#aboutModalScrollable">About us</a></h6>
                <h6><a type="button" data-toggle="modal" data-target="#careerModalLong">Careers</a></h6>
                <h6>Media</h6>
            </div>
        </div>
        <div class="footer-icons">
            <a href="https://www.facebook.com/iniestawebtech/"><i class="fab fa-facebook-f fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/iniesta-webtech-solution-private-limited-111b82184/"><i
                    class="fab fa-linkedin fa-2x"></i></a>
            <a href="https://www.instagram.com/iniestawebtech/"><i class="fab fa-instagram fa-2x"></i></a>
        </div>
        <div class="text-center">
            <a href="">
                <h6>&copy; INIESTA 2020</h6>
            </a>
        </div>
        
    </div>
    <!-- footer end -->

    <!-- contact-modal -->
    <div style="text-align: left;" class="modal fade" id="contactModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact Support</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Iniesta webtech solution pvt ltd <br>
                        Ring us at: <br>
                        9871428181 <br>
                        8182818101 <br>
                        Ping us at: <br>
                        email- Iniestawebtech@gmail.com <br>
                        Office Address <br>
                        Office number 3 third floor H-61 sector 63 Noida <br>
                        Uttar pradesh <br>
                        201306 <br></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- terms of services model -->
    <div style="text-align: left;" class="modal fade" id="careerModalLong" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Careers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <b>Service. Community. Quality.</b><br>
                        Our goal is to develop and nurture the world's largest digital marketplace, a place where people
                        can find and purchase all the services they need and create any company they dream of. As an
                        employee, the progress of our users and the celebration of your own personal development
                        inspires your work. Join in with us. <br>
                        <b>Our purpose comes first.</b><br>
                        It still feels like day one We believe the freelance economy is still at its earliest stages. We
                        take
                        the view that — as early advocates of it — our task is to do it as holistically as we can, to
                        introduce to all our goal of encouraging people to dream of living their work. <br>
                        We are an organisation powered by intent. Everything we do stems from our desire to inspire
                        people around the world to live their dream of working, develop their company from the ground
                        up and become financially and professionally independent.
                        <b>Locations</b><br>

                        ---------- ------------ --------------- <br>
                        Teams (Our Iniesta Employees) <br>
                        XXXXX <br>
                        YYYYY <br>
                        ZZZZZ <br>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- About us modal -->
    <div style="text-align: left;" class="modal fade" id="aboutModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">About us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <b>Our Story</b><br>
                        The Iniesta story begins over a decade ago, when the tech lead of a Silicon Valley startup
                        realized his close friend in Athens would be perfect for an internet project. The team agreed he
                        was the most effective choice, but were concerned about working with someone halfway round the
                        globe. <br>

                        <b>A new way of working is born</b><br>
                        In response, the 2 friends created a brand new web-based platform that brought visibility and
                        trust to remote work. it had been so successful the 2 realized other businesses would also take
                        pleasure in reliable access to a bigger pool of quality talent, while workers would enjoy
                        freedom and adaptability to seek out jobs online. Together they decided to begin a corporation
                        that might deliver on the promise of this technology.
                        Fast-forward to today, that technology is that the foundation of Iniesta — the most important
                        global freelancing website. With countless jobs posted on Iniesta annually, freelancers are
                        earning money by providing companies with over 5,000 skills across over 70 categories of labor.
                        <br>
                        <b>A world of opportunities</b><br>
                        Through Iniesta businesses get more done, connecting with freelancers to figure on projects from
                        web and mobile app development to SEO, social media marketing, content writing, graphic design,
                        admin help and thousands of other projects. Iniesta makes it fast, simple, and cost-effective to
                        seek out, hire, work with, and pay the most effective professionals anywhere, any time.
                        <br>
                        <b>Iniesta’s vision</b> <br>
                        To be the number one flexible talent solution in the world. <br>
                        <b>Iniesta's mission</b><br>
                        To create economic opportunities so people have better lives. <br>
                        <b>Iniesta’s values</b><br>
                        Put our community first. <br>
                        Inspire a boundless future of work. <br>
                        Build amazing teams. <br>
                        Have a bias towards action. <br>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
</body>

</html>