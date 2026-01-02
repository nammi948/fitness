<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .hero {
      height: 300px;
      /* control total section height */
      position: relative;
    }

    .child {
      height: 100%;
    }

    .hero-img {
      height: 500px;
      /* 🔽 decrease image height */
      width: 100%;
      object-fit: cover;
      
    }
    .child::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 82vh;
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(212, 74, 74, 0.5));
  pointer-events: none; /* so it doesn't block clicks */
}

    .img {
      position: absolute;
      height: 510px;
      top: -10px;
      width: 280px;
       filter: brightness(100%);
      
    }

    .child1 h1 {
      position: absolute;
      margin-left: 5%;
      top: 40%;

    }
    /* .child2 {
      position: absolute;
     bottom: -90%;
      width: 100%;
    } */
   .child3 {
    position: fixed;
    width: 100%; /* ensure full width */
    top: 0;
    z-index: 9999;
    transition: background-color 0.3s ease;
}
.child3.scrolled {
  background-color: rgb(141, 21, 41); /* background after scroll */
}

    .rating {
      position: absolute;
      top: 30%;
      left: 5%;
      z-index: 2;
    }

    .rating i {
      color: gold;
      font-size: 22px;
    }

     .card img {
      height: 150px;
      object-fit: cover;
    }

    .card {
      border-radius: 12px;
      overflow: hidden;
    } 
   

 
  </style>
</head>

<body>
  <main>
    <section class="parent">
      <div class="hero">
        <div class="child">
          <img src="./assest/images/2.jpg" class="hero-img" alt="img">
        </div>
        <div class="child6 d-flex justify-content-center">
          <img src="./assest/images/1.png" class="img" alt="">
        </div>
        <div class="child1">
          <h1 class="text-white">Discover the hidden<br> alter ego
            of your<br> body
            <!-- <strong >Unleash your fears,<br> free your mind, feel your body</strong> -->
          </h1>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>

        </div>
       
     <div class="child3 sticky-top">
  <div class="navbar navbar-expand-lg" style="z-index:9999; position:relative;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
        aria-controls="navbarSupportContent" aria-expanded="false" aria-label="toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-logo" href="#"><img src="./assest/images/4.png" alt="" style="height: 50px;"></a>
      <div class="navbar-collapse collapse" id="navbar">
        <ul class="navbar-nav ms-auto mb-lg-0 mb-2 ">
          <li class="nav-item"><a class="nav-link active text-light" href="#"> Home</a></li>
          <li class="nav-item"><a class="nav-link text-light" href="#"> About</a></li>
          <li class="nav-item"><a class="nav-link text-light" href="#">Courses</a></li>
          <li class="nav-item"><a class="nav-link text-light" href="#">Trainers</a></li>
          <li class="nav-item"><a class="nav-link text-light" href="#">Contact</a></li>
          <li class="nav-item">
            <button class="btn btn-sm rounded-pill mt-1 mx-2" style="background:#5fcf80;">Get Started</button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

      </div>
    </section>
    <!-- courses -->
    <section style="background:#5fcf80; margin-top: 240px;" class="h-100">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="mt-5">Courses</h1>
            <p class="mb-0 mb-5">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas
              consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit
              quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </section>

