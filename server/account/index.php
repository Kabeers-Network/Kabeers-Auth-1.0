<?php
/*if(isset($_GET['u'])){
    $jqueryScript = 'let accounts = JSON.parse(localStorage.getItem(\'accounts\')).find(o => o.username === "'.$_GET["u"].'");';
}else{
    $jqueryScript = 'let accounts = JSON.parse(localStorage.getItem(\'accounts\')).slice(-1)[0];';
}*/
if(!isset($_GET['u'])){
    header('Location:0');
}
$jqueryScript = $_GET['u'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Kabeers Network Accounts Kabeer Jaffri" />

	<title>Kabeers Network Accounts</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-194x194.png" sizes="194x194" />
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-16x16.png" sizes="16x16" />
    
    <link  rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto" />
<!--<link  rel="stylesheet" type="text/css" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" /> -->
</head>

<body>

<section class="profile-card">
    <header>
        <a href="#" class="image">
        </a>
        <h1 class="fullname"><small>Welcome, </small></h1>
        <h2><span class="email small text-muted"></span></h2>
    </header>
    
    <div class="profile-bio">
        <p><span class=text-muted>Manage Your Kabeers Network Account Here</span><br>
        <span class="firstname my-1"></span> <span class="lastname my-1"></span></p>
        <p style="display:flex;justify-content:space-around;">
            <a href="mailto:kabeersnetwork@gmail.com" class=my-2>Report</a>
            <a class=my-2 href="accountChooser.php">Choose Another</a>
            <a class=my-2 href="http://auth.kabeersnetwork.rf.gd/server/addAccount.php">Add</a>
        </p>
    </div>
    
</section>
<style>html { height: 100%;}body {background: #FAFAFA url("../images/bg.png") no-repeat center center fixed; background-size: 120% auto; position: fixed;padding: 0px;margin: 0px;width: 100%;height: 100%;font: normal 14px/1.618em "Roboto", sans-serif;-webkit-font-smoothing: antialiased;}body:before { content: ""; height: 0px; padding: 0px; border: 110em solid #313440;position: absolute;left: 50%;top: 100%; z-index: 2; display: block; -webkit-border-radius: 50%; border-radius: 50%;-webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%); -webkit-animation: puff_portrait 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards; animation: puff_portrait 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;}h1, h2 { font-weight: 400; margin: 0px 0px 5px 0px;}h1 { font-size: 24px;}h2 { font-size: 16px;}p { margin: 0px;}.profile-card {background: #FFB300;width: 56px;height: 56px;position: absolute;left: 50%;top: 50%; z-index: 2;overflow: hidden; opacity: 0; margin-top: 70px;-webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);-webkit-border-radius: 50%;border-radius: 50%;-webkit-box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);box-shadow: 0px 3px 6px rgba(0 ,0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23); -webkit-animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia_landscape 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards; animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia_landscape 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;}.profile-card header { width: 179px; height: 280px; padding: 40px 20px 30px 20px; display: inline-block; float: left; border-right: 2px dashed #EEEEEE;background: #FFFFFF; color: #000000; margin-top: 50px; opacity: 0; text-align: center; -webkit-animation: moveIn 1s 3.1s ease forwards; animation: moveIn 1s 3.1s ease forwards;}.profile-card header h1 { color: #FF5722;}.profile-card header a { display: inline-block; text-align: center; position: relative; margin: 25px 30px;}.profile-card header a:after {position: absolute; content: "";bottom: 3px;right: 3px;width: 20px;height: 20px; border: 4px solid #FFFFFF; -webkit-transform: scale(0); transform: scale(0); background: -webkit-linear-gradient(top, #2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%); background: linear-gradient(#2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%); -webkit-border-radius: 50%; border-radius: 50%; -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1); box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1); -webkit-animation: scaleIn 0.3s 3.5s ease forwards; animation: scaleIn 0.3s 3.5s ease forwards;}.profile-card header a > img { width: 120px; max-width: 100%; -webkit-border-radius: 50%; border-radius: 50%; -webkit-transition: -webkit-box-shadow 0.3s ease; transition: box-shadow 0.3s ease; -webkit-box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06); box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);}.profile-card header a:hover > img { -webkit-box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1); box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);}.profile-card .profile-bio { width: 175px; height: 180px; display: inline-block; float: right; padding: 50px 20px 30px 20px;background: #FFFFFF; color: #333333; margin-top: 50px; margin-bottom:0;padding-bottom:0; text-align: center; opacity: 0; -webkit-animation: moveIn 1s 3.1s ease forwards; animation: moveIn 1s 3.1s ease forwards;}.profile-social-links { width: 218px; display: inline-block; float: right; margin: 0px; padding: 15px 20px;background: #FFFFFF; margin-top: 50px; text-align: center; opacity: 0; -webkit-box-sizing: border-box; box-sizing: border-box; -webkit-animation: moveIn 1s 3.1s ease forwards; animation: moveIn 1s 3.1s ease forwards;}.profile-social-links li { list-style: none; margin: -5px 0px 0px 0px; padding: 0px; float: left; width: 33.3%; text-align: center;}.profile-social-links li a { display: inline-block; width: 24px; height: 24px; padding: 6px; position: relative; overflow: hidden!important; -webkit-border-radius: 50%; border-radius: 50%;}.profile-social-links li a img { position: relative; z-index: 1;}.profile-social-links li a:before { display: block; content: ""; background: rgba(0, 0, 0, 0.3); position: absolute; left: 0px; top: 0px; width: 36px; height: 36px; opacity: 1; -webkit-transition: transform 0.4s ease, opacity 1s ease-out; transition: transform 0.4s ease, opacity 1s ease-out; -webkit-transform: scale3d(0, 0, 1); transform: scale3d(0, 0, 1); -webkit-border-radius: 50%; border-radius: 50%;}.profile-social-links li a:hover:before { -webkit-animation: ripple 1s ease forwards; animation: ripple 1s ease forwards;}.profile-social-links li a img,.profile-social-links li a svg { width: 24px;}@media screen and (min-aspect-ratio: 4/3) { body { background-size: 100% auto; } body:before { width: 0px; } @-webkit-keyframes puff { 0% { top: 100%; width: 0px; padding-bottom: 0px; } 100% { top: 50%; width: 100%; padding-bottom: 100%; } } @keyframes puff { 0% { top: 100%; width: 0px; padding-bottom: 0px; } 100% { top: 50%; width: 100%; padding-bottom: 100%; } }}@media screen and (min-height: 480px) {.profile-card {-webkit-animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia_portrait 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia_portrait 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;}.profile-card header { width: auto; height: auto; padding: 30px 20px; display: block; float: none; border-right: none; } .profile-card .profile-bio { width: auto; height: auto; padding: 15px 20px 30px 20px; display: block; float: none; } .profile-social-links { width: 100%; display: block; float: none; }}@media screen and (min-aspect-ratio: 4/3) { body { background-size: 100% auto; } body:before { width: 0px;-webkit-animation: puff_landscape 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;animation: puff_landscape 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;}}@-webkit-keyframes init { 0% { width: 0px; height: 0px; }100% { width: 56px; height: 56px; margin-top: 0px; opacity: 1; }}@keyframes init { 0% { width: 0px; height: 0px; }100% { width: 56px; height: 56px; margin-top: 0px; opacity: 1; }}@-webkit-keyframes puff_portrait { 0% { top: 100%; height: 0px; padding: 0px; }100% { top: 50%; height: 100%; padding: 0px 100%; }}@keyframes puff_portrait { 0% { top: 100%; height: 0px; padding: 0px; }100% { top: 50%; height: 100%; padding: 0px 100%; }}@-webkit-keyframes puff_landscape {0% {top: 100%;width: 0px;padding-bottom: 0px;}100% {top: 50%;width: 100%;padding-bottom: 100%;}}@keyframes puff_landscape {0% {top: 100%;width: 0px;padding-bottom: 0px;}100% {top: 50%;width: 100%;padding-bottom: 100%;}}@-webkit-keyframes borderRadius { 0% { -webkit-border-radius: 50%; }100% { -webkit-border-radius: 0px; }}@keyframes borderRadius { 0% { -webkit-border-radius: 50%; }100% { border-radius: 0px; }}@-webkit-keyframes moveDown { 0% { top: 50%; }50% { top: 40%; } 100% { top: 100%; }}@keyframes moveDown { 0% { top: 50%; }50% { top: 40%; } 100% { top: 100%; }}@-webkit-keyframes moveUp { 0% { background: #FFB300; top: 100%; }50% { top: 40%; } 100% { top: 50%; background: #E0E0E0; }}@keyframes moveUp { 0% { background: #FFB300; top: 100%; }50% { top: 40%; } 100% { top: 50%; background: #E0E0E0; }}@-webkit-keyframes materia_landscape { 0% { background: #E0E0E0; } 50% { -webkit-border-radius: 4px; } 100% { width: 380px; height: 280px; background: #FFFFFF; -webkit-border-radius: 4px; }}@keyframes materia_landscape { 0% { background: #E0E0E0; } 50% { border-radius: 4px; } 100% { width: 380px; height: 280px; background: #FFFFFF; border-radius: 4px; }}@-webkit-keyframes materia_portrait {0% {background: #E0E0E0;}50% {-webkit-border-radius: 4px;}100% {width: 280px;height: 380px;background: #FFFFFF;-webkit-border-radius: 4px;}}@keyframes materia_portrait {0% {background: #E0E0E0;}50% {border-radius: 4px;}100% {width: 280px;height: 380px;background: #FFFFFF;border-radius: 4px;}}@-webkit-keyframes moveIn { 0% { margin-top: 50px; opacity: 0; }100% { opacity: 1; margin-top: -20px; }}@keyframes moveIn { 0% { margin-top: 50px; opacity: 0; }100% { opacity: 1; margin-top: -20px; }}@-webkit-keyframes scaleIn { 0% { -webkit-transform: scale(0); }100% { -webkit-transform: scale(1); }}@keyframes scaleIn { 0% { transform: scale(0); }100% { transform: scale(1); }}@-webkit-keyframes ripple { 0% { transform: scale3d(0, 0, 0); } 50%, 100% { -webkit-transform: scale3d(1, 1, 1); } 100% { opacity: 0; }}@keyframes ripple { 0% { transform: scale3d(0, 0, 0); } 50%, 100% { transform: scale3d(1, 1, 1); } 100% { opacity: 0; }}small{font-size:80%}.small,small{font-size:80%;font-weight:400}.mt-2,.my-2{margin-top:1rem!important}.mr-2,.mx-2{margin-right:.5rem!important}.mb-2,.my-2{margin-bottom:0.5rem!important}.text-muted{color:#6c757d!important}hr{box-sizing:content-box;height:0;overflow:visible}hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}</style>
<script>
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
if(getParameterByName('u'),window.location.href != null){
//    window.history.pushState({}, document.title, "/server/account/" + "/");
}
if(localStorage.getItem('accounts')===null){
    window.location.href="http://auth.kabeersnetwork.rf.gd/server/account/accountChooser.php";
}
    let userAccount = {};
    var colours = ["#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e", "#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50", "#f1c40f", "#e67e22", "#e74c3c", "#ecf0f1", "#95a5a6", "#f39c12", "#d35400", "#c0392b", "#bdc3c7", "#7f8c8d"];
    let accounts = JSON.parse(localStorage.getItem('accounts'))[<?php echo $jqueryScript; ?>]
    if(accounts == null){
        window.location.href = JSON.parse(localStorage.getItem('accounts')).length-1;        
    }
    console.log(JSON.parse(localStorage.getItem('accounts')))
    //console.log(accounts)
    userAccount = {
        username : accounts.username,
        avatar : accounts.image,
        firstname : accounts.firstname,
        email : accounts.email,
        lastname : accounts.lastname
    }
    var color = colours[Math.floor(Math.random() * colours.length)].substr(1);
    document.querySelector('.fullname').innerHTML+=userAccount.firstname;
    document.querySelector('.firstname').innerHTML+=userAccount.firstname;
    document.querySelector('.lastname').innerHTML+=userAccount.lastname;
    document.querySelector('.email').innerHTML=userAccount.email;
    document.querySelector('.image').innerHTML= '<img src="https://ui-avatars.com/api/?color=FFFFFF&background='+color+'&format=png&size=250&rounded=true&length=2&name='+userAccount.username+'" />';
</script>
</body>
</html>