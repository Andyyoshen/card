<html>
<head>
<!--
    <link
          type="text/css"
          rel="stylesheet"
          href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"
        />
-->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdn.staticfile.org/axios/0.18.0/axios.min.js"></script>
    
<!--    <script src="https://cdn.staticfile.org/vue/2.4.2/vue.min.js"></script>-->
   
    
<!--
    <link rel="stylesheet" type="text/css" href="http://unpkg.com/view-design/dist/styles/iview.css">
    
    <script type="text/javascript" src="http://unpkg.com/view-design/dist/iview.min.js"></script>
-->
</head>
    <body>
<div id="vm">

<!--  <transition name="fade">-->
<!--    <div v-show="show">-->
<!--        <input type="text" name="email" v-model="fname">-->
<!--
    <template v-for="(a,index) in shop" >
     <List  border>
            
            <ListItem>{{a.name}}</ListItem> 
            <ListItem>{{a.pri}}</ListItem>
            <ListItem>金額:</ListItem>
        </List>
        </template>
-->
        <select v-model="ind">
<!--        <template v-for="(location,indexs) in locations" >-->
<!--    <option v-bind:value="indexs">{{location.itername}}</option>-->
            <option disabled value="">請選擇您要的商品</option>
            <option v-bind:value="indexs" v-for="(location,indexs) in locations">{{location.itername}}
            </option>
<!--        </template>-->
        </select>
<!--    <h1>{{ind}}</h1>-->
<!--        <input type="text"  v-model="fname">-->
        <button v-on:click="Insert" class="btn btn-primary">新增</button>
        <button v-on:click="b=''" class="btn btn-primary">取消</button>
        <button v-on:click="" class="btn btn-danger">加入購物車</button>
        <input type="text"  v-model="keywords" placeholder="尋找">
        <a href="cart.php" >購物車</a>
    
    
     <div class="container" >
          <h2>購物清單</h2>
          <ul class="list-group" v-for="(a,index) in search">
            <li class="list-group-item">
            
                <div>
                <input type="checkbox" v-model="group" v-bind:value="index">
                <img v-bind:src="a.imgname" style="width: 50px">
                </div>
                
            <div class="good-info">   
                
            <p class="good-title">{{a.name}}</p>
                    
<!--                <p class="good-title" >{{a.pri}}</p>-->
                <div class="good-price">
                    <span style="color: #7a45e5;">$<b>{{a.pri}}</b></span>
                </div>
            </div>
            <button id="dd"  v-on:click="Minus(index)">-</button>        
            {{a.counts}}
            <button id="dd"  v-on:click="Plus(index)">+</button>
            <td>{{a.totals}}</td>
            <button id="dd" v-model="count" v-on:click="Del(index)">刪除</button>    
                
            </li>
            
            
            
          </ul>
        </div>
        
<!--        <template v-for="(a,index) in shop" > -->
<!--            <img v-bind:src="a.imgname" style="width:50px">-->
<!--            <b-table striped hover :items="shop">{{shop}}</b-table>-->
        <table class="table table-condensed"  >    
<!--          <tr >  -->
                <tr>
                <th>圖片</th>
                <th>品名</th>
                <th>價格</th>
                <th>數量</th>
                <th>總額</th>
                <th>操作</th>
              </tr>
              <tr v-for="(a,index) in search">
                <td><input type="checkbox" v-model="group" v-bind:value="index">
                    <img v-bind:src="a.imgname" style="width: 50px">
                </td>
                <td >{{a.name}}</td>
                <td>{{a.pri}}</td>
                <td>
                    
                <button id="dd"  v-on:click="Minus(index)">-</button>
                    
                    {{a.counts}}
                <button id="dd"  v-on:click="Plus(index)">+</button>
                </td>
                <td>{{a.totals}}</td>
<!--                <td>金額:</td>-->
<!--
                <td>
                <button id="dd"  v-on:click="Plus(index)">+</button>
                
                </td>
