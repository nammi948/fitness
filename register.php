<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modern Auth System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.85)),
                url('https://images.unsplash.com/photo-1579758629938-03607ccdbaba?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Inter', sans-serif;
        }

        .auth-container {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            color: white;
            transition: all 0.3s ease;
        }

        .form-label {
            font-weight: 500;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .form-control,
        .form-select {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white !important;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .form-control:focus,
        .form-select:focus {
            background: rgba(0, 0, 0, 0.3);
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.25);
        }

        .btn-primary {
            background: #2563eb;
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: transform 0.2s;
        }

        .btn-primary:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }

        .toggle-link {
            color: #60a5fa;
            text-decoration: none;
            font-weight: 500;
            cursor: pointer;
        }

        .toggle-link:hover {
            color: #93c5fd;
            text-decoration: underline;
        }

        .auth-section {
            display: none;
        }

        .auth-section.active {
            display: block;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">

                <div class="auth-container">

                    <div id="login-sec" class="auth-section active">
                        <h2 class="text-center mb-1">Welcome Back</h2>
                        <p class="text-center text-white-50 mb-4">Enter your credentials to access your account</p>
                        <form method="post" action="login.php">
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="name@company.com" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="••••••••" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="••••••••" name="password" required>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rem">
                                    <label class="form-check-label small" for="rem">Remember me</label>
                                </div>
                                <span class="toggle-link small" onclick="showSection('forgot-sec')">Forgot
                                    Password?</span>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" name="login">Sign In</button>
                        </form>
                        <p class="text-center mt-4 mb-0 small">
                            Don't have an account? <span class="toggle-link" onclick="showSection('reg-sec')">Register
                                here</span>
                        </p>
                    </div>

                    <div id="reg-sec" class="auth-section">
                        <h2 class="text-center mb-1">Create Account</h2>
                        <p class="text-center text-white-50 mb-4">Join our community today</p>
                        <form method="POST" action="registration.php">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" rows="2" name="address" required></textarea>

                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">State</label>
                                    <select name="state" class="form-select" required>
                                        <option value="">-- Select State --</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control" name="pincode" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-2" name="save">Create Account</button>
                        </form>
                        <p class="text-center mt-4 mb-0 small">
                            Already a member? <span class="toggle-link" onclick="showSection('login-sec')">Login
                                here</span>
                        </p>
                    </div>

                   <div id="forgot-sec" class="auth-section">
    <h2 class="text-center mb-1">Reset Password</h2>
    <p class="text-center text-white-50 mb-4">Reset your password</p>

    <form action="forgot.php" method="POST">
        <div class="mb-4">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control"
                   placeholder="Enter your registered email"
                   name="email" required>
        </div>

        <div class="mb-4">
            <label class="form-label">New Password</label>
            <input type="password" class="form-control"
                   placeholder="Enter your new password"
                   name="password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100" name="reset">
            Reset
        </button>
    </form>

    <p class="text-center mt-4 mb-0 small">
        Back to <span class="toggle-link" onclick="showSection('login-sec')">Login</span>
    </p>
</div>


                </div>
            </div>
        </div>
    </div>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.auth-section').forEach(section => {
                section.classList.remove('active');
            });
            // Show requested section
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
</body>

</html>