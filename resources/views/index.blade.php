<!DOCTYPE html>
            <html>
                <head>
                    <title>LEARNK</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" type="text/css" href="asset/CSS/index.css">  
                    <link class="ikon" rel="icon" type="image/jpg" href="asset/img/logoo.png">   
                    <style>
                        .intro-animation {
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: #000000;
              display: flex;
              justify-content: center;
              align-items: center;
              z-index: 9999;
              animation: introFadeOut 2s ease-in-out forwards;
            }
            
            .intro-text {
                display: flex;
              font-size: 5rem;
              font-weight: bold;
              color: (71, 18, 107);
              text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
              animation: introText 1s ease-in-out forwards;
              opacity: 0;
              position: absolute;
              margin-top: 300px;
                
            }
            
            @keyframes introText {
              0% {
                transform: translateY(-80px);
                opacity: 0;
              }
              100% {
                transform: translateY(0);
                opacity: 1;
              }
            }
            
            @keyframes introFadeOut {
              0% {
                opacity: 1;
              }
              90% {
                opacity: 1;
              }
              100% {
                opacity: 0;
                visibility: hidden;
              }
            }

            .gallery-header {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(allcars2.png);
    background-size: cover;
    background-position: center;
    height: 80px; 
    display: flex;
    justify-content: center;
    background-repeat: no-repeat;
    align-items: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
}

.gallery-header h1 {
    font-size: 30px; 
    margin: 0;
    position: absolute;
    bottom: 1000px;
    z-index: 999;
    color: azure;
    left: 890px;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


body {
    position: relative;
    background-color: rgb(0, 0, 0);
    overflow-x: hidden;
}

nav {
    position: relative;
    width: 100%;
    height: 125px;
    background: linear-gradient(
        to bottom, 
        rgba(71, 18, 107, 0.9),  
        rgba(71, 18, 107, 0.3)   
    );
    display: flex;
    align-items: center;
    justify-content: flex-start; 
    padding: 0 20px; 
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .1);
}

nav .logo {
    width: 120px;
    height: auto;
    margin-right: 600px;
}

.nav-links {
    display: flex;
    justify-content: center;
    width: 100%;
}

nav a {
    font-size: 20px;
    text-transform: capitalize;
    color: aliceblue;
    text-decoration: none;
    line-height: 50px;
    z-index: 1;
    display: inline-block;
    text-align: center;
    padding: 0 15px;
    margin: 0 5px;
    transition: 0.3s ease;
    left: 10px;
}

nav .animation {
    position: absolute;
    height: 50px;
    top: 37.5px;
    z-index: 0;
    background: white;
    transition: all 0.5s ease 0s;
    border-radius: 10px;
}

nav a:nth-child(2) { color: rgb(70, 24, 115); }
nav:hover a:nth-child(2) { color: white; }
nav a:hover { color: rgb(70, 24, 115); }
nav a:nth-child(2):hover { color: rgb(70, 24, 115) !important; }

nav a:nth-child(2) { width: 100px; }
nav a:nth-child(3) { width: 100px; }
nav a:nth-child(4) { width: 130px; }
nav a:nth-child(5) { width: 110px; }

nav a:nth-child(3):hover ~ .animation,
nav a:nth-child(4):hover ~ .animation,
nav a:nth-child(5):hover ~ .animation {
    background-color: aliceblue;
}

nav .start-home, nav a:nth-child(2):hover ~ .animation {
    width: 100px;
    left: calc(100% - 1152px);
    background-color: rgb(255, 255, 255);
}

nav a:nth-child(3):hover ~ .animation { left: calc(100% - 1040px);}
nav a:nth-child(4):hover ~ .animation { left: calc(100% - 917px); }
nav a:nth-child(5):hover ~ .animation { left: calc(100% - 789px); }

h1, .typejs{
    position: absolute;
  color:  rgb(70, 24, 115);
  display: flex;
  justify-content: center;
  bottom: 620px;
  left: 1000px;
  z-index: 3;
  word-spacing: 0.5px;
  font-size: 40px;

}
mark{
    background-color: blueviolet;
    border-radius: 5px;
    color: white;
}
.ketikanotomatis{
    color: white;
}


.Mekleren1 {
    width: 800px;
    height: auto;
    border-radius: 40px;
    margin-top: 100px;
    margin-left: 100px;
}

