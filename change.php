<html>
<head>
    <script src="https://cdn.staticfile.org/vue/2.4.2/vue.min.js"></script>
    <style>
        .v-enter{
            opacity: 0;
        }
/*
        .v-leave-to{
            opacity: 0;
        }
*/
        .v-enter-active{
            transition:  1s ease;
        }
/*
        .v-leave-active{
            transition: all 0.4s ease;
        }
*/
    </style>
</head> 
<body>
    
    <div id="app">
        
        
    
<!--        <template v-for>-->
       <button v-on:click="show =!show">按</button>-->
        <button v-on:click="Left" >左</button>
        <transition >
<!--            <h1 v-if="show"> asfasf</h1>-->
<img v-bind:src="ims" :key="ims" style="width : 320px; height:300px;">
            
        </transition>
        
<!--        <img v-bind:src="ims" :key="ims" style="width : 320px; height:300px">-->
<!--        </template>-->
        
    <button v-on:click="Right">右</button >
        
    </div>
    <script>
        var my = new Vue ({
            el : '#app',
            data :{
                show:false,
                active:0,
                name:[],
                ims : ["5555.jpg"],
                  count:0
                  },
                
            methods :{
                Right : function(){
                     var am = ["333.jpg","handsonn.jpg","2.jpg"]
                     let Len =am.length
                     
                    if(this.count==Len)
                        {
                            this.ims="5555.jpg"
                            this.count = 0
                        }
                    else{
                         
                        this.ims=am[this.count++]
                        //this.active==this.count
                        
                    }
                   
                    //var count = 0
                    
                    
                    console.log(this.count)
                    console.log(am)
                },
                Left : function(){
                    var am = ["5555.jpg","333.jpg","handsonn.jpg","2.jpg"]
                    
                    //var count = 0
                    //this.count = am.length-1
                    if(this.count==0)
                        {
                            this.count = am.length
                            this.count=this.count-1                        
                            this.ims=am[this.count]
                        }
                    else{
                        this.count=this.count-1
                        this.ims=am[this.count]
                        console.log(this.count)
                    }
//                    else{
//                        this.ims=am[this.count--]
//                    }
                    //if(this.count!=am.length)
                      //  {
                            //this.img=am[this.count]
                      //  }
                    
                    //this.ims=am[this.count--]
                    
                    //console.log(this.ims)
                    //console.log(this.count)
                }
                
                
            },
            created(){
//                var am = ["333.jpg","handsonn.jpg","2.jpg"]
//                console.log(am.length)
//                console.log(this.ims=am[3])
                setInterval(this.Right,3000);
            }
                    
        })
        
    
    </script>
</body>
</html>