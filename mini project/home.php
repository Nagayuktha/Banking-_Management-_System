<!DOCTYPE html>
<html lang="en">
<head>
    <title>YSVP BANK</title>
    <link rel="stylesheet" href="bank.css">
</head>
    <style>
    *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(nanu.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
 
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}
.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}
.content span{
    color: #ff7200;
    font-size: 65px
}
</style>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">YSVP BANK</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="home.html">ABOUT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="#">HELP</a></li>
                </ul>
            </div>

        </div> 
        <div class="content">
            <center><h1>WELCOME TO <br><span>YSVP BANK!</span></h1>
            <p class="par"><h2>Unlocking Financial Freedom: Your Bank, Your Management, Your Way!</h2></p>
        </center>
                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
<script>
    document.getElementById("home-link").addEventListener("click", function(event) {
    event.preventDefault(); 
    window.location.href = "home.php"; 
  });
</script>
</html>