<section>
     <div class="">
          <div id="gymCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="container-fluid">
          <div class="row g-3  justify-content-center">

            <div class="col-md-3">
              <div class="card gym-card">
                <img src="https://images.unsplash.com/photo-1554284126-aa88f22d8b74?w=800" class="card-img-top" alt="">
              </div>
            </div>

            <div class="col-md-3">
              <div class="card gym-card">
                <img src="https://images.unsplash.com/photo-1600965962102-9d260a71890d?w=800" class="card-img-top" alt="">
              </div>
            </div>

            <div class="col-md-3">
              <div class="card gym-card">
                <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?w=800" class="card-img-top" alt="">
              </div>
            </div>

            <div class="col-md-3">
              <div class="card gym-card">
                <img src="https://images.unsplash.com/photo-1517964603305-11c0f6f66012?w=800" class="card-img-top" alt="">
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="container-fluid">
          <div class="row g-3 justify-content-center">

            <div class="col-md-3">
              <div class="card gym-card">
                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800" class="card-img-top" alt="">
              </div>
            </div>

            <div class="col-md-3">
              <div class="card gym-card">
                <img src="https://images.unsplash.com/photo-1599058917765-a780eda07a3e?w=800" class="card-img-top" alt="">
              </div>
            </div>

            <div class="col-md-3">
              <div class="card gym-card">
                <img src="https://images.unsplash.com/photo-1517964603305-11c0f6f66012?w=800" class="card-img-top" alt="">
              </div>
            </div>

            <div class="col-md-3">
              <div class="card gym-card">
                <img src="https://images.unsplash.com/photo-1549576490-b0b4831ef60a?w=800" class="card-img-top" alt="">
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
        </div>
      </div>
