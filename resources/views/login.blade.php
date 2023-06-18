<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <img class="gbr-nav" src="../assets/db.jpg" alt="Logo Database" height="50px" width="50px" srcset="">
            <h4>Dations ITN Malang</h4>
        </div>
        <ul>
            <li><a href="/">Home</a></li>
        </ul>
    </nav>
</header>
<main>
    <br>
    <br>
    <br>
    <div class="flash-data" data-flashdata="{{ session()->get('pesan') }}"></div>
    <div class="box-login">
        <form action="/login/do_login" method="post">
            <div class="box-content">
                <center><h2>Login</h2></center>
                <div class="input-box">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email" placeholder="Input Username"  name="email" class="input_password" id="input">
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Input Password" name="password" class="input_pw" id="input">
                </div>
                <div class="show-pw">
                    <input type="checkbox" onchange="onChangePw()" name="show_pw" id="show_pw">&nbsp;<label for="show_pw">Show Password</label>
                </div>
                <br>
                <button type="submit" name="status" value="login" class="btn btn-login"><i class="fa fa-sign-in"></i> Login</button>
                <center><a href="register.php">Register</a></center>
            </div>

        </form>
    </div>
</main>
<script>
    var chk = document.getElementById("show_pw");
    var input_pw = document.querySelector(".input_pw");
    function onChangePw()
    {
        if(chk.checked)
        {
            input_pw.type = "text";
        } else {
            input_pw.type = "password";
        }
    }
    let data_flash = document.querySelector('.flash-data');
    if(data_flash.flash){
        alert(data_flash.flash);
    }
</script>
</body>
</html>