.content-wrapper { 
    position: absolute; 
   
}

.overlaytext {
    position: absolute;
    z-index: 1;
    color: white;
    word-spacing: 5px;
    bottom: 105px;
    left: 110px;
    display: flex;
    gap: 10px;
}

.sepan1 {
    margin-left: 8px;
    color: rgb(70, 24, 115);
}

.image-container1 { font-size: 40px; }

.image-container2 {
    color: white;
    position: absolute;
    bottom: 83px;
    margin-left: 110px;
}

.image-container3 {
    color: white;
    position: absolute;
    bottom: 63px;
    margin-left: 110px;
}

.image-container4 {
    color: white;
    position: absolute;
    bottom: 43px;
    margin-left: 110px;
}

.image-container1, .image-container2, .image-container3, .image-container4 {
    position: relative;
    margin-bottom: -14px;
    left: 8px;
}

.highlight {
    align-self: flex-end;
    margin-top: 150px;
    margin-bottom: 70px;
    margin-left: 850px;
    color: white;
    text-transform: capitalize;
}

.pagani-container {
    position: relative; 
    width: 100%;
    margin-top: 50px;
    z-index: 2;  
    opacity: 1;
    
}

.pagani1 {
    display: block;
    margin-top: 2vh;
    max-width: 500px;
    height: auto;
    border-radius: 20px 20px 40px 40px;
    margin-left: 120px;
    position: relative;  
    z-index: 3;  
   
}


.persegi1 {
    position: absolute;
    width: 501.2px;
    height: 120px;
    background-color: rgba(71, 18, 107);
    border-radius: 0 0 20px 20px;
    margin-left: 118px;
    bottom: -82px;
    z-index: 1; 
}
.overlaytext2{
    position: absolute;
    z-index: 1;
    color: white;
    word-spacing: 2px;
    left: 110px;
    display: flex;
   
}

.h4-2{
   text-transform: capitalize;
   margin-left: 18px;
   margin-top: 8px;
   font-size: 21px;
   font-style: bold;
}
.h5-1{
position: absolute;
font-size: 18px;
margin-top: 50px;
left: 20px;
font-style: italic;
}
.h5-2 {
    position: absolute;
    display: flex;
    font-size: 17px;
    margin-top: 50px;
    left: 405px;
    font-style: italic;
    gap: 10px; 
    white-space: nowrap ;
}
.amg-container {
    position: relative; 
    width: 100%;
    margin-top: -260px;
    z-index: 2;  
    margin-left: 600px;
    opacity: 2;
  }
.amgone {
    display: block;
    margin-top: 2vh;
    max-width: 500px;
    height: auto;
    border-radius: 20px 20px 40px 40px;
    margin-left: 120px;
    position: relative;  
    z-index: 3;  
   
}


.persegi2 {
    position: absolute;
    width: 501.2px;
    height: 120px;
    background-color: rgba(71, 18, 107);
    border-radius: 0 0 20px 20px;
    margin-left: 118px;
    bottom: -82px;
    z-index: 1; 
}
.overlaytext3{
    position: absolute;
    z-index: 1;
    color: white;
    word-spacing: 2px;
    left: 110px;
    display: flex;
   
}

.h4-3{
   text-transform: capitalize;
   margin-left: 18px;
   margin-top: 8px;
   font-size: 21px;
   font-style: bold;
}
.h5-3{
position: absolute;
font-size: 18px;
margin-top: 50px;
left: 20px;
font-style: italic;
}
.h5-4 {
    position: absolute;
    display: flex;
    font-size: 17px;
    margin-top: 50px;
    left: 405px;
    font-style: italic;
    gap: 10px; 
    white-space: nowrap ;
}

.bugatti-container {
    position: relative; 
    width: 100%;
    margin-top: -260px;
    z-index: 2;  
    margin-left: 600px;
    opacity: 1;
}
.bugatti {
    display: block;
    margin-top: 104vh;
    max-width: 500px;
    height: auto;
    border-radius: 20px 20px 40px 40px;
    margin-left: 120px;
    position: relative;  
    z-index: 3;  
    margin-left: 77.5vh;
   
}


