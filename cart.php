<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdn.staticfile.org/axios/0.18.0/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <p></p>
    </div>
    <script>
        var aa
    new Vue ({
        
        el:"#app",
        data:{
            cart :'',
        },
        method :{
            
        },
        created (){
            
            axios
            .get("http://localhost:3000/comments")
            .then(ww=> console.log(ww.data))
            .catch(function(error){
                //console.log(aa);
            });
            //console.log(this.cart)
        },
    })
    </script>
</body>
</html>