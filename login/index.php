<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
    background: #b2f6ff;
    font-family: sans-serif;
   }
   h2 {
    color: #000;
   }
   .login {
    padding: 1em;
    margin: 2em auto;
    width: 17em;
    background: #09b8ee;
    border-radius: 10px;
   }
   label {
    font-size: 10pt;
    color: #fff;
   }
   input[type="text"],
   input[type="password"],
   textarea {
    padding: 8px;
    width: 95%;
    background: #efefef;
    border: 0;
    font-size: 10pt;
    margin: 6px 0px;
   }
   .tombol {
    background: #b2f6ff;
    color: #000;
    border: 0;
    padding: 5px 15px;
    margin: 20px 0px;
   }
    </style>
</head>

<body>
    <br /> <br />
    <h2 class="text-center ">LOGIN ADMIN</h2>
    <div class="login">
        <br />
        <form action="login.php" method="post" onSubmit="return validasi()"  >
            <div>
                <label>Username:</label>
                <input type="text" name="username" id="username" placeholder="Namina saha?"/>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" id="password" placeholder="sandiana atuh mang"/>
            </div>
            <div class="text-center">
                <input type="submit" value="Login" class="tombol">
            </div>
            <p>do you have acount? <a href=""> Signup Now</a></p>
        </form>
    </div>
</body>
<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username != "" && password != "") {
            return true;
        } else {
            alert('Username dan Password harus di isi !');
            return false;
        }
    }
</script>

</html>