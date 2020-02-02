<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js">
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
    <body id="uuu">
        <div id='rr'>
            <a v-bind:href="url" >{{qq}}</a>
        <li v-for="home in homes" v-on:click="myFa(home.father)">{{home.father}}</li>
        </div>
    <div class="menu">
        <!--<a href="#position_1" class="move">a</a>
        <!--<a href="#position_2" class="move">{{position_2}}</a>
        <!--<a href="#position_3" class="move">{{position_3}}</a>-->
    </div>
        <div id="position_2">
        <p>
        position_1位置
        </p>
        </div>
        --<div id="position_2">
            <p>
            position_2的位置
            </p>
        </div>
        <div id="position_3">
            <p>
            position_3的位置
            </p>
        </div> -->
        <div id="app">
            {{massage}}
        </div>  
        <script>
          let scrollTop = document.body.scrollTop;
           var myapp = new Vue({
               el:'#rr',
               data:{
                   url: "#position_3",
                   pos :"OKOK",
                   homes :[
                       {father:'tom'},
                       {father:'andy'}
                   ],
                   
                   return : scroll
               },
               methods: {
                    scrollDs() {
                        this.scroll = document.body.scrollTop;
                        console.log(this.scroll)
                    }
                },
                    mounted() {
                        window.addEventListener('scroll', this.scrollDs)
                    },
           })
        </script>
    </body>
</html>