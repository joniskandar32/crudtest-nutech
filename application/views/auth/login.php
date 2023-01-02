<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--Hey! This is the original version
of Simple CSS Waves-->
<!DOCTYPE html>
<html lang="id-ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_store_name(); ?></title>
    <link href="<?php echo get_theme_uri('custom/auth/login/css/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_theme_uri('custom/auth/login/css/fontawesome-all.css'); ?>" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

        body {
            margin: 0;
        }

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 48px;
        }

        p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size: 14px;
            color: #333333;
        }

        .header {
            position: relative;
            text-align: center;
            background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
            color: white;
        }

        .logo {
            width: 50px;
            fill: white;
            padding-right: 15px;
            display: inline-block;
            vertical-align: middle;
        }

        .inner-header {
            height: 65vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px;
            /*Fix for safari gap*/
            min-height: 100px;
            max-height: 150px;
        }

        .content {
            position: relative;
            height: 20vh;
            text-align: center;
            background-color: white;
        }

        /* Animation */

        .parallax>use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /*Shrinking for mobile*/
        @media (max-width: 768px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }

            .content {
                height: 30vh;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->

            <div class=" w3l-login-form">
                <h2>Login Akun</h2>
                <?php if ($flash_message) : ?>
                    <div class="flash-message">
                        <?php echo $flash_message; ?>
                    </div>
                <?php endif; ?>

                <?php if ($redirection) : ?>
                    <div class="flash-message">
                        Silahkan login untuk melanjutkan...
                    </div>
                <?php endif; ?>

                <?php echo form_open('auth/login/do_login'); ?>

                <div class=" w3l-form-group">
                    <label>Username:</label>
                    <div class="group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" value="<?php echo set_value('username', $old_username); ?>" class="form-control" placeholder="Username" minlength="4" maxlength="16" required>
                    </div>
                    <?php echo form_error('username'); ?>
                </div>
                <div class=" w3l-form-group">
                    <label>Password:</label>
                    <div class="group">
                        <i class="fas fa-unlock"></i>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <?php echo form_error('password'); ?>
                </div>
                <div class="forgot">
                    <!-- <?php echo anchor('auth/forget-password', 'Lupa password?'); ?> -->
                    <p><input type="checkbox" name="remember_me" value="1">Ingat saya</p>
                </div>
                <button type="submit">Login</button>
                <?php echo form_close(); ?>
            </div>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->

    <!--Content starts-->
    <div class="content flex">
        <p>Arif Muhammad | Nutech Integrasi </p>
    </div>
</body>

</html>
<!--Content ends-->