</section>
    <section>
      <div class="container-fluid mt-3">
        <h1 class="text-center" style="color: rgb(194, 54, 4);">Why We're Not Just Another Gym</h1>
        <h2 class="text-center">Inspire Your Best Self</h2>
        <p class="text-center">We're Your Patner In Achieving A Healthier,Stronger,And More Confident You</p>
        <div class="row row-cols-1 row-cols-md-4 g-3 d-flex justify-content-center text-center">

          <div class="col">
            <div class="card">
              <div class="card-body">
                <i class="fa-solid fa-dumbbell fs-1 fa-2x"></i>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <i class="fa-solid fa-running fs-1"></i>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <i class="fa-solid fa-heartbeat fs-1"></i>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <i class="fa-solid fa-hand-fist fs-1"></i>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
      <!-- gym details -->
     <section class="py-5 bg-dark mt-3">
  <div class="container">
    <div class="row g-4">

      <!-- CARD 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="position-relative overflow-hidden rounded">
          <img
            src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=80&w=1200&auto=format&fit=crop"
            class="img-fluid w-100"
            style="height:320px; object-fit:cover;"
            alt="Class Timetable">

          <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-dark bg-opacity-50 text-white">
            <h5 class="fw-bold">CLASS TIMETABLE</h5>
            <p class="small mb-1">View your club schedule</p>
            <div class="border-bottom border-3 border-danger w-25"></div>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="position-relative overflow-hidden rounded">
          <img
            src="https://images.unsplash.com/photo-1599058917765-a780eda07a3e?q=80&w=1200&auto=format&fit=crop"
            class="img-fluid w-100"
            style="height:320px; object-fit:cover;"
            alt="Try Us">

          <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-dark bg-opacity-50 text-white">
            <h5 class="fw-bold">TRY US</h5>
            <p class="small mb-1">Start your fitness journey</p>
            <div class="border-bottom border-3 border-danger w-25"></div>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="col-lg-4 col-md-12">
        <div class="position-relative overflow-hidden rounded">
          <img
            src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1200&auto=format&fit=crop"
            class="img-fluid w-100"
            style="height:320px; object-fit:cover;"
            alt="Personal Training">

          <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-dark bg-opacity-50 text-white">
            <h5 class="fw-bold">PERSONAL TRAINING</h5>
            <p class="small mb-1">Train with certified experts</p>
            <div class="border-bottom border-3 border-danger w-25"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

     <!-- student details -->
  <section class="mt-3">
    <h1 class="text-center">OUR HEALTH CLUBS</h1>
    <p class="text-center text-muted text-white">Push your fitness further with our mix of facilities and we'll support you with advice on new and better ways to train.</p>
      <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-4 g-3 d-flex justify-content-center text-center">

          <div class="col" style="background:grey;">
            <div class="card" style="background:#eaf7ea;">
              <div class="card-body">
                <h5 class="card-title fs-1">1232</h5>
                <p class="card-text fs-5">Students</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fs-1">64</h5>
                <p class="card-text fs-5">Courses</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fs-1">42</h5>
                <p class="card-text fs-5">Events</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fs-1">24</h5>
                <p class="card-text fs-5">Trainers</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- courses buy now -->
     <section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4 text-center">

      <!-- 3 MONTHS -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm">
          <div class="card-header bg-secondary text-white fw-bold fs-4">
            3 MONTHS
          </div>
          <div class="card-body">
            <h3 class="fw-bold mb-3">₹3,999</h3>
            <ul class="list-group list-group-flush text-start mb-4">
              <li class="list-group-item">✔ Gym Access</li>
              <li class="list-group-item">✔ Cardio Equipment</li>
              <li class="list-group-item">✔ Weight Training</li>
              <li class="list-group-item">✔ Locker Facility</li>
              <li class="list-group-item">✔ Free Trial Class</li>
              <li class="list-group-item">✔ Basic Diet Tips</li>
              <li class="list-group-item">✔ Limited Group Classes</li>
              <li class="list-group-item">✔ Support Desk</li>
            </ul>
            <button class="btn btn-outline-dark w-100">BUY NOW</button>
          </div>
        </div>
      </div>

      <!-- 6 MONTHS (POPULAR) -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow border-danger">
          <div class="card-header bg-danger text-white fw-bold fs-4">
            6 MONTHS <span class="badge bg-warning text-dark ms-2">POPULAR</span>
          </div>
          <div class="card-body">
            <h3 class="fw-bold mb-3">₹6,999</h3>
            <ul class="list-group list-group-flush text-start mb-4">
              <li class="list-group-item">✔ Full Gym Access</li>
              <li class="list-group-item">✔ Unlimited Cardio</li>
              <li class="list-group-item">✔ Advanced Weight Training</li>
              <li class="list-group-item">✔ Free Locker</li>
              <li class="list-group-item">✔ Weekly Trainer Support</li>
              <li class="list-group-item">✔ Diet & Nutrition Plan</li>
              <li class="list-group-item">✔ Unlimited Group Classes</li>
              <li class="list-group-item">✔ Progress Tracking</li>
            </ul>
            <button class="btn btn-danger w-100">BUY NOW</button>
          </div>
        </div>
      </div>

      <!-- 12 MONTHS -->
      <div class="col-lg-4 col-md-12">
        <div class="card h-100 shadow-sm">
          <div class="card-header bg-dark text-white fw-bold fs-4">
            12 MONTHS
          </div>
          <div class="card-body">
            <h3 class="fw-bold mb-3">₹11,999</h3>
            <ul class="list-group list-group-flush text-start mb-4">
              <li class="list-group-item">✔ Premium Gym Access</li>
              <li class="list-group-item">✔ Unlimited Cardio</li>
              <li class="list-group-item">✔ Strength & Cross Training</li>
              <li class="list-group-item">✔ Personal Locker</li>
              <li class="list-group-item">✔ Personal Trainer (Monthly)</li>
              <li class="list-group-item">✔ Custom Diet Plan</li>
              <li class="list-group-item">✔ All Group Classes</li>
              <li class="list-group-item">✔ Body Assessment</li>
            </ul>
            <button class="btn btn-outline-dark w-100">BUY NOW</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
   <!-- trainer -->
    
