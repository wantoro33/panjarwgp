<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Panjar Perkara PA Waingapu - Login</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
    <div class="screen-1">
        <div style="text-align: center;">
            <img src="<?php echo base_url(); ?>/public/images/logo-pa-waingapu.png" alt="logo pa waingapu" width="103" height="128">
        </div>
        <div style="text-align: center; padding-bottom: 15px;">
            <h4>Kalkulator Panjar Biaya Perkara</h4>
            <h4>PA Waingapu</h4>
        </div>
        <div class="email">
            <label for="username">User Name</label>
            <div class="sec-2">
            <ion-icon name="person-outline"></ion-icon>
            <input type="text" name="username" placeholder="Username"/>
            </div>
        </div>
        <div class="password">
            <label for="password">Password</label>
            <div class="sec-2">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input class="pas" type="password" name="password" placeholder="********" id="inputPass"/>
            <ion-icon class="show-hide" name="eye-outline" onclick="showPassword()"></ion-icon>
            </div>
        </div>
        <button class="login">Login </button>
    </div>
    <!-- partial -->
</body>
</html>

<script>
    function showPassword() {
        var x = document.getElementById("inputPass");
        if (x.type === "password") {
            x.type = "text";
            } else {
            x.type = "password";
        }
    } 
</script>