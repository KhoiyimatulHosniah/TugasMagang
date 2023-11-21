<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Butanol Application</title>
</head>
 <style>
    body{
    background-image:url('/background/background landing.png');
    margin:0px;
    padding:0px;
    font-family: "Kanit";
}
 
ul{
    list-style:none;
}
 
a{
    text-decoration:none;
}
 
section{
    width:100%;
    height:95vh;
    position: relative;
}
 
nav{
    display: flex;
    justify-content: space-between;
    align-items:center;
    height:60px;
    background-color:#FFFFFF;
    box-shadow:2px 2px 12px rgba(0,0,0,0.2);
    padding:0px 5%;
     
}
nav ul{
    display: flex;
}
  
nav ul li a{
    margin:20px;
    color:#505050;
    font-size: 15px;
    font-weight:700;
}
        h1,
        .h1 {
            color: #212121;
            text-align: center;
            font-family: "kanit";
            font-size: 55px;
        }
        h2,
        .h2 {
            color: #344767;
            font-style: italic;
            font-size: 45px;
        }
.logo{
    margin-top: 15px;
    margin-left: 0px;
    justify-content:space-between;
}
 
.active{
    color:#2d2a2a;
    font-weight:bold;
}
 
.text-container p{
    line-height: 0px;
    margin: 55px 0px 25px;
}
 
.text-container{
    position: absolute;
    left: 13%;
    top: 42%;
    transform: translate(-13%, -42%);
}
 

 

.model{
    height: 560px;
    position: absolute;
    bottom: 60px;
    left: 80%;
    transform: translateX(-70%);p
}
 
.layanan{
    height:500px;
    background-color:#FFFFFF;
    padding: 2% 10% 0px 10%;
    text-align: center;
    margin: auto;
}

.layanan-text p:nth-child(1){

    font-weight:bold;
    color:#1d1c1c;
    font-size:30px;
    line-height:0px;
}
 
.layanan-text{
    margin:70px 0px;
}
 
.layanan-col{
    display:flex;
    margin: 100px;
    justify-content:space-between;
}
 
.layanan-1,.layanan-2{
    flex-basis: 44%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
    background: rgba(96, 137, 183, 0.726);
    padding: 25px;
    margin-right: 55px;
    cursor: pointer;
    display: flex;
    width: 500px;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2);   
}
 
.layanan-1:hover {
            background-color: #1e81c3; 
        }

.layanan-2:hover {
            background-color: #1e81c3; 
        }
.layanan-col img{
    height: 70px;
    margin-left: 120px;
    margin-top: 20px;
    border-radius: 50%;
}
 
.layanan-col h3{
    text-align: center;
    margin-left: 100px;
    font-size: 20px;
    color: #000;
}

 
footer p{
    font-family: "Kanit";
    font-size: 16px;
    color:#7e7d7d;
    width:600px;
    text-align: center;
}
 
footer{
    height:70px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    background-color: #191919;
}
 

.copyright{
    color:#565555;
    font-size: 15px;
    position: absolute;
    left:50%;
    bottom:10px;
    transform: translateX(-50%);
}

 </style>
<body>
    <section>
        <!--- navigation --->
        <nav>
            <!--- logo --->
            <div class="logo">
                <a href="/"><img src="asset/images/logo4.png" ></a>
            </div>
            <!--- menu --->
            <ul>
                <li><a href="#beranda" >Beranda</a></li>
                <li><a href="#layanan">Layanan</a></li>
            </ul>
        </nav>
 
        <!--- text --->
        <div class="text-container" id="beranda">
            <h1 >Selamat Datang di </h1>
        <h2>BUTANOL Application</h2>
            
        <!-- model -->
        <img alt="model" class="model" src="">  
    </section>
 
    <!--layanan-->
    <div class="layanan" id="layanan">
        <!--text-->
        <div class="layanan-text ">
            <h1>Layanan</h1>
        </div>        
 
        <div class="layanan-col">
            <div class="layanan-1" onclick="handleClick()">
                <a href="/landingpage3">
                <div>
                    <img src="asset/images/notulen.png">
                    <h3>Notulensi</h3>
                </div></a>
            </div>
            
            <div class="layanan-2" onclick="handleClick()">
                <a href="/landingpage3">
                <div>
                    <img src="asset/images/resepsionis.png">
                 <h3>Resepsionis</h3>
                    </div></a>
            </div>
        </div>
    </div>
 
    <!-- footer -->
    <footer>
        
        <!--copyright-->
        <p class="copyright">&copy; {{ date('Y') }} PKLpolije. Dinas Komunikasi dan Informatika.</p>
    </footer>
 
</body>
 
</html>