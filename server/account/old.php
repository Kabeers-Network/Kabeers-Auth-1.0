
    <title>Kabeer's Drive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="ic_launcher.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link  rel="stylesheet" href="css/materialDesign.css">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<script>
$(document).ready(function(){
    var data = JSON.parse(localStorage.getItem("accounts"));
    
    console.log(data);
    for(var i = 0; i < data.length; i++){
        console.log(data[i].password);

        $('.main').append('<form action="server-login.php" method="post"><input name="username" value="'+data[i].username+'" class="w-0"><input name="password" value="'+data[i].password+'" class="w-0"><button type="submit" name="login_user" class="text-left w-100 list-group-item px-2" style="border:none;background-color:transparent;"><i class="material-icons float-left" style="width:0em;margin-top:-0.75em;float:left;"><img src="https://ui-avatars.com/api/?name='+data[i].username+'" style="width:2em;height:auto;border-radius:30px;float:left"></i> <div class="bmd-list-group-col ml-4" style="width:70%;float-right;"> <p class="list-group-item-heading"style="overflow: hidden;text-overflow: hidden;">'+data[i].username+'</p> <p class="list-group-item-text">'+data[i].email+'</p> </div></button><hr></form>');
        

}
$('.mainRow').append('<div class="col-md-12"><a href="#" class="text-center w-100 " style=""><p class="list-group-item-heading" style="overflow: hidden;text-overflow: ellipsis;">Use Another Account</p></a><div>')
});</script>
<div class="container mt-3 text-center"><div class="row">

    <div class="col-md-12 d-flex justify-content-center my-2">
        <img src="http://ksuite.ueuo.com/kslogo.png" style="width: 2em;"></div>
    <div class="col-md-12 d-flex justify-content-center ">
    <div class="display-4" style="font-size:30px; opacity:60%;">Choose an Account</div></div><div class="col-md-12 d-flex justify-content-center">
<br><small class="text-muted">Continue to Kabeer's Network</small><hr></div>
</div></div>
 <style>*{margin:0;padding:0;box-sizing:border-box;}.w-0{width:0!important;display:none}</style>
<div class="mainContainer container mt-4"><div class="row mainRow">
<ul class="list-group main" style="">

</ul>
</div></div>
<style type="text/css">
    .main form{
    ; }
    .main form button{
        margin-top: 0!important;margin-bottom: 0!important;padding-top: 0!important;padding-bottom:0!important;
    }

    .main{
        align-items: center;
    }
    .main form hr{
        margin: 0;
    }
</style>
