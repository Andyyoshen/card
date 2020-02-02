<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vue 测试实例 - 菜鸟教程(runoob.com)</title>
<script src="https://cdn.staticfile.org/vue/2.4.2/vue.min.js"></script>
<script src="https://cdn.staticfile.org/axios/0.18.0/axios.min.js"></script>
</head>
<body>
<div id="app">
    <li v-for="info in infos">
    {{ info.路口名稱 }}
    </li>
    <li v-for="info in infos">
    {{ info.肇事件數 }}
    </li>
  
</div>
<script type = "text/javascript">
  new Vue({
      
      el :"#app",
      data () {
          return {
              infos : []
          }
      },
      
      created ()  {
          axios
            .get("https://datacenter.taichung.gov.tw/swagger/OpenData/04318b65-490d-487b-a80a-c54c9d48a5b3")
            .then(ww =>  this.infos=ww.data)
            .catch(function(error){
              console.log("f");
          });
      }
      
  })
</script>
</body>
</html>