.persegi3 {
    position: absolute;
    width: 501.2px;
    height: 130px;
    background-color: rgba(71, 18, 107);
    border-radius: 0 0 20px 20px;
    margin-left: 738px;
    bottom: -82px;
    z-index: 1; 
}
.overlaytext4{
    position: absolute;
    z-index: 1;
    color: white;
    word-spacing: 2px;
    left: 730px;
    display: flex;
   
}

.h4-4{
   text-transform: capitalize;
   margin-left: 18px;
   margin-top: 8px;
   font-size: 21px;
   font-style: bold;
}
.h5-5{
position: absolute;
font-size: 18px;
margin-top: 50px;
left: 20px;
text-transform: capitalize;
}
.h5-6{
    position: absolute;
    display: flex;
    font-size: 17px;
    margin-top: 50px;
    left: 405px;
    font-style: italic;
    gap: 10px; 
    white-space: nowrap ;
}

.cars-market{
    color: white;
    position: absolute;
    bottom: -300px;
    left: 850px;
}
.garis{
    color: blueviolet;
    border: 1px solid blueviolet !important;
    width: 1100px;
    position: absolute;
    bottom: -390px;
    z-index: 2;
    left: 380px ;

}
.persegi4{
    position: absolute;
    width: 375px;
    height: 550px;
    background-color: rgba(71, 18, 107);
    z-index: 7;
    bottom: -1100px;
    left: 175px;
    border-radius: 20px;
}

.jermanflag{
    width: 300px;
    height: 175px;
    position: absolute;
    left: 40px;
    bottom: 360px;
    border-radius: 10px;
}
.mercy{
    position: absolute;
    width: 85px;
    height: 85px;
    bottom: 200px;
    left: 10px;
}
.Maybach{
    position: absolute;
    width: 140px;
    height: 100px;
    bottom: 195px;
    left: 110px;
}
.bmw{
    position: absolute;
    width: 180px;
    height: 100px;
    bottom: 195px;
    left: 220px;
}
.brabus{
    position: absolute;
    width: 180px;
    height: 180px;
    bottom: -1px;
    left: -40px;
}
.poce{
    position: absolute;
    width: 200px;
    height: 90px;
    bottom: 40px;
    left: 80px;
}
.audi{
    position: absolute;
    
    width: 120px;
    height: 80px;
    bottom: 50px;
    left: 240px;
}
.kotak1{
    width: 300px;
    height: 300px;
    position: absolute;
}

.persegi6{
    position: absolute;
    width: 375px;
    height: 550px;
    background-color: rgba(71, 18, 107);
    z-index: 7;
    bottom: -1100px;
    left: 775px;
    border-radius: 20px;
}

.italyflag{
    width: 300px;
    height: 175px;
    position: absolute;
    left: 40px;
    bottom: 360px;
    border-radius: 10px;
}
.Ferrari{
    position: absolute;
    width: 85px;
    height: 85px;
    bottom: 200px;
    left: 10px;
}
.Lamborghini    {
    position: absolute;
    width: 140px;
    height: 120px;
    bottom: 195px;
    left: 110px;

}
.Pagani2{
    position: absolute;
    width: 180px;
    height: 100px;
    bottom: 195px;
    left: 220px;
}
.brabus{
    position: absolute;
    width: 180px;
    height: 180px;
    bottom: -1px;
    left: -40px;
}
.poce{
    position: absolute;
    width: 200px;
    height: 90px;
    bottom: 40px;
    left: 80px;
}
.audi{
    position: absolute;
    
    width: 120px;
    height: 80px;
    bottom: 50px;
    left: 240px;
}

