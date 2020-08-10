<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lelang.ID - Login</title>
    <link rel="stylesheet" href="css.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<style>
    .title{
        width: 50%;
        height: 695px;
        padding-top: 100px;
    }
    .formulir{
        width: 50%;
    }
    main div{
        float: left;
        color: w;
        font-style: italic;
    }
    h1{
        font-style:italic;
    }
    .bg-succes h1{
        float: left;
        margin-left: 150px;
        margin-top: 50px;
    }
    .form main{
        margin-left: 150px;
        margin-right: 150px;
        float: none;
    }
    .txtb{
        width: 100%;
    }
    .form{
        margin-top: 100px;
    }
    .txtb input{
        width: 95%;
    }
    .btn{
        margin-top: 120px;
        width: 100%;
    }
    a{
        color: black;
    }
    a:hover{
        color: blue;
        font-weight: bold;
    }
    .active{
        color: blue;
    }
</style>
<body>
    <main>
        <div class="title bg-primary">
            <center><img src="img/logoo.png" alt="">
            <h1 class="text-white font-weight-bold">Lelang.ID</h1></center>
        </div>
        <div class="formulir">
            <div class="bg-succes">
                <a href="login.php" class="active"><h1>Login</h1></a>
                <a href="rigester.php"><h1>Register</h1></a>
            </div>
            <div class="form">
                <main>
                <div class="txtb">
                    <input type="text" name="username" required="" autocomplete="off" autofocus="">
                    <span data-placeholder="Username"></span>
                </div>
                <div class="txtb">
                    <input type="password" name="password" id="myinput" required="" >
                    <span data-placeholder="Password"></span>
                    <span class="eye" onclick="myfunction()">
                        <i id="hiden1" class="fa fa-eye"></i>
                        <i id="hiden2" class="fa fa-eye-slash"></i>
                    </span>
                </div>
                <div class="btn">
                    <button type="submit">LOGIN</button>
                </div>
                </main>
            </div>
        </div>
            <!-- <div id="wrapper">
                <form action="logincontroller.php" method="POST" class="login-form">
                    <div class="login">
                        <h1>Login</h1>
                    </div>
                    <div class="txtb">
                        <input type="text" name="username" required="" autocomplete="off" autofocus="">
                        <span data-placeholder="Username"></span>
                    </div>
                    <div class="txtb">
                        <input type="password" name="password" id="myinput" required="" >
                        <span data-placeholder="Password"></span>
                        <span class="eye" onclick="myfunction()">
                            <i id="hiden1" class="fa fa-eye"></i>
                            <i id="hiden2" class="fa fa-eye-slash"></i>
                        </span>
                    </div>
                    <button type="submit">LOGIN</button>
                </form>
            </div> -->
        </div>
    </main>
</body>
<?php if(isset($_GET['pesan'])){ ?>
    <div class="error">
        <label>Oopps... <?php echo $_GET['pesan'];?></label>
    </div>
<?php } ?>

<script>
    function myfunction(){
        var x = document.getElementById("myinput");
        var y = document.getElementById("hiden1");
        var z = document.getElementById("hiden2");

        if(x.type == 'password'){
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else{
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script>
<script type="text/javascript">
    $(".txtb input").on("focus", function(){
        $(this).addClass("focus");
    });
    $(".txtb input").on("blur", function(){
        if($(this).val() == ""){
            $(this).removeClass("focus");
        }
    });
</script>
</html>