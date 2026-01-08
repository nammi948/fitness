<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro Fitness</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 240px;
            --sidebar-collapsed-width: 75px;
            --primary-blue: #2563eb;
            --dark-bg: #111827;
            --top-nav-height: 64px;
        }

        body {
            margin: 0;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: #f9fafb;
            overflow-x: hidden;
        }

        /* ===== SIDEBAR CORE ===== */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--dark-bg);
            transition: width 0.3s ease, left 0.3s ease;
            z-index: 1100;
            overflow: hidden;
        }

        /* Desktop Collapse */
        #sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        /* Hide text when collapsed */
        #sidebar.collapsed .brand-text,
        #sidebar.collapsed .nav-link span {
            display: none;
        }

        /* Center icons when collapsed */
        #sidebar.collapsed .nav-link {
            justify-content: center;
            padding: 12px 0;
        }

        #sidebar.collapsed .nav-link i {
            margin: 0 !important;
            font-size: 1.4rem;
        }

        .sidebar-brand {
            height: var(--top-nav-height);
            display: flex;
            align-items: center;
            padding: 0 20px;
            color: #fff;
            font-weight: 700;
            border-bottom: 1px solid #374151;
            white-space: nowrap;
        }

        .sidebar-menu .nav-link {
            color: #9ca3af;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            margin: 4px 10px;
            border-radius: 8px;
            transition: 0.2s;
            white-space: nowrap;
            text-decoration: none;
        }

        .sidebar-menu .nav-link:hover,
        .sidebar-menu .nav-link.active {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        /* ===== TOP NAVBAR ===== */
        .top-navbar {
            height: var(--top-nav-height);
            position: fixed;
            top: 0;
            left: var(--sidebar-width);
            right: 0;
            z-index: 1050;
            background: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #e5e7eb;
            transition: left 0.3s ease;
        }

        body.sidebar-collapsed .top-navbar {
            left: var(--sidebar-collapsed-width);
        }
       
        /* ===== MAIN CONTENT ===== */
       #main {
    margin-left: var(--sidebar-width);
    margin-top: var(--top-nav-height);
    padding: 20px;
    transition: margin-left 0.3s ease;
}

.footer {
    margin-left: var(--sidebar-width);
    transition: margin-left 0.3s ease;
    padding: 20px;
}

