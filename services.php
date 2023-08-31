<!DOCTYPE html>
<html lang="en">
<head>
    <title>Global Express</title>
    <style>
        *{
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
.pack img{
    margin-left: 100px;
    margin-top: 100px;
}

.form{
    width: 900px;
    height: 475px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0, 0, 0, 0.8)50%);
    position: absolute;
    top: 90px;
    left: 170px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #f3f2f2;
    font-size: 26px;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
    margin-left: 300px;
    margin-top: px;
}

.form p{
    font-family: sans-serif;
    color:#f3f2f2;
    font-size: 18px;
    margin-left: 20px;
    padding: 8px;
    letter-spacing: 1.2px;
    line-height: 30px;
    margin-top: -420px;
}
.pack{
    margin-left: 500px;
    margin-top: -95px;
}
.pick{
    margin-left: 750px;
    margin-top: -134px;
}
.transport{
    margin-left: 600px;
    margin-top: 10px;
}
.deliver{
    margin-left: 750px;
    margin-top: -134px;
}
.track{
    margin-left: 675px;
    margin-top: 10px;
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
            
            <div class="form">
                
                <h2>Services</h2>
                <div class= "pack"><img src="packing.png" height= "130", width = "130" ></div>
            <div class= "pick"><img src="shifting.jpg" height= "130", width = "130"></div>
            <div class= "transport"><img src="transporting.png"height= "130", width = "130" ></div>
            <div class= "deliver"><img src="delivery.png"height= "130", width = "130" ></div>
            <div class= "track"><img src="track.jpg"height= "130", width = "130" ></div>
                <p>Global Express is designed to help people with <br>import and export of their luggage when ever they <br>move around the world or if they wish to courier<br> any luggage to their family and friends in foreign. <br><br> We provide a great service in importing and <br>exporting luggage. The luggage will be packed properly <br>then picked up by our staff. Now we transport these<br> across sea through air and sea ways. After reaching the<br> destination we safely deliver the luggage with most care. <br>Our staff will be constantly tracking the luggage until<br> it is delivered and make customers happy.</p>
            </div>
            

            

        </div>
    </div>
    
    
</body>
</html>