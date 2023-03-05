<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Portfolio</title>
</head>
<body>
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container container-fluid">
                <a class="navbar-brand text-decoration-underline" href="#">Mark Lester Cuevo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav text-white">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- //Landing Page -->
    <div class="container border-1 landing-page">
        <div class="row landing-box">
            <div class="col-8" id="landing-info">
                <p class="color-primary welcome-p">Welcome to my Portfolio!</p>
                <p class="myName-p">My name is</p>
                <h1 class="name-title text-decoration-underline">Mark Lester Cuevo</h1>
                <h3 class="job-title">Aspiring Software Engineer!</h2>
                <p class="profile-info">I am looking for an ofpprtunity to apply my skills and knowledge to the place where I can grow and coontribute tot the growth.</p>
                <button class="background-primary landing-button-1">CONTACT ME</button>
                <button class="background-none landing-button-2">VIEW RESUME</button>
            </div>
            <div class="col-4" id="image-box">
                <img class="drag drag-img-1" src="./images/picture1.png" alt="">
                <img class="drag drag-img-2" src="./images/picture2.png" alt="">
                <img class="drag drag-img-3" src="./images/picture3.png" alt="">
                <img class="drag drag-img-4" src="./images/profile.png" alt="">
                <img class="drag drag-img-5" src="/images/picture4.png" alt="">
                <img class="drag drag-img-6" src="./images/picture5.png" alt="">
                <img class="drag drag-img-7" src="./images/picture6.png" alt="">
            </div>
        </div>
    </div>

    <!-- About Me Page -->
    <div class="container about-me-page">
        <p class="color-primary title text-decoration-underline about-title">ABOUT ME</p>
        <div class="row">
            <div class="col-6">
                <p class="greet">Good Day!</p>
                <p class="about-para-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus repellendus corrupti culpa tenetur. Asperiores necessitatibus excepturi nobis cupiditate, minima culpa maxime quas beatae ea natus porro exercitationem rerum quod ratione dignissimos eum, laboriosam ullam esse, repudiandae ipsa dicta modi aliquid.</p>
                <p class="about-para-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nihil voluptates sed culpa aliquid exercitationem molestias quidem veritatis error id? Natus praesentium recusandae fugiat non vitae eius aperiam adipisci porro?</p>
            </div>
            <div class="col-6 technologies-box">
                <p class="tech-title"">Technologies</p>
                <div class="row py-2 tech-row-1">
                    <div class="col figma-col">
                        <img class="row" src="./images/logos/figma.png" alt="" id="figma">
                        <label class="row" for="figma">Figma</label>
                    </div>
                    <div class="col mongo-col">
                        <img class="row" src="./images/logos/mongodb.png" alt="" id="mongodb">
                        <label class="row" for="mongodb">Mongodb</label>
                    </div>
                    <div class="col sql-col">
                        <img class="row" src="./images/logos/sql.png" alt="" id="sql">
                        <label class="row" for="mongodb">SQL</label>
                    </div>
                    <div class="col css-col">
                        <img  class="row" src="./images/logos/css.png" alt="" id="css">
                        <label class="row" for="css">CSS</label>
                    </div>
                </div>
                <div class="row py-3 tech-row-2">
                    <div class="col javascript-col">
                        <img class="row" src="./images/logos/javascript.png" alt="" id="javascript">
                        <label for="javascript">JavaScript</label>
                    </div>
                    <div class="col html-col">
                        <img class="row" src="./images/logos/html.png" alt="" id="html">
                        <label for="html">HTML</label>
                    </div>
                    <div class="col wordpress-col">
                        <img class="row" src="./images/logos/wordpress.png" alt="" id="wordpress">
                        <label for="wordpress">WordPress</label>
                    </div>
                    <div class="col react-col">
                        <img class="row" src="./images/logos/react.png" alt="" id="react">
                        <label for="react">React</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
		

    <!-- Projects -->
    <div class="container project-page">
        <p class="color-primary title text-decoration-underline project-title">Projects</p>
        <div class="row py-3">
            <div class="col-6 text-align-right project-1">
                <p class="title color-primary">Barangay Requisition System</p>
                <p class="text-mini">September 2022 - November 2022</p>
                <p class="text-mini color-primary">HTML | CSS | JS | Bootstrap | MySQL</p>
                <p class="text-mini">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <a href="certification.php"><button>READ MORE</button></a> 
            </div>
            <div class="col-6 project-img-box">
                <img class="project-img-1" src="./images/projetcs/project1.png" alt="">
            </div>
        </div>
        <div class="row py-3">
            <div class="col-6 project-img-box">
                <img class="project-img-2" src="./images/projetcs/project1.png" alt="">
            </div>
            <div class="col-6 text-align-left project-2">
                <p class="title color-primary">Barangay Requisition System</p>
                <p class="text-mini">September 2022 - November 2022</p>
                <p class="text-mini color-primary">HTML | CSS | JS | Bootstrap | MySQL</p>
                <p class="text-mini">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <button>READ MORE</button>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-6 text-align-right project-3">
                <p class="title color-primary">Barangay Requisition System</p>
                <p class="text-mini">September 2022 - November 2022</p>
                <p class="text-mini color-primary">HTML | CSS | JS | Bootstrap | MySQL</p>
                <p class="text-mini">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <button>READ MORE</button>
            </div>
            <div class="col-6 project-img-box">
                <img class="project-img-3" src="./images/projetcs/project1.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-6 project-img-box">
                <img class="project-img-4" src="./images/projetcs/project1.png" alt="">
            </div>
            <div class="col-6 text-align-left project-4">
                <p class="title color-primary">Barangay Requisition System</p>
                <p class="text-mini">September 2022 - November 2022</p>
                <p class="text-mini color-primary">HTML | CSS | JS | Bootstrap | MySQL</p>
                <p class="text-mini">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <button>READ MORE</button>
            </div>
        </div>
    </div>

    
    <!-- CERTIFICATION -->
    <div id="carouselExampleControls" class="carousel certi-page container" data-bs-ride="carousel">
        <p class="color-primary title text-decoration-underline about-title">Certifications</p>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container certification-page d-flex w-33">
                    <div class="box-certi">
                        <div class="box-info">
                            <div class="row">
                                <h4 class="certi-title">Database Certification</h4>
                            </div>
                            <div class="row">
                                <a href="#">Certiport</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container certification-page d-flex w-33">
                    <div class="box-certi">
                        <div class="box-info">
                            <div class="row">
                                <h4 class="certi-title">Database Certification</h4>
                            </div>
                            <div class="row">
                                <a href="#">Certiport</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container certification-page d-flex w-33">
                    <div class="box-certi">
                        <div class="box-info">
                            <div class="row">
                                <h4 class="certi-title">Database Certification</h4>
                            </div>
                            <div class="row">
                                <a href="#">Certiport</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container certification-page d-flex w-33">
                    <div class="box-certi">
                        <div class="box-info">
                            <div class="row">
                                <h4 class="certi-title">Database Certification</h4>
                            </div>
                            <div class="row">
                                <a href="#">Certiport</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container certification-page d-flex w-33">
                    <div class="box-certi">
                        <div class="box-info">
                            <div class="row">
                                <h4 class="certi-title">Database Certification</h4>
                            </div>
                            <div class="row">
                                <a href="#">Certiport</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container certification-page d-flex w-33">
                    <div class="box-certi">
                        <div class="box-info">
                            <div class="row">
                                <h4 class="certi-title">Database Certification</h4>
                            </div>
                            <div class="row">
                                <a href="#">Certiport</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container contact-page">
        <p class="color-primary title text-decoration-underline contact-title">Hire me!</p>
        <p class="miniPara contact-para">I am available for full time, part time, adn freelance work. Connect with me and let’s talk about everything via this form or email: <span class="color-primary">cuevomarklesterabas@gmail.com</span></p>
        <form>
            <div class="form-group row no-gutters">
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="First Name">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Last Name"> 
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <input type="email" class="form-control" placeholder="Email"> 
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12 message-area">
                <input type="textarea" wrap="soft" class="form-control message-box" placeholder="Place your text here...">
              </div>
            </div>
            <button class="submit-btn-form" type="submit">Submit</button>
        </form>
    </div>
      
    <!-- Footer -->
    <footer>
        <div class="container row">
            <div class="col text-center p-4 footer-text">
                © 2023 Copyright:
                <a class="text-reset fw-bold" href="#">Mark Lester Cuevo</a>
            </div>
            <div class="col p-4 footer-img">
                <a href="#"><img src="./images/logos/Linkedin.png" alt=""></a>
                <a href="#"><img src="./images/logos/Facebook.png" alt=""></a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>
</html>