<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration - Ultrakonstruct Supply and Solutions Inc.</title>
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #1b2021">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container-sm shadow p-4 mb-3 bg-body rounded" style="max-width: 500px;">
        <p class="m-3 text-center">Create an Account</p>
        
        <!-- Name Input -->
        <div class="input-group flex-nowrap mb-3">
            <input type="text" class="form-control" id="txt_Name" placeholder="Full Name" required>
        </div>

        <!-- Email Input -->
        <div class="input-group flex-nowrap mb-3">
            <input type="email" class="form-control" id="txt_Email" placeholder="E-mail" required>
        </div>

        <!-- Password Input -->
        <div class="input-group flex-nowrap mb-3">
            <input type="password" class="form-control" id="txt_Password" placeholder="Password" required>
        </div>

        <!-- Role Selection (Contractor or Supplier) -->
        <div class="mb-3 text-center">
            <label class="form-label">Select Role:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="role" id="roleContractor" value="Contractor" required>
                <label class="form-check-label" for="roleContractor">Contractor</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="role" id="roleSupplier" value="Supplier" required>
                <label class="form-check-label" for="roleSupplier">Supplier</label>
            </div>
        </div>

        <!-- Register Button -->
        <div class="d-grid">
            <button class="btn btn-dark" type="submit">Register</button>
        </div>

        <!-- Footer Text and Links -->
        <p class="m-3 text-center">Already have an account? <a href="Login.php">Log in</a></p>
        <p class="text-center">By registering, you agree to our 
            <a href="#">Privacy Policy</a>
        </p>
    </div>
</body>
</html>