body.sidebar-collapsed #main,
body.sidebar-collapsed .footer {
    margin-left: var(--sidebar-collapsed-width);
}


        /* ===== MOBILE RESPONSIVENESS ===== */
      @media (max-width: 992px) {

    /* Sidebar hidden by default */
    #sidebar {
        left: -100%;
        width: var(--sidebar-width);
    }

    /* When open */
    body.sidebar-open #sidebar {
        left: 0;
    }

    /* Navbar & main full width */
    .top-navbar {
        left: 0 !important;
    }

    #main,
    .footer {
        margin-left: 0 !important;
    }
}

        /* HERO SECTION */
        .hero-section {
            /* min-height: 80vh; */
            height: 600px;
            display: flex;
            align-items: center;
            border-radius: 24px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)),
                url('https://images.unsplash.com/photo-1579758629938-03607ccdbaba?auto=format&fit=crop&w=1600&q=80') center/cover;
            color: white;
            padding: 40px 20px;
        }

        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1090;
        }

        body.sidebar-open .sidebar-overlay {
            display: block;
        }

        .course-card {
            border-radius: 16px;
            border: none;
            transition: 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
     <!-- navbar -->
    <header>
        <div class="sidebar-overlay" id="overlay"></div>

        <nav class="navbar navbar-light top-navbar sticky-top px-3">
            <div class="container-fluid">
                <button class="btn btn-outline-dark border-0" id="toggleSidebar">
                    <i class="bi bi-text-indent-left fs-4"></i>
                </button>
                <div class="ms-auto d-flex align-items-center">
                    <div class="me-3 d-none d-md-block text-end">
                        <small class="text-muted d-block">Welcome back,</small>
                        <span class="fw-bold"> User</span>
                    </div>
                    <div class="bg-primary rounded-circle" style="width:40px; height:40px;"></div>
                </div>
            </div>
        </nav>

        <div id="sidebar">
            <div class="sidebar-brand">
                <i class="bi bi-lightning-charge-fill text-primary fs-3 me-2"></i>
                <span class="brand-text">FIT-PRO</span>
            </div>

            <ul class="nav flex-column sidebar-menu mt-3">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-grid-1x2"></i><span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-credit-card"></i><span class="ms-2">Payments</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-journal-text"></i><span class="ms-2">Courses</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-person-gear"></i><span class="ms-2">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <div id="main">
            <!-- home -->
            <section class="hero-section mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <span class="badge bg-primary mb-3">ELITE COACHING</span>
                            <h1 class="display-3 fw-bold mb-3">STRONGER EACH <span class="text-primary">DAY.</span></h1>
                            <p class="lead opacity-75 mb-4">Master your fitness goals with our data-driven training
                                modules
                                and expert support.</p>
                            <div class="d-flex gap-3">
                                <button class="btn btn-primary btn-lg px-4">Get Started</button>
                                <button class="btn btn-outline-light btn-lg px-4">Tour</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- card -->
            <section class="py-5 bg-light">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h1 class="fw-bold" style="color: rgb(194, 54, 4);">Why We're Not Just Another Gym</h1>
                        <h2 class="h4 text-secondary">Inspire Your Best Self</h2>
                        <p class="text-muted">We're Your Partner in Achieving a Healthier, Stronger, and More Confident
                            You</p>
                    </div>

                    <!-- Cards Row -->
                    <div class="row g-4 text-center justify-content-center">

                        <!-- Card 1 -->
                        <div class="col-6 col-md-3">
                            <div class="card shadow-sm border-0 h-100 hover-scale">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <i class="fa-solid fa-dumbbell fa-3x mb-3 text-danger"></i>
                                    <h5 class="card-title fw-bold">Strength Training</h5>
                                    <p class="card-text text-muted">Build muscle, endurance, and power with expert
                                        guidance.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-6 col-md-3">
                            <div class="card shadow-sm border-0 h-100 hover-scale">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <i class="fa-solid fa-running fa-3x mb-3 text-warning"></i>
                                    <h5 class="card-title fw-bold">Cardio Fitness</h5>
                                    <p class="card-text text-muted">Boost your stamina, speed, and heart health
                                        effectively.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-6 col-md-3">
                            <div class="card shadow-sm border-0 h-100 hover-scale">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <i class="fa-solid fa-heartbeat fa-3x mb-3 text-success"></i>
                                    <h5 class="card-title fw-bold">Health & Wellness</h5>
                                    <p class="card-text text-muted">Monitor your progress and achieve long-term
                                        wellbeing.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-6 col-md-3">
                            <div class="card shadow-sm border-0 h-100 hover-scale">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <i class="fa-solid fa-hand-fist fa-3x mb-3 text-primary"></i>
                                    <h5 class="card-title fw-bold">Motivation & Coaching</h5>
                                    <p class="card-text text-muted">Stay inspired with personalized coaching and
                                        community support.</p>
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
                                <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=80&w=1200&auto=format&fit=crop"
                                    class="img-fluid w-100" style="height:320px; object-fit:cover;"
                                    alt="Class Timetable">

                                <div
                                    class="position-absolute bottom-0 start-0 w-100 p-4 bg-dark bg-opacity-50 text-white">
                                    <h5 class="fw-bold">CLASS TIMETABLE</h5>
                                    <p class="small mb-1">View your club schedule</p>
                                    <div class="border-bottom border-3 border-danger w-25"></div>
                                </div>
                            </div>
                        </div>

                        <!-- CARD 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="position-relative overflow-hidden rounded">
                                <img src="https://images.unsplash.com/photo-1599058917765-a780eda07a3e?q=80&w=1200&auto=format&fit=crop"
                                    class="img-fluid w-100" style="height:320px; object-fit:cover;" alt="Try Us">

                                <div
                                    class="position-absolute bottom-0 start-0 w-100 p-4 bg-dark bg-opacity-50 text-white">
                                    <h5 class="fw-bold">TRY US</h5>
                                    <p class="small mb-1">Start your fitness journey</p>
                                    <div class="border-bottom border-3 border-danger w-25"></div>
                                </div>
                            </div>
                        </div>

                        <!-- CARD 3 -->
                        <div class="col-lg-4 col-md-12">
                            <div class="position-relative overflow-hidden rounded">
                                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1200&auto=format&fit=crop"
                                    class="img-fluid w-100" style="height:320px; object-fit:cover;"
                                    alt="Personal Training">

                                <div
                                    class="position-absolute bottom-0 start-0 w-100 p-4 bg-dark bg-opacity-50 text-white">
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
            <section class="py-5">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h1 class="fw-bold">OUR HEALTH CLUBS</h1>
                        <p class=" fs-5">
                            Push your fitness further with our mix of facilities and we'll support you with advice on
                            new and better ways to train.
                        </p>
                    </div>

                    <!-- Stats Cards -->
                    <div class="row g-4 justify-content-center text-center">

                        <!-- Students -->
                        <div class="col-6 col-md-3">
                            <div class="card stats-card shadow-sm border-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="fw-bold display-5 text-success">1232</h2>
                                    <p class="fs-5 mb-0">Students</p>
                                </div>
                            </div>
                        </div>

                        <!-- Courses -->
                        <div class="col-6 col-md-3">
                            <div class="card stats-card shadow-sm border-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="fw-bold display-5 text-primary">64</h2>
                                    <p class="fs-5 mb-0">Courses</p>
                                </div>
                            </div>
                        </div>

                        <!-- Events -->
                        <div class="col-6 col-md-3">
                            <div class="card stats-card shadow-sm border-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="fw-bold display-5 text-warning">42</h2>
                                    <p class="fs-5 mb-0">Events</p>
                                </div>
                            </div>
                        </div>

                        <!-- Trainers -->
                        <div class="col-6 col-md-3">
                            <div class="card stats-card shadow-sm border-0 h-100">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="fw-bold display-5 text-danger">24</h2>
                                    <p class="fs-5 mb-0">Trainers</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--Courses -->
            <section>
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-bold m-0">Available Courses</h3>
                        <div class="btn-group bg-white p-1 rounded shadow-sm">
                            <button class="btn btn-dark btn-sm px-3" id="btnMonthly"
                                onclick="setPrice('monthly')">Monthly</button>
                            <button class="btn btn-light btn-sm px-3" id="btnYearly"
                                onclick="setPrice('yearly')">Yearly</button>
                        </div>
                    </div>

                    <div class="row g-4">

                        <!-- CARD TEMPLATE (REUSED 12 TIMES) -->
                        <!-- 1 -->
                        <div class="col-12 col-md-3">
                            <div class="card course-card h-100 border-0 shadow-sm">
                                <span class="badge bg-danger position-absolute m-2">-30%</span>
                                <img src="https://images.unsplash.com/photo-1579758629938-03607ccdbaba?auto=format&fit=crop&w=800&q=80"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="fw-bold">Body Building</h5>
                                    <div class="text-warning mb-2">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <p class="text-muted small">Muscle growth & strength</p>
                                    <h4 class="fw-bold price" data-monthly="2999" data-yearly="19999">₹2999</h4>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <button class="btn btn-dark w-100 mb-2">Sign Up</button>
                                     <button class="btn btn-outline-dark w-100">Stripe</button>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="col-12 col-md-3">
                            <div class="card course-card h-100 border-0 shadow-sm">
                                <span class="badge bg-danger position-absolute m-2">-30%</span>
                                <img src="https://images.unsplash.com/photo-1558611848-73f7eb4001a1?auto=format&fit=crop&w=800&q=80"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="fw-bold">Weight Loss</h5>
                                    <div class="text-warning mb-2">⭐⭐⭐⭐⭐</div>
                                    <p class="text-muted small">Fat burn program</p>
                                    <h4 class="fw-bold price" data-monthly="2499" data-yearly="16999">₹2499</h4>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <button class="btn btn-dark w-100 mb-2">Razorpay</button>
                                    <button class="btn btn-outline-dark w-100">Stripe</button>
                                </div>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="col-12 col-md-3">
                            <div class="card course-card h-100 border-0 shadow-sm">
                                <span class="badge bg-danger position-absolute m-2">-30%</span>
                                <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?auto=format&fit=crop&w=800&q=80"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="fw-bold">Yoga</h5>
                                    <div class="text-warning mb-2">⭐⭐⭐⭐⭐</div>
                                    <p class="text-muted small">Flexibility & peace</p>
                                    <h4 class="fw-bold price" data-monthly="1999" data-yearly="12999">₹1999</h4>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <button class="btn btn-dark w-100 mb-2">Razorpay</button>
                                    <button class="btn btn-outline-dark w-100">Stripe</button>
                                </div>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="col-12 col-md-3">
                            <div class="card course-card h-100 border-0 shadow-sm">
                                <span class="badge bg-danger position-absolute m-2">-30%</span>
                                <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=800&q=80"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="fw-bold">CrossFit</h5>
                                    <div class="text-warning mb-2">⭐⭐⭐⭐⭐</div>
                                    <p class="text-muted small">High intensity workouts</p>
                                    <h4 class="fw-bold price" data-monthly="3499" data-yearly="21999">₹3499</h4>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <button class="btn btn-dark w-100 mb-2">Razorpay</button>
                                    <button class="btn btn-outline-dark w-100">Stripe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        </div>
       
    </main>
     <!-- Footer -->
          <footer class="p-4 bg-success mt-3 g-5 footer text-white">
        <div class="container">
            <div class="row">
          <div class="col-md-3 text-center">
             <h6 class="fw-bold text-uppercase">About Us</h6>
        <ul class="list-unstyled small mt-2">
          <li class="mb-0"> Company Background</li>
          <li class="mb-0">Careers</li>
          <li class="mb-0"> Press Room</li>
          <li class="mb-0">Reviews & Testimonials</li>
        </ul>
          </div>
           <div class="col-md-3 text-center">
              <h6 class="fw-bold text-uppercase">Membership</h6>
        <ul class="list-unstyled small">
          <li class="mb-0">Membership Options</li>
          <li class="mb-0">Member Benefits</li>
          <li class="mb-0">Corporate Membership</li>
          <li class="mb-0">FAQs</li>
        </ul>
          </div>
           <div class="col-md-3 text-center">
           <h6 class="fw-bold text-uppercase">Clubs</h6>
        <ul class="list-unstyled small">
          <li class="mb-0">Club Finder</li>
          <li class="mb-0">Club Operating Hours</li>
          <li class="mb-0">Get 1 Day Free Pass</li>
          <li class="mb-0">Club Facilities</li>
        </ul>
          </div>
           <div class="col-md-3 text-center">
           <h6 class="fw-bold text-uppercase">Customer Service</h6>
        <ul class="list-unstyled small">
          <li class="mb-0">Members Area</li>
          <li class="mb-0">FAQs</li>
          <li class="mb-0">Contact Us</li>
          <li class="mb-0">Membership Enquiry</li>
        </ul>
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
        </div>
    </footer>
    <script>
        const sidebar = document.getElementById("sidebar");
        const body = document.body;
        const overlay = document.getElementById("overlay");
        const toggleBtn = document.getElementById("toggleSidebar");

        toggleBtn.onclick = function () {
            if (window.innerWidth > 992) {
                // Desktop behavior
                sidebar.classList.toggle("collapsed");
                body.classList.toggle("sidebar-collapsed");
            } else {
                // Mobile behavior
                body.classList.toggle("sidebar-open");
            }
        };

        overlay.onclick = function () {
            body.classList.remove("sidebar-open");
        };

        function setPrice(type) {
            document.getElementById('btnMonthly').classList.toggle('btn-dark', type === 'monthly');
            document.getElementById('btnMonthly').classList.toggle('btn-light', type !== 'monthly');
            document.getElementById('btnYearly').classList.toggle('btn-dark', type === 'yearly');
            document.getElementById('btnYearly').classList.toggle('btn-light', type !== 'yearly');

            document.querySelectorAll(".price").forEach(p => {
                p.innerHTML = "₹" + p.dataset[type];
            });
        }
    </script>

</body>

</html>