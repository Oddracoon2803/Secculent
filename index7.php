<?php
$name = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $message = test_input($_POST["message"]);
    echo "<script>alert('Pesan Anda telah berhasil dikirim. Terima kasih atas pesan Anda!');</script>";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laprak 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark custom-bg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#"><b>ROESMANA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right " id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid banner">
        <div class="container text-center">
            <h3 class="display-1"><b>Welcome to My Page</b></h3>
            <br>
            <a href="#skill">
                <button type="button" class="btn btn-danger btn-lg">See What I Can Do for You</button>
            </a>
        </div>
    </div>
    <!--about-->
    <div class="container-fluid about pt-5 pb-5 custom-bg">
        <div class="cointainer">
            <div class="flex-box">
                <br>
                <h2 class="display-3 text-center" id="about"><b>About Me</b></h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="row justify-content-center align-items-center pt-4 pb-5">
                    <div class="col-md-3">
                        <img src="Untitled31.jpg" class="crop-img rounded-circle" width="260" height="260" />
                    </div>
                    <div class="col-md-7">
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, a
                            distinctio ab id ex dolorum!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla placeat voluptatem hic ut
                            amet,
                            ea commodi nostrum molestiae neque aut!
                        </p>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, a
                            distinctio ab id ex dolorum!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, repudiandae.
                        </p>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, a
                            distinctio ab id ex dolorum!
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--skill-->
    <div class="container-fluid skill pt-5 pb-5 custom-bg">
        <div class="container text-center">
            <div class="flex-box">
                <br>
                <h2 class="display-3" id="skill"><b>Skills</b></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem consequuntur officiis, quaerat,
                    assumenda pariatur.
                </p>
                <div class="row pt-4 pb-5">
                    <div class="col-md-4">
                        <span class="lingkaran"><i class="fas fa-code fa-5x"></i></span>
                        <h3 class="mt-3">Programing</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Beatae, facere.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="lingkaran"><i class="fas fa-layer-group fa-5x"></i></span>
                        <h3 class="mt-3">UI/UX</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Beatae, facere.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="lingkaran"><i class="fas fa-palette fa-5x"></i></span>
                        <h3 class="mt-3">Design</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Beatae, facere.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--portofolio-->
    <div class="container-fluid portofolio pt-5 pb-5 custom-bg">
        <div class="container text-center">
            <div class="flex-box">
                <br>
                <h2 class="display-3" id="portofolio"><b>Portofolio</b></h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam distinctio quasi eveniet adipisci
                    architecto fugit quidem quaerat in, eaque nobis.
                </p>
                <div class="row pt-4 pb-5 gx-4 gy-4">
                    <div class="col-md-4">
                        <div class="card crop-img">
                            <img src="DPW-PRAKTIKUM-3.png" class="card-img-top" width="200" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Login Page</h5>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta
                                    molestiae, provident pariatur cupiditate harum exercitationem?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card crop-img">
                            <img src="2.jpg" class="card-img-top" width="200" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Figma Design</h5>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta
                                    molestiae, provident pariatur cupiditate harum exercitationem?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card crop-img">
                            <img src="Untitled31.jpg" class="card-img-top" width="200" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Art Design</h5>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta
                                    molestiae, provident pariatur cupiditate harum exercitationem?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact-->
    <div class="container-fluid contact pt-5 pb-5 custom-bg">
        <div class="container">
            <div class="flex-box">
                <br>
                <h2 class="display-3 text-center" id="contact"><b>Contact Me</b></h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur.</p>
                <form class="row g-3" method="post" action="<?php echo 
htmlspecialchars($_SERVER[" PHP_SELF"]); ?>">

                    <div class="row pt-4 pb-5">
                        <div class="col-md-6">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Name" name="name">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Email"
                                name="email">
                            <input class="form-control form-control-lg" type="text" placeholder="Phone" name="Phone">
                        </div>
                        <div class="col-md-4">
                            <textarea class="form-control form-control-lg mb-5" rows="5" name="message"></textarea>
                            <button type="submit" class="btn btn-danger btn-lg" name="submit">Sent</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Card floating effect
        const cards = document.querySelectorAll('.portofolio .card');


        cards.forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-10px)';
                this.style.transition = 'transform 0.3s ease';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0)';
                this.style.transition = 'transform 0.3s ease';
            });
        });


    </script>
</body>

</html>