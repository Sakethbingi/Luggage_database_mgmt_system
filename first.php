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
    
    
    .content{
        width: 1200px;
        height: auto;
        margin: auto;
        color: rgb(208, 202, 202);
        position: relative;
    }
    
    .content .par{
        font-family: 'Arial';
        font-size: 18px;
        padding-left: 20px;
        margin-top: 0%;
        letter-spacing: 1px;
    }
    
    .content h1{
        font-family: 'Times New Roman';
        font-size: 70px;
        padding-left: 20px;
        margin-top: 9%;
        letter-spacing: 2px;
    }
    
    .content h2{
        padding-left: 20px;
        padding-bottom: 25px;
        color: #000000;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        letter-spacing: 1.2px;
        line-height: 30px;
    }
    
    
    .content .cn{
        width: 160px;
        height: 40px;
        background: #850707;
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
        color: rgb(255, 254, 254);
        transition: .3s ease;
        font-weight: bold;
    }
    
    .cn:hover{
        background-color: rgb(255, 255, 255);
        color: black;
    }
    
    .content .cn a:hover{
        text-decoration: none;
        color: rgb(0, 0, 0);
    }
    
    .content span{
        color: #9b0a0a;
        font-size: 70px;
    }
    
    </style>
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

            

        </div> 
        <div class="content">
            <h1><span>GLOBAL</span> EXPRESS <br></h1>
            <h2>HELPS YOU TO REACH WORLD</h2>
            <p class="par">We deliver your luggage to any corner of the world with great ease and atmost care. </p>
            <br>
            <button class="cn"><a href="http://localhost/luggage/login.php">SIGN IN</a></button>
        </div>
    </div>
</body>
</html>