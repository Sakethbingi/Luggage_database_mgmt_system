<!DOCTYPE html>
<html lang="en">
<head>
    <title>Global Express</title>
    <style>*{
        margin: 0;
        padding: 0;
    }
    
    .main{
        width: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(4a.jpg);
        background-position: center;
        background-size: cover;
        height: 100vh;
    }
    
    .navbar{
        width: 1200px;
        height: 75px;
        margin: auto;
    }
    
    .icon{
        width: 200px;
        float: left;
        height: 70px;
    }
    
    
    
    .menu{
        width: 400px;
        float: left;
        height: 70px;
        margin-left: 350px;
    }
    
    ul{
        float: left;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    ul li{
        list-style: none;
        margin-left: 92px;
        margin-top: 27px;
        font-size: 15px;
    
    }
    
    ul li a{
        text-decoration: none;
        color: rgb(245, 245, 245);
        font-family: Arial;
        font-weight: bold;
        transition: 0.4s ease-in-out;
    }
    
    ul li a:hover{
        color: #821212;
    }
    
    
    .form{
        width: 750px;
        height: 450px;
        background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0, 0, 0, 0.8)50%);
        position: absolute;
        top: 100px;
        left: 230px;
        transform: translate(0%,-5%);
        border-radius: 10px;
        padding: 25px;
    }
    
    .form h2{
        width: 220px;
        font-family: sans-serif;
        text-align: center;
        color: #f3f2f2;
        font-size: 22px;
        border-radius: 10px;
        margin: 2px;
        padding: 8px;
        margin-left: 230px;
        margin-top: -280px;
    }
    
    .form p{
        font-family: sans-serif;
        color:#f3f2f2;
        font-size: 18px;
        margin-left: 20px;
        padding: 8px;
        letter-spacing: 1.2px;
        line-height: 30px;
        margin-top: 0px;
    
    
    }
    
    .form img{
        width: 300px;
        height: 160px;
        margin-top: 130px;
        margin-left: 440px;
    }</style>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"><img src="l1.jpg.png" width="80" height="80"></h2>
            </div>

            <div class="menu">
                <ul>
                <li><a href="http://localhost/luggage/first.php">HOME</a></li>
                    <li><a href="http://localhost/luggage/about.php">ABOUT</a></li>
                    <li><a href="http://localhost/luggage/services.php">SERVICES</a></li>
                    <li><a href="http://localhost/luggage/login.php">LOGIN</a></li>
                </ul>
            </div>
                <div class="form">
                    <div class="img">
                        <img src="logo.jpg" >
                    </div>
                    <h2>About Us</h2>
                    <p >Global Express is a exclusive web-site <br>for luggage import and export to various<br> countries.<br><br> Our aim is to provide the user a<br> user-friendly interface where one can <br>manage data of this business completely <br>online in a database with great ease.<br><br> This application is developed by<br> B.SAKETH, a student of TKRCET, <br>under the guidance of Mrs. B. Chandini, Asst.prof., CSD.</p>
                    
                </div>
                

            

        </div>
    </div>
    
    
</body>
</html>