-->
<!--
                <td>
                <button id="dd" v-model="count" v-on:click="Del(index)">編輯</button>
                </td>
-->
                <td>
                <button id="dd" v-model="count" v-on:click="Del(index)">刪除</button>
                </td>
              </tr>
            
<!--
            <th>{{a.name}}</th>
             <th>{{a.pri}}</th>
              <th>金額:</th>
-->
<!--              <h1 >{{inp[index]}}</h1>-->
<!--            <th>{{list.menu.title}}</th>-->
<!--              <p>{{ index }}</p>-->
<!--            </tr>-->
        </table>    
<!--    <template v-for="(a,index) in shop" >-->
<!--
            <button id="dd" v-model="count" v-on:click="Del(index)">刪除</button>
            <button id="dd" v-model="count" v-on:click="Del(index)">編輯</button>
-->
<!--
            <button id="dd"  v-on:click="Plus(index)">+</button>
            <input v-model="inp[index]" type="text" >
            
-->
<!--        </template>-->
<!--        <template v-for="(t,index) in mony" > -->
<!--         <p style="text-align:right">{{t.total}}</p>-->
<!--           <input v-model="mony[index]">-->
<!--           <button v-on:click="t=2">qqq</button>-->
<!--        </template>-->
<!--    <p>{{mony.total}}</p>-->
<!--    <button v-on:click="oo" >111</button>-->
<!--
  <template v-for="(t,index) in yy" > 
    <p >{{t.price}}</p>
    </template>
-->
<!--
    <button v-on:click="oo">按我</button>
   <p >{{xx}}</p>
    <p>{{xx[0]}}</p>
-->
<!--    <p>{{locations.price}}</p>-->
<!--s
    <button v-on:click="count+=1">asdf</button>
    <p>{{count}}</p>
-->
        <p>{{shop}}</p>
        <p>{{group}}</p>
        <p>{{ind}}</p>
        <p>{{keywords}}</p>
       

</div>  
<!--  </transition>-->
<!--</div>-->

<script>
    
    var x=0,i=0;
    var data =[{type:0,title:'qweqw'},
               {type:1,title:'zzz'}]
    
    
    var lists = {
        namelists : '123',
        emaillists: 'weqrer',
        menu :[{type:'sdf',title:'qweqw'}]
    }
    
    
