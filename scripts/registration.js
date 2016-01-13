$(document).ready(function(){
  $("#logInOuter").hide();
  $("#loginUserName").focus();
  $("#Raised").click(function(){event.preventDefault();register();return false;});
  $("#regForm *").keypress(function(e) {
    if(e.which == 13) {
      event.preventDefault();
      register();
      return false;
    }
  });
});
//login function
function register(){
  var n=toTitleCase($("#Name").val());
  var e=$("#Email").val();
  var u=$("#Usrname").val();
  var p=$("#Pass").val();
  var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var googleResponse = jQuery('#g-recaptcha-response').val();
  var pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/); //unacceptable chars
  var ok=true;
  //preverjanje email
  if(e==""){
    $(".regError.email").text(" Polje email ne sme biti prazno").show("highlight",function(){
      $(".regError.email").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
    ok=false;
   }else{
    if(!re.test(e)){
      $(".regError.email").text(" Email ni pravilne oblike").show("highlight",function(){
        $(".regError.email").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
      ok=false;
     }else{
      $(".regError.email").hide().parent().next("input").removeAttr("style");
    }
  }
  //prevernanje ime
  if(n==""){
    $(".regError.name").text(" Polje ime ne sme biti prazno").show("highlight",function(){
      $(".regError.name").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
    ok=false;
   }else{
     if(pattern.test(n)){
       $(".regError.name").text(" Prosimo vnesite samo črke").show("highlight",function(){
         $(".regError.name").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
       ok=false;
      }else{
        if(n.length<6){
          $(".regError.name").text(" Ime in priimek morata biti dolga najmanj šest črk").show("highlight",function(){
            $(".regError.name").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
          ok=false;
         }else{
          $(".regError.name").hide().parent().next("input").removeAttr("style");
        }
     }
  }
  //preverjanje uporabnika
  if(u==""){
    $(".regError.user").text(" Polje uporabniško ime ne sme biti prazno").show("highlight",function(){
      $(".regError.user").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
    ok=false;
   }else{
     if(pattern.test(u)){
       $(".regError.user").text(" Prosimo vnesite samo črke").show("highlight",function(){
         $(".regError.user").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
       ok=false;
      }else{
        if(u.length<6){
          $(".regError.user").text(" Uporabniško ime mora biti dolgo najmanj 6 črk").show("highlight",function(){
            $(".regError.user").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
          ok=false;
         }else{
          $(".regError.user").hide().parent().next("input").removeAttr("style");
        }
     }
  }
  //preverjanje gesla
  if(p==""){
    $(".regError.password").text(" Polje geslo ne sme biti prazno").show("highlight",function(){
      $(".regError.password").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
    ok=false;
   }else{
     if(p.length<6){
       $(".regError.password").text(" Geslo mora biti dolgo najmanj 6 znakov").show("highlight",function(){
         $(".regError.password").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
       ok=false;
      }else{
       $(".regError.password").hide().parent().next("input").removeAttr("style");
     }
  }
  //preverjanje robota
  if (!googleResponse) {
    $(".regError.recaptcha").text(" Označite polje in dokažete da niste robot").show("highlight",function(){
      $(".regError.recaptcha").parent().next("#Recaptcha").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
    ok=false;
   }else{
    $(".regError.recaptcha").hide().parent().next("#Recaptcha").removeAttr("style");
  }
  //if everything is okej
  if(ok){
    $.post( "/DAL/userAdd.php", { Name: n, Email: e, Usrname: u, Pass: p },
      function( data ) {
        if(data.status==1){
          logIn(u,p);
          alert("Registracija uspela preusmeritev na profil");
        }else{
          if(data.emails>0){
            $(".regError.email").text(" Uporabnik s tem e-naslovom že obstaja").show("highlight",function(){
            $(".regError.email").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
           }else{
            $(".regError.email").hide().parent().next("input").removeAttr("style");
          }
          if(data.users>0){
            $(".regError.user").text(" Uporabnik s tem uporabniškim imenom že obstaja").show("highlight",function(){
            $(".regError.user").parent().next("input").css({"box-shadow":"0 1px 0 0 #ffd11a","border-bottom":"1px solid #ff6600"});});
           }else{
            $(".regError.user").hide().parent().next("input").removeAttr("style");
          }
        }
    }, "json");
  }
}
function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}
//# sourceURL=http://slocode.xyz/scripts/registration.js