<section class="py-5 bg-info">
   <div class="container">
     
    <h2 class="text-center mb-4 fw-bold">Our Professional Trainers</h2>

    <div class="row g-4">

      <!-- Trainer 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07c"
               class="card-img-top" alt="Trainer 1">
          <div class="card-body">
            <h5 class="card-title">Rahul Verma</h5>
            <p class="text-muted">Strength & Weight Trainer</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">🏋️ Muscle Building</li>
              <li class="list-group-item">🔥 Fat Loss</li>
              <li class="list-group-item">⏱ 8+ Years Experience</li>
            </ul>
          </div>
          <div class="card-footer bg-white text-center">
            <a href="#" class="btn btn-danger w-100">Book Trainer</a>
          </div>
        </div>
      </div>

      <!-- Trainer 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="https://images.unsplash.com/photo-1571019613578-2b193a067d7c"
               class="card-img-top" alt="Trainer 2">
          <div class="card-body">
            <h5 class="card-title">Ananya Sharma</h5>
            <p class="text-muted">Yoga & Wellness Coach</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">🧘 Yoga & Flexibility</li>
              <li class="list-group-item">💆 Stress Relief</li>
              <li class="list-group-item">⏱ 6+ Years Experience</li>
            </ul>
          </div>
          <div class="card-footer bg-white text-center">
            <a href="#" class="btn btn-success w-100">Join Session</a>
          </div>
        </div>
      </div>

      <!-- Trainer 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="https://images.unsplash.com/photo-1605296867304-46d5465a13f1"
               class="card-img-top" alt="Trainer 3">
          <div class="card-body">
            <h5 class="card-title">Michael John</h5>
            <p class="text-muted">CrossFit & HIIT Expert</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">⚡ HIIT Training</li>
              <li class="list-group-item">🏃 Endurance Boost</li>
              <li class="list-group-item">⏱ 10+ Years Experience</li>
            </ul>
          </div>
          <div class="card-footer bg-white text-center">
            <a href="#" class="btn btn-primary w-100">Start Training</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
  
  <!-- footer -->
    <footer class="bg-danger text-white pt-5">
  <div class="container">

    <div class="row">

      <!-- ABOUT US -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold text-uppercase">About Us</h6>
        <ul class="list-unstyled small">
          <li class="mb-2">Company Background</li>
          <li class="mb-2">Careers</li>
          <li class="mb-2">Press Room</li>
          <li class="mb-2">Reviews & Testimonials</li>
        </ul>
      </div>

      <!-- MEMBERSHIP -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold text-uppercase">Membership</h6>
        <ul class="list-unstyled small">
          <li class="mb-2">Membership Options</li>
          <li class="mb-2">Member Benefits</li>
          <li class="mb-2">Corporate Membership</li>
          <li class="mb-2">FAQs</li>
        </ul>
      </div>

      <!-- CLUBS -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold text-uppercase">Clubs</h6>
        <ul class="list-unstyled small">
          <li class="mb-2">Club Finder</li>
          <li class="mb-2">Club Operating Hours</li>
          <li class="mb-2">Get 1 Day Free Pass</li>
          <li class="mb-2">Club Facilities</li>
        </ul>
      </div>

      <!-- SUPPORT -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold text-uppercase">Customer Service</h6>
        <ul class="list-unstyled small">
          <li class="mb-2">Members Area</li>
          <li class="mb-2">FAQs</li>
          <li class="mb-2">Contact Us</li>
          <li class="mb-2">Membership Enquiry</li>
        </ul>
      </div>

    </div>

    <hr class="border-light">

    <!-- BOTTOM -->
    <div class="row align-items-center pb-3">

      <div class="col-md-6 text-center text-md-start small">
        © 2026 Fitness Center. All Rights Reserved.
      </div>

      <div class="col-md-6 text-center text-md-end">
        <a href="#" class="text-white fs-5 me-3">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="#" class="text-white fs-5 me-3">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="#" class="text-white fs-5 me-3">
          <i class="bi bi-youtube"></i>
        </a>
        <a href="#" class="text-white fs-5">
          <i class="bi bi-twitter-x"></i>
        </a>
      </div>

    </div>

  </div>
</footer>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
    <script>
  const gymCarousel = document.querySelector('#gymCarousel');

  const carousel = new bootstrap.Carousel(gymCarousel, {
    interval: 2500,   // slide time (ms)
    ride: 'carousel',
    pause: false,     // hover par stop na ho
    wrap: true        // last ke baad first
  });
</script>
<script>
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.child3');
    if (window.scrollY > 50) { // scroll distance in px
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
</script>


</body>

</html>