.kotak{
    width: 300px;
    height: 300px;
    position: absolute;
}

                    </style>
                </head>
                <body>
                   
                    
                    <div class="intro-animation">
                        <h1 class="intro-text">Davin Autobahn</h1>
                      </div>
                        <nav>
                        <img class="logo" src="logoo.png" alt="logo">
                            <a href="#">HOME</a>
                            <a href="page2.html">CARS</a>
                            <a href="#">GALLERY</a>
                            <a href="#">ABOUT</a>
                            <div class="animation start-home"></div>
                        </nav>
                        <div class="gallery-header">
                            <h1>HOME</h1>
                        </div>
                        <div class="jsketik">
                            <h1 class="typejs"><mark>Davin Autobahn</mark>&nbsp;&nbsp;&nbsp;<span class="ketikanotomatis">The Best Dealer In The World</span></h1>
                    </div>
                    <div class="content-wrapper">
                        <div class="image-container1">
                    <img class="Mekleren1" src="Mekleren1.webp" alt="Mekleren1 image">
                    <div class="overlaytext">
                        <h4 class="h4-1">about</h4><h3>Davin<span class="sepan1">Autobahn</span> </h3></div>
                    </div>
                    <div class="image-container2">
                        <h5>We pride ourselves on working with only
                            the finest, most prestigious car brand in the World. 
                            </h5>
                    </div>
                    <div class="image-container3">
                        <h5>Our portfolio includes the likes of Bugatti, Ferrari, Lamborghini, Mercedes-Benz,Rolls Royce, McLaren and many more.
                            </h5>
                        </div>
                    <div class="image-container4">
                        <h5>With such an extensive range of luxury yehicles, we're confident that we can help you find the car of your dreams.</h5>
                    </div>
                    <div class="highlight">
                <h2>highlight stock</h2>
              

            </div>
            <div class="pagani-container">
                <img class="pagani1" src="paganihuayracb.webp" alt="paganihuayracb">
                <div class="persegi1"></div>
                <div class="overlaytext2">
                    <h4 class="h4-2">pagani huayra carbon edition</h4>
                    <h5 class="h5-1">3.105.000 USD</h5>
                    <h5 class="h5-2">2023 | 0 Km</h5>
                </div>
            </div>

            <div class="amg-container">
                <img class="amgone" src="amgone.webp" alt="amgone">
                <div class="persegi2"></div>
                <div class="overlaytext3">
                    <h4 class="h4-3">Mercedes-Benz Amg One</h4>
                    <h5 class="h5-3"> 4.873.027</h5>
                    <h5 class="h5-4">2012 | 0 Km</h5>
                </div>
            </div>
                    </div>

                    <div class="bugatti-container">
                        <img class="bugatti" src="bugattipursport.webp" alt="bugatti">
                        <div class="persegi3"></div>
                        <div class="overlaytext4">
                            <h4 class="h4-4">Bugatti Chiron Pur Sport</h4>
                            <h5 class="h5-5"> Ask for price</h5>
                            <h5 class="h5-6">2013 | 0 Km</h5>
                        </div>
                    </div>
                            </div>
                                                    
                            <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
                            <script>
                                var typed = new Typed(".ketikanotomatis", {
                                    strings: ["Break The Limit","Make Your Dream To Reality"],
                                    typeSpeed: 150,
                                    backSpeed: 150,
                                    loop: true
                                })
                            </script>
                        
                       <h2 class="cars-market">
                        CARS MARKET
                       </h2>     
                        <hr class="garis">
                        <div class="kotak"></div>
                       <div class="persegi4">
                       <div class="isipersegi4">
                        <img class="jermanflag" src="jermanflag.webp" alt="jermanflag">
                        <img class="mercy" src="mercy-removebg-preview.png" alt="mercy">
                        <img class="Maybach" src="maybach-removebg-preview.png" alt="maybach">
                        <img class="bmw" src="bmw.png" alt="bmw">
                        <img class="brabus" src="brabus.png" alt="brabus">
                        <img class="poce" src="poce.png" alt="poce">
                        <img class="audi" src="download-removebg-preview (7).png" alt="audi">
                        
                    </div>
                       </div>

                       <div class="kotak1"></div>
                       <div class="persegi5">
                       <div class="isipersegi5">
                        <img class="italyflag" src="italyflag.png" alt="italyflag">
                        <img class="Ferrari" src="ferarri.png" alt="ferarri">
                        <img class="Lamborghini" src="lambo.png" alt="lamborghini">
                        <img class="Pagani2" src="pagani.png" alt="pagani">
                    
                        
                    </div>
                       </div>

                       <div class="kotak2"></div>
                       <div class="persegi6">
                       <div class="isipersegi6">
                        <img class="italyflag" src="italyflag.png" alt="italyflag">
                        <img class="Ferrari" src="ferarri.png" alt="ferarri">
                        <img class="Lamborghini" src="lambo.png" alt="lamborghini">
                        <img class="Pagani2" src="pagani.png" alt="pagani">
                    
                        
                    </div>
                       </div>
                     
                </body>
            </html>

        
         