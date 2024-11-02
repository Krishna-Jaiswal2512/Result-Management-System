<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            box-sizing: border-box;
            width: 100%;
            /* background-image: url("bg3.jpg"); */
            background-image: url("Images/bg3.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        img.i1 {
            width: 80%;
            height: 400px;
            /* background-image: url('img_flowers.jpg'); */
            background-size: 100% 80%;
            margin: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>TCET RESULT MANAGEMENT</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-secondary">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" style="margin-left:20px;margin-right:20px;" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:20px;margin-right:20px;" href="dashboard.php">
                            Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="margin-left:20px;margin-right:20px;" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Student
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Results</a></li>

                            <li><a class="dropdown-item" href="manage_results.php">Manage Results</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#">Study Material</a></li>
                            <li><a class="dropdown-item" href="#">Academic Calendar </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <center style="margin-top:20px; margin-bottom:30px; color:darkred;">
        <h1>Student Result Management System</h1>
    </center>

    <div class="text-center">

    </div>
    <div class="col d-flex justify-content-center m-2 ">
        <div class="card" style="width: 90%;">
            <div class="card-body">
                <h4>About Thakur College of Engineering & Technology</h4>
                <p>Thakur College of Engineering and Technology is an engineering college in Mumbai, India. It is located in Thakur village locality in Kandivali East, a post suburb of Mumbai, founded by the Thakur Education Group in 2001 by V.K. Singh. TCET is accredited by All India Council for Technical Education (AIPE) and the Directorate of Technical Education (DTE) of the government of Maharashtra, India. This college is affiliated to the University of Mumbai. The National Assessment and Accreditation Council (NAAC) awarded an "A" grade to the college among various engineering colleges. TCET is famous for its infrastructure and possesses advanced facilities like the IITB Remote Center and Cloud Computing Labs.</p>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->

    <div class=" container-fluid col d-flex container-fluid ">
        <div class="card m-3">
            <h5 class="card-header bg-secondary text-white">The various departments in the Faculty of Technology
            </h5>
            <div class="card-body">

                <ul class="list-group list-group-flush">
                <ul class="list-group">
    <li class="list-group-item">Computer Engineering</li>
    <li class="list-group-item">Chemical Engineering</li>
    <li class="list-group-item">Information Technology</li>
    <li class="list-group-item">Civil Engineering</li>
    <li class="list-group-item">Electronics and Communication Engineering</li>
    <li class="list-group-item">Mechanical Engineering</li>
    <li class="list-group-item">Electrical Engineering</li>
    <li class="list-group-item">Aeronautical Engineering</li>
    <li class="list-group-item">Biomedical Engineering</li>
    <li class="list-group-item">Environmental Engineering</li>
    <li class="list-group-item">Software Engineering</li>
    <li class="list-group-item">Mechatronics</li>
    <li class="list-group-item">Network Engineering</li>
</ul>


                </ul>

            </div>
        </div>


        <div class="card  m-3" style="width: 45%;">

            <img class="card-img-top" src="https://test.tcetmumbai.in/HomePage/Hero/slider-1.jpg" alt="Card image cap">

            <div class="card-body">
                <h5 class="card-title">Library</h5>
                <p class="card-text" style="text-align: justify;">Learning Resource Centre (Central library) is located on 4th floor of the College building with 1124.87 Sq. m. built area. LRC is highly modular. Mr. Devidas Kalwale is the Librarian and looks after the development of the library. Additional library facility is created on 4th floor capacity is increased with 150.</p>
                <p class="card-text" style="text-align: justify;">Book Bank Facility for economically backward students with more than 2810 books. Department Library with average 500 books and 800 project reports. Organised 5 training programmes of e-resources for faculty members. Book Exhibition for students and faculty</p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Text Books - more than 31683</li>
                <li class="list-group-item">References books - 2723</li>
                <li class="list-group-item">Total books - 34406</li>
                <li class="list-group-item">Magazines - more than 11</li>
                <li class="list-group-item">Printed Journals - 119</li>
                <li class="list-group-item">E-Books - 41,000 +</li>
            </ul>

            <ul class="list-group list-group-flush">
                <h5 class="m-3">Librarary Details</h5>
                <p class="m-3" style="text-align: justify;">The seating arrangements are designed to accommodate readers across different settings, with a general reading room boasting a seating capacity for 226 individuals, supplemented by a faculty reading room equipped for 23. A dedicated section for magazines and journals caters to the specific needs of avid readers and researchers alike. </p>
                <li class="list-group-item">On Working Days - <b>8:30 a.m to 8:30 p.m.</b></li>

            </ul>
        </div>

        <div class="card m-2">
            <h5 class="card-header bg-secondary text-white">News</h5>
            <div class="card-body">

                <ul class="list-group list-group-flush">
                    <a href="">
                        <li class="list-group-item"> Sem-IV Result Available </li>
                    </a>

                    <a href="">
                        <li class="list-group-item">Admission Process for new students</li>
                    </a>
                    <a href="">
                        <li class="list-group-item">Placements</li>
                    </a>
                </ul>

            </div>
        </div>
    </div>
    <?php include('footer.html'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>