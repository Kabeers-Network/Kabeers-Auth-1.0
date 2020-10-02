import {CrossStorageClient} from 'https://cdn.jsdelivr.net/gh/zendesk/cross-storage/dist/client.min.js';
  
function KAuth() {
   class KAuth_sdk {
   constructor(method, sdk_uri) {
       this.main = {
           method:method,
           sdk_uri:'http://auth.kabeersnetwork.rf.gd/js-sdk/compiled/'+sdk_uri+'.php'
       }
   }
   uniqid(a = "", b = false) {
   const c = Date.now() / 1000;
   let d = c.toString(16).split(".").join("");
   while (d.length < 14) d += "0";
   let e = "";
   if (b) {
   e = ".";
   e += Math.round(Math.random() * 100000000);
   }
   return a + d + e;
   }
   render(e,height,width,theme){
   if(theme == 'light'){
   e.innerHTML = `
   <div class=k-net-auth-btn KAuth-${this.uniqid()}"><a href="${this.main.sdk_uri}?method=${this.main.method}"><img alt="Login With Kabeers Network" src="https://cdn.jsdelivr.net/gh/kabeer11000/k-auth-sdk/dist/light.svg" style="width:${width};height:${height};"></a></div>
   `;
   }else{
   e.innerHTML = `
   <div class=k-net-auth-btn KAuth-${this.uniqid()}"><a href="${this.main.sdk_uri}?method=${this.main.method}"><img alt="Login With Kabeers Network" src="https://cdn.jsdelivr.net/gh/kabeer11000/k-auth-sdk/dist/dark.svg" style="width:${width};height:${height};"></a></div>
   `;
   }
   }
   go(){
   window.location.href= this.main.sdk_uri+'?method='+this.main.method;
   }
   getURL(){
   return this.main.sdk_uri+'?method='+this.main.method;
   }
   export (KAuth_sdk){}
   }
   var main = {
   info: undefined,
   init: function (data) {
   this.info = new KAuth_sdk(data.method, data.sdk_id); 
   },
   render: function (data){
   this.info.render(data.e, data.height, data.width, data.theme);
   },
   go: function(){
   this.info.go();
   },
   getURL(){
   return this.info.getURL();
   },
   showModal(){
        document.body.innerHTML+=`<div class="k_chooser_container k_chooser_d-none">
         <div class="k_chooser_px-2" style="margin-top: 1rem;text-align:center;line-height: 1rem;">
            <button style="position:fixed;float:right;right:1rem;top:1rem;margin-top:0.25rem;margin-right:0.25rem" class="k_chooser_close k_auth_mdc-button mdc-icon-button">X</button>
            <img src="https://cdn.jsdelivr.net/gh/kabeer11000/sample-response/auth-sdk/logo.svg" style="width: 1.5rem;height: auto;vertical-align: sub;">
            Sign in to <span class="k_chooser_product"></span> <span>with Kabeers Network</span>
         </div>
         <div class="k_chooser_list" href="${this.getURL()}">
         </div>
         <div class="k_chooser_btn-k"></div>
      </div>
      <div style="position:fixed;width:2.5rem;height:2.5rem;bottom:2.5rem;right:0;background-color:#D3D3D4;padding:0.5rem;text-align:center;color:white;border-radius:10rem 0rem 0rem 10rem;" class="k_chooser_auth_side-btn k_chooser_d-none">
         <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
         </svg>
      </div>`;

   function uniqid(a = "", b = false) {
   const c = Date.now() / 1000;
   let d = c.toString(16).split(".").join("");
   while (d.length < 14) d += "0";
   let e = "";
   if (b) {
   e = ".";
   e += Math.round(Math.random() * 100000000);
   }
   return a + d + e;
   }
   function getSearchParameters() {
   var prmstr = window.location.search.substr(1);
   return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
   }
   function transformToAssocArray( prmstr ) {
   var params = {};
   var prmarr = prmstr.split("&");
   for ( var i = 0; i < prmarr.length; i++) {
   var tmparr = prmarr[i].split("=");
   params[tmparr[0]] = tmparr[1];
   }
   return params;
   }
   var user = {};
   var req = getSearchParameters();
   if(req['username']){
   [user.username, user.password, user.email] = [req['username'], req['username'], req['username']];
   console.log(user)
   sessionStorage.setItem('k_auth_user', JSON.stringify(user))
   console.log(window.location.href);
   sessionStorage.setItem('k_logged_in_session', JSON.stringify(true));
   window.history.replaceState({}, document.title, " " + window.location.pathname);
   }
   var colours = ["#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e", "#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50", "#f1c40f", "#e67e22", "#e74c3c", "#ecf0f1", "#95a5a6", "#f39c12", "#d35400", "#c0392b", "#bdc3c7", "#7f8c8d"];
   var storage = new CrossStorageClient('http://auth.kabeersnetwork.rf.gd/widget/hub.php');
   storage.onConnect().then(function() {
   return storage.get('accounts');
   }).then(function(accounts) {
   let html = '';
   accounts = JSON.parse(accounts);
   if(sessionStorage.getItem('k_logged_in_session')===null){
   if(accounts){
   fetch('https://hosted-kabeersnetwork.000webhostapp.com/auth/api/widget/api/getToken.php?sdk_token_='+uniqid(), {mode: 'cors'})
   .then(function(response) {
   return response.json();
   })
   .then(function(text) {
   fetch('https://hosted-kabeersnetwork.000webhostapp.com/auth/api/widget/api/getClientInfo.php?client_secret=notes12', {mode: 'cors'})
   .then(function(response) {
   return response.json();
   })
   .then(function(text) {
   document.querySelector('.k_chooser_product').innerHTML = text.name;
   })
   .catch(function(error) {
   console.log('K Auth SDK Failed to Get Client Token, Check Your Connection', error)
   });
   })
   .catch(function(error) {
   console.log('K Auth SDK Failed to Get Client Token, Check Your Connection', error)
   });
   for(let i=0;i<accounts.length;i++){
   html+=`
   <div class="k_chooser_card k_chooser_ripple">
      <img class="k_chooser_img" src="https://ui-avatars.com/api/?color=FFFFFF&background=${colours[Math.floor(Math.random() * colours.length)].substr(1)}&format=png&size=250&rounded=true&length=2&name=${accounts[i].username}"><span class="k_chooser_span">${accounts[i].username}<br><span class="k_chooser_email">${accounts[i].email}</span></span>
   </div>
   `;
   }
   }
    var divNode = document.createElement("link");
    divNode.setAttribute("rel", "stylesheet");
    divNode.setAttribute("href", "https://cdn.jsdelivr.net/gh/kabeer11000/sample-response/auth-sdk/style.min.css");
    document.body.appendChild(divNode);
    document.querySelector('.k_chooser_list').innerHTML=html;        
   document.querySelector('.k_chooser_container').classList.remove('k_chooser_d-none');
   }else{}
   }).catch(function(err) {
   console.error(err)
   });
   window.addEventListener('dblclick', function(){
   document.querySelector('.k_chooser_container').classList.add('k_chooser_d-none');
   document.querySelector('.k_chooser_auth_side-btn').classList.remove('k_chooser_d-none');
   })
   document.querySelector('.k_chooser_auth_side-btn').onclick = function(){
   document.querySelector('.k_chooser_auth_side-btn').classList.add('k_chooser_d-none');
   document.querySelector('.k_chooser_container').classList.remove('k_chooser_d-none');
   }
   document.querySelector('.k_chooser_close').onclick = function(){
   document.querySelector('.k_chooser_container').classList.add('k_chooser_d-none');
   document.querySelector('.k_chooser_auth_side-btn').classList.remove('k_chooser_d-none');
   }
   document.querySelector('.k_chooser_list').onclick = function(){
   main.go();
   }

   const k_chooser_ripple_rippleElements = document.querySelectorAll(".k_chooser_ripple");
   for(let i = 0; i < k_chooser_ripple_rippleElements.length; i++) {
   k_chooser_ripple_rippleElements[i].addEventListener('click', function(e){
   let X = e.pageX - this.offsetLeft;
   let Y = e.pageY - this.offsetTop;
   let k_chooser_ripple_rippleDiv = document.createElement("div");
   k_chooser_ripple_rippleDiv.classList.add('k_chooser_ripple_ripple');
   k_chooser_ripple_rippleDiv.setAttribute("style","top:"+Y+"px; left:"+X+"px;");
   let k_chooser_ripple_customColor = this.getAttribute('k_chooser_ripple_ripple-color');
   if (customColor) k_chooser_ripple_rippleDiv.style.background = customColor;
   this.appendChild(k_chooser_ripple_rippleDiv);
   setTimeout(function(){
   k_chooser_ripple_rippleDiv.parentElement.removeChild(k_chooser_ripple_rippleDiv);
   }, 900);
   });
   }
   }
   };
   return main;
   }(window);