new Vue({
  el: '#vm',
  data: {  
      yy:[{price:100},{price:200}],
      xx:[],
      locations:[
        {
            src:"corn.jpg",
            price:100,
            itername:"玉米",
            total:100,
            count:1,
        },
        {
            src:"bo.jpg",
            price:500,    
            itername:"筍子",
            total:500,
            count:1,
        },
        {
            src:"tree.jpg",
            price:800,    
            itername:"山藥",
            total:800,
            count:1,
        }
                ],
      
      ind:'',
      keywords:'',
      inp:[],
      mony:[],
      email:'請輸入信箱',
      fname:"請輸入資料",
      shop:[],
      isactive :false,  
      group:[],
      
      
  },
    computed :{
        search : function(){
//            this.shop.filter(item=>{
//                if(item.name.indexOf(this.keywords)!=-1){
//                    console.log("DFSD")
//                    return item
//                }
//                else
//                    return this.shop
//                
//            })
            if(this.keywords){
                 
               return  this.shop.filter(item=>{
                   return item.name === this.keywords
                   // return item.name.indexOf(this.keywords) !=-1
                     
                })
               // console.log(r[0].name)
               
            }
            else{
                console.log("sfsfsd")
                return this.shop 
            }
              
    }
    },
    methods :{
      
         show: function () {
                this.visible = true;
         },
        oo: function(){
            this.xx.push({ rr : 300 })
        },
        ss :function(){
            var self = this;
            setInterval(function () {
              self.show = !self.show;
            }, 1000)
        },
        qq:function(){
            var start = this.a.substring(0,1)
            var end = this.a.substring(1)
            //console.log(this.msg=end+start)
            this.a=end+start
        },
        
        Insert : function(){
            var inddex =  this.count+=1
            //JSON.stringify(this.shop).indexOf(JSON.stringify(json1[i])) == -1 
             // console.log(hasname[0].name);
            
            
//                for(var i=0;i<this.shop.length;i++)
//                    {
//                        console.log(this.shop[i].name)
//                      if(this.shop[i].name=="玉米")
//                        {
//                            return false;
//                        }
//                        
//                    }
//            console.log(x);
             if(this.shop.length>0)
                 {
                     
                    // console.log(this.locations[this.ind].itername);
                     console.log()
                    if(this.shop[x].name==this.locations[this.ind].itername)
                    {
                        console.log("ffffff");
                        return false;
                    }
                     
                     for(i=0;i<this.shop.length;i++)
                           {
                               
                               //console.log(this.locations[this.ind].itername);
                              // console.log(this.shop[i].name);
                               
                            if(this.shop[i].name==this.locations[this.ind].itername)
                                  {
                                       return false;
                                   }
                               
                              
                           }
                    
                      
                               //console.log(this.shop[i].name);
                           //console.log(x);
                        
                      x+=1;
                    
            
                      
                }
                this.shop.push({name:this.locations[this.ind].itername,
                                pri:this.locations[this.ind].price,
                                imgname:this.locations[this.ind].src,
                                totals:this.locations[this.ind].total,
                                counts:this.locations[this.ind].count});
                axios.post("http://localhost:3000/comments",this.shop)
                .then(res=> console.log(res.data))
                .catch(function(error){
                   console.log("NO"); 
                });
//                var hasname = this.shop.filter(function(item){
//                return item.name;
//                });
            console.log(x);
            console.log(this.locations[this.ind].price);
            console.log(this.ind)
//            var i=0;
//                if(this.shop[0].name=="玉米")
//                {
//                    console.log("FFF")
//                }
               // yy();
                //console.log(hasname[0].name);
                //console.log(this.shop);
            
            
            
            this.mony.push({total:this.locations[this.ind].total})
            this.inp.push(this.fname)
            //this.lists.emaillists.push(this.email)
        },
        
        Del : function(index){
            
            this.shop.splice(index,1)
            //index=this.index
            //this.ind=index
            x=x-1;
            if(x==-1)
                {
                    x=0;
                }
            //console.log(x);
            console.log(index)
            console.log(this.shop);
            console.log(this.locations[this.ind].price);
            console.log(this.ind)
            //remove(this.shop,1)
            //this.shop.delete(1)
        },
        Plus : function(index){
            console.log(index)
            this.shop[index].totals+=this.shop[index].pri
            console.log( this.locations[index].price)
            this.shop[index].counts+=this.locations[index].count
            
        },
        Minus : function(index){
            if(this.shop[index].counts>this.locations[index].count)
                {
                    this.shop[index].counts-=1
                }
            if(this.shop[index].totals>this.shop[index].pri)
                {
                    this.shop[index].totals-=this.shop[index].pri
                }
            
            
        },
        join : function(){
            
        },
        r: function(){
            this.count+=1;
        }
    },
    created(){
//         for(var i=0;i<this.shop.length;i++)
//                            {
//                              console.log(this.shop[i].name);
//                            }
       
         console.log(this.mony)
            //console.log(JSON.parse(this.lists))
            this.loading = true
           // this.ss()
            console.log(this.ind)
    }
});
</script>

<style>
.fade-enter-active, 
.fade-leave-active {
  transition: opacity .8s;
}

.fade-enter, 
.fade-leave-to {
  opacity: 0;
}
  .num-btn {
    width: 100%;
    height: 24px;
    font-size: 10px;
    line-height: 20px;
    cursor: pointer;
}  
    .good-info{
        position: relative;
        bottom:80px;
        margin-left:100px;
        
    }
    .good-title{
        
/*        margin-top:-100px;*/
/*        margin-left:200px;*/
        font-size:50px;
        line-height:50px;
        font-style: italic;
    }
</style>
</body>
</html>