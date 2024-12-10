<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YS Innovation Tasks</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="Src/Images/Favicon.ico">
    <!-- Style CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesom CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg bg-primary" id="navbar">
        <div class="container-fluid">
            <!-- Title -->
            <a href="#" class="navbar-brand text-white" id="Title">Dynamic Creations</a>
            <!-- Hamburger Menu for Mobile Responsiveness -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links on the right -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white" href="#banner-section">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#About">About us</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="#Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Home Section -->
    <main class="pt-0 px-0">
        <!-- Home Section -->
        <section class="container-fluid px-0" id="banner-section">
            <div class="banner-overlay pt-5">
                <h2 class="pt-5">Welcome to Dynamic Creations</h2>
                <h4 class="pt-3 text-primary">Web and App Development Solutions</h4>
                <p class="banner-para pt-3 px-5 mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. tenetur
                    consectetur, excepturi repudiandae. Quis, consectetur minus! Illo minus nostrum
                    aperiam rem corrupti veritatis sequi omnis, repellat, quia officiis reprehenderit eaque ratione,
                    necessitatibus autem minima ipsum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Corrupti voluptatibus quas temporibus voluptate doloribus? Ratione cum tenetur deleniti nam, impedit
                    animi, beatae incidunt officiis iure nisi officia magni eius accusantium.</p>
                <button type="button" class="btn btn-primary text-white px-3 py-2 my-3">Get Quote</button>
            </div>
        </section>
        <!-- About Us Section -->
        <section class="container-fluid" id="About">
            <div class="About-title py-5 my-5">
                <h1 class="text-center">About the Company</h1>
                <p class="text-center">Key Features of the Company</p>
            </div>
            <div class="About-section">
                <div class="row inner-about d-flex justify-content-around gap">
                    <div class="col-md-4 About-in">
                        <i class="fa fa-desktop"></i>
                        <p class="About-text text-center my-3">Responsive</p>
                        <p class="About-para text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Deserunt soluta aliquam omnis sit ullam ad quas deleniti cumque corrupti nihil. Provident
                            pariatur error similique aliquam distinctio veniam alias, iusto fugiat?</p>
                    </div>
                    <div class="col-md-4 About-in">
                        <i class="fa fa-heart"></i>
                        <p class="About-text text-center my-3">Passion</p>
                        <p class="About-para text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Deserunt soluta aliquam omnis sit ullam ad quas deleniti cumque corrupti nihil. Provident
                            pariatur error similique aliquam distinctio veniam alias, iusto fugiat?</p>

                    </div>
                    <div class="col-md-4 About-in">
                        <i class="fa fa-diamond"></i>
                        <p class="About-text text-center my-3">Design</p>
                        <p class="About-para text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Deserunt soluta aliquam omnis sit ullam ad quas deleniti cumque corrupti nihil. Provident
                            pariatur error similique aliquam distinctio veniam alias, iusto fugiat?</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact us -->
        <section class="container-fluid" id="Contact">
            <div class="About-title pt-5">
                <h1 class="text-center">Contact Us</h1>
                <p class="text-center">Get in touch with us</p>
            </div>
            <div class="container mt-5" id="form-container">
                <form class="row g-3" method="post" action="validate.php" id="contactForm">
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name">
                        <label for="Name" class="form-label">Name</label>
                        <div id="nameError" class="text-danger" style="display: none;">Please enter your name.</div>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="Email">
                        <label for="Email" class="form-label">Email</label>
                        <div id="emailError" class="text-danger" style="display: none;">Please enter a valid email
                            address.</div>
                    </div>
                    <div class="col-12 form-floating">
                        <input type="text" class="form-control" id="Subject" placeholder="Enter Subject" name="Subject">
                        <label for="Subject" class="form-label">Subject</label>
                        <div id="subjectError" class="text-danger" style="display: none;">Please enter a subject.</div>
                    </div>
                    <div class="col-md-12">
                        <label for="Service" class="form-label">Select Your Service</label>
                        <select id="Service" class="form-select" name="Service">
                            <option selected>...</option>
                            <option>Web Development</option>
                            <option>App Development</option>
                        </select>
                        <div id="serviceError" class="text-danger" style="display: none;">Please select a service.</div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Enter the Message" id="Message" name="Message"
                            style="height: 100px"></textarea>
                        <label for="Message">Comments</label>
                        <div id="messageError" class="text-danger" style="display: none;">Please enter a message.</div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- footer Section -->
        <div class="footer bg-primary mt-5 p-4">
            <div class="text-center">
                <button type="button" class="btn btn-light text-dark"><a href="#navbar"
                        class="text-decoration-none text-dark">To the Top</a></button>
            </div><br>
            <p class="text-white text-center">&copy; Dynamic Creation All Rights Reserved</p>
        </div>
    </main>
    <!-- JavaScript File -->
    <script src="App.js"></script>
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>