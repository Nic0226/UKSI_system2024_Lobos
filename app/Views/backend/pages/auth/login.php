<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ultrakonstruct Supply and Solutions Inc.</title>
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh; /* Full height of the viewport */
            display: flex;
            flex-direction: column; /* Allows for vertical alignment */
            justify-content: center; /* Aligns content in the center */
            background-color: #1b2021;
        }
        .container {
            margin-bottom: 20px; /* Adds some space from the bottom */
        }
        img {
            max-width: 100%; /* Makes the image responsive */
            height: auto; /* Maintains aspect ratio */
        }
    </style>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Centered Image at the top of the page -->

    <div class="container-sm shadow p-4 mb-3 bg-body rounded" style="max-width: 500px;">
        <div class="d-flex justify-content-center mb-3">
            <img src="<?= base_url() ?>/UKSI_Logo.png" alt="Company Logo" style="width: 300px; height: 300px"> <!-- Adjust the path as necessary -->

        </div>
        <p class="m-3 text-center">Welcome to Ultrakonstruct Supply and Solutions Inc.</p>
        <?php $validation = \Config\Services::validation(); ?>
        <form action="<?= site_url('admin/login') ?>" method="POST">
        <?= csrf_field() ?>
        <?php if(!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('fail') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
            <!-- Email and Password Input -->
            <div class="d-grid gap-2 mb-3">
                <div class="input-group flex-nowrap">
                    <input type="email" class="form-control" id="txt_Email" placeholder="E-mail" name="login_id" value="<?= set_value('login_id') ?>">
                </div>
                <?php if($validation->getError('login_id')): ?>
                    <div class="d-block text-danger" style="margin-top:-25px;margin-bottom:15px;">
                        <?= $validation->getError('login_id') ?>
                    </div>
                <?php endif; ?>
                <div class="input-group flex-nowrap">
                    <input type="password" class="form-control" id="txt_Password" placeholder="Password" name="password" value="<?= set_value('password') ?>">
                </div>
                <?php if($validation->getError('password')): ?>
                    <div class="d-block text-danger" style="margin-top:-25px;margin-bottom:15px;">
                        <?= $validation->getError('password') ?>
                    </div>
                <?php endif; ?>
                <a href="#">Forgot Password?</a>
            </div>


            <!-- Continue Button -->
            <div class="d-grid">
                <button class="btn btn-dark" type="submit">Continue</button>
            </div>

        </form>
    </div>
</body>
</html>
