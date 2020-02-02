
<!DOCTYPE html>
<html lang="en">
<head>
  <title>數據分析</title>
  <meta charset="utf-8">
    <!-- public/index.html--> <!-- Add Bootstrap and Bootstrap-Vue CSS to the <head> section --> <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/vue/2.5.8/vue.min.js"></script>

  <script src="https://cdn.staticfile.org/axios/0.18.0/axios.min.js"></script> 
</head>
<body >
    

<div class="container">
  <div class="jumbotron">
    <h1 class="text-center">數據分析</h1>      
    <div class="container">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="First.php">首頁</a>
    </li>   
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">數據</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="pay_data.php">新資行情</a>
        <a class="dropdown-item" href="TC_Accident_data.php">台中易肇事路段</a>
        <!--<a class="dropdown-item" href="#">Link 3</a>-->
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</div>
  </div>  
    <a type="button" class="btn btn-primary btn-md" href="TC_Accident_chart.php" style="position: relative; top: 50px; left: 1300px">圖表分析</a>
</div>
<div  id = "all">  
    <div  id="alt" class="alert alert-success" style="display:none;position: fixed;top: 1px; left:2%;width: 96%;text-align:center;">
    {{more}}
    </div>
<!--    <p style = "font-size:25px;">计数器: {{ counter }}</p>-->
<div class="container" >
  <button id="bt" type="button" class="btn btn-outline-info" style="position: relative;top: -20px; left: 110px ;height:50px;width :500px;letter-spacing: 20px;border" @click="displayDate()">最多肇事件數</button>    
</div>
</div>
 <!--------------------------------以下為表個------------------------------------------>   
<div id="DG">
 <table  class="table table-condensed">
	<thead>
		<tr>
			<th>路口名稱</th>
			<th>肇事件數</th>
			<th>主要肇因</th>
		</tr>
	</thead>
	<tbody >
        <tr v-for="info in infos">
            <td id="AG">{{info.路口名稱}}</td>
            <td id="AG">{{info.肇事件數}}</td>
            <td id="AG">{{info.主要肇因}}</td>
        </tr>
     </tbody>    
</table> 
</div>

    
    
    
    
 <!--------------------------------以下為資料傳遞---------------------------------------> 
    <script>
       var app1 = new Vue({
      
      el :"#DG",
      data : {
            infos : [],
            isActive: 'alert alert-success'
      },
      methods :{
          getAllJson : function(){
                axios
                .get("https://datacenter.taichung.gov.tw/swagger/OpenData/04318b65-490d-487b-a80a-c54c9d48a5b3")
                .then(ww =>  this.infos=ww.data)
                .catch(function(error){
                  console.log("ff");
                });
              
          }
      },
      created ()  {
          console.log('methods')
         this.getAllJson() 
          
      }
      
  })
       
       var app2 = new Vue ({
           el : '#all',
           data :{
               more : '1',
               counter:1,
               show : true
           },
           methods :{
                displayDate :function (){      
                 document.getElementById("alt").style.display="block"
                    
                    
              },
               hideFont: function(){
                   document.getElementById("alt").style.display="none"
               }
//              cou : function(count){
//	                 this.counter+=1
//             }
           },    
           created(){
              setInterval( this.hideFont , 6000);
                 
           }
              //console.log(app1.yy)
               //var dis = this.displayDate
              // document.getElementById("bt").addEventListener('click',dis)
               
               
               //documBent.getElementById("#alt");
           
           
       });
       
       
    </script>
    
</body>
</html>