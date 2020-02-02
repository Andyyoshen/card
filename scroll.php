<!DOCTYPE html>
<html>
<head>
<   meta charset="utf-8">
    <title>捲動</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        div{
            border-bottom: 1px solid #999;
            padding: 10px;
        }
        #position_1, #position_2,#position_3{
            height: 700px;
        }
        #position_1{
            background-color: #7de3a5;
        }
        #position_2{
            background-color: #ace3a5;
        }
        #position_3{
            background-color: #d79ac4;
        }
    </style>
</head>
    <body>
    <div class="menu">
        <a href="#position_1" class="move">position_1</a>
        <a href="#position_2" class="move">position_2</a>
        <a href="#position_3" class="move">position_3</a>
    </div>
        <div id="position_1">
        <p>
        position_1位置
        </p>
        </div>
        <div id="position_2">
            <p>
            position_2的位置
            </p>
        </div>
        <div id="position_3">
            <p>
            position_3的位置
            </p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
        
            $(window).on("scroll",function(){
               
                console.log($("body").scrollTop());
            });
            
        $("a.move").on("click",function(){
            
            var to =  $(this).attr("href");
            
            //alert(to);
            $("body,html").animate({
                
                scrollTop : $(to).position().top
            
            },600);
           // return false;
        });
        
        </script>
    </body>
</html>