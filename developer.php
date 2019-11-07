<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
   -webkit-animation-duration: 10s;
            animation-duration: 10s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
}

.bg-image {
background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('images/mypic.jpg');
  
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  height: 100%; 
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  color: white;
  width: 80%;
  padding: 20px;
  text-align: center;
   animation-name:  fadeIn;
    animation-duration: 7s;
}
 @keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
         }
         
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
  <h2>Hey there!</h2>
  <h1 style="font-size:50px">I am Harika Vajha</h1>
  <p>A pretty optimistic tech-enthusiast and a science addict.<br> <br><br>Experimenting things irrespective of the result fascinates me.<br>
  	<br><br> Challenges excite me in every way possible.</p>
</div>


</body>
</html>
