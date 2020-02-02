<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative; 
      font-family: monospace;
      font-weight: 700;
  } 
      .welcome-section{
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          background: #000;
          overflow: hidden;
          
      }
      .content-wrap{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          
      }
      .fly-in-text{
          list-style: none;
          
      }
      .fly-in-text li{
          display: inline-block;
          margin-right: 20px;
          font-size: 5em;
          color: #fff;
          opacity: 1;
          transition: all 3s ease;
      }
      .fly-in-text li:nth-child(5){
            margin-right: 0;
      }
      
/*
      .content-hidden .fly-in-text li{opacity: 0;}
      .content-hidden .fly-in-text li:nth-child(1){transform: translate3d(-60px,0,0);}
      .content-hidden .fly-in-text li:nth-child(2){transform: translate3d(-30px,0,0);}
      .content-hidden .fly-in-text li:nth-child(3){transform: translate3d(0px,0,0);}
      .content-hidden .fly-in-text li:nth-child(4){transform: translate3d(30px,0,0);}
      .content-hidden .fly-in-text li:nth-child(5){transform: translate3d(60px,0,0);}
*/
      
      
  #section1 {
      padding-top:50px; height:1000px;background-image: url(333.jpg);background-size: cover ; text-align: center;
}
    
      
  #section2 {
      padding-top:50px;height:1000px;color: #fff; background-color: #673ab7;background-size: cover;text-align: center;background-image: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url("333.jpg");background-size: cover ;
      }
      #Photo {
        position:absolute;
        border: 3px solid #73AD21;
         margin-top:-100px;  
        left:250px;  
      }
      #fonta{
        width: 460px; 
        animation : type 2.5s steps(30);
        overflow:hidden;
        white-space :nowrap;
        font-family:consolas;
        width:50ch;
        animation-play-state: paused;  
/*          word-break: break-all;*/
      }
      #fontb{
        width: 460px; 
        animation : type2 2.5s steps(30);
        overflow:hidden;
        white-space :nowrap;
        font-family:fantasy;
        width:50ch;
/*        animation-delay: 3s;*/
        animation-play-state: paused;
/*          word-break: break-all;*/
      }
      @keyframes type{
          0%{
            width:0ch;
          }
          100%{
            width:50ch;
          }
        }
      @keyframes type2{
          0%{
            width:0ch;
          }
          100%{
            width:50ch;
          }
        }
      #font{
        margin: auto;
        width: 0px;
        border: 3px solid #73AD21;
        padding: 50px;
      }
  #section3 {
      padding-top:50px;height:1000px;color: black; background-color: #fff;background-size: cover;text-align: center
      }
  #section41 {
      padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;background-size: cover
      }
  #section42 {
      padding-top:50px;height:500px;color: #fff; background-color: #009688;background-size: cover
      }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1" class="move">Section 1</a></li>
          <li><a href="#section2" class="move">Section 2</a></li>
          <li><a id="scoll" href="#section3" class="move">Section 3</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Section 4-1</a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="section1" class="container-fluid" style="text-align: center;">
    <div class="welcome-section content-hidden">
    <div class="content-wrap">
        <ul class="fly-in-text">
        <li>H</li>
        <li>e</li>
        <li>l</li>
        <li>l</li>
        <li>o</li>
        </ul>
        
    </div>
    </div>
  <h1 >Welcome here</h1> 
</div>
    
    
<div id="section3" class="container-fluid">
  <h1>Section 3</h1> 
    <div id="font">
    <h1 id="fonta" class="q" style="font-size:20px;">大家好我是張祐紳 ,我來自台中你妳妳妳妳妳妳妳妳妳妳妳你妳妳妳妳妳妳妳妳妳妳妳你妳妳妳妳妳妳妳妳妳妳妳</h1>
        
         <h1 id="fontb"  style="font-size:20px;">大家好我是張祐紳 ,我來自台中你妳妳妳妳妳妳妳妳妳妳妳你妳妳妳妳妳妳妳妳妳妳妳你妳妳妳妳妳妳妳妳妳妳妳</h1> 
        <img id="Photo" src="handsonn.jpg"  width="300px" height="300px">
    </div>
    
</div>
    <div id="section2" class="container-fluid">
    <h1>作品集</h1>
    
    <img id="works" src="handsonn.jpg" width="100px" height="100px">
</div>
    
<div id="section41" class="container-fluid">
  <h1>Section 4 Submenu 1</h1>
</div>
<div id="section42" class="container-fluid">
  <h1>Section 4 Submenu 2</h1>
</div>
<script>
    
//    $(window).on('scroll',function(){
//        //var to = $(this).attr("href");
//        console.log($('body,html').position())
//    });
    $(window).scroll(function () {
    var scrollVal = $(this).scrollTop();
    console.log(scrollVal);
        if(scrollVal>=440){
            $('#fonta').css("animation-play-state","running")
                //$('#fontb').css("animation-delay","3s")
                setTimeout(function(){$('#fontb').css("animation-play-state","running")},3000)
        }
            
  });
    
    
    
    $(document).ready(function(){
        
        
        var welcome = $('.welcome-section');
        
        setTimeout(function(){
            welcome.removeClass('content-hidden');
        },800);
        
        
        
        
        $('#works').on("mouseenter",function(){
            
           // $('#section2').css("background-image", "url(handsonn.jpg)").fadeTo('slow',1)
            $('#section2').css("background-image","linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url(handsonn.jpg)").fadeTo('slow', 100);
            //$('#section2').css("background-size", "cover")   
            
        }) 
        
        
        
    });
    
    
    $("a.move").on("click",function(){
        
        var to = $(this).attr("href");
        console.log(to)
        $('body,html').animate({
           
            scrollTop  : $(to).position().top
            
        },600);
        console.log($(to).position().top)
        if(to=="#section3")
            {
                $('#fonta').css("animation-play-state","running")
                //$('#fontb').css("animation-delay","3s")
                setTimeout(function(){$('#fontb').css("animation-play-state","running")},3000)
               // $('#fontb').css("animation-play-state","running")
            }
        
    });
</script>
</body>
</html>
