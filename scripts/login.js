$(document).ready(function(){
  $("#loginUserName").focus();
  $("#loginButton").click(function(){event.preventDefault();logIn($("#loginUserName").val(),$("#loginPassword").val());return false;});
  $("#loginUserName, #loginPassword").keypress(function(e) {
    if(e.which == 13) {
      event.preventDefault();
      logIn($("#loginUserName").val(),$("#loginPassword").val());
      return false;
    }
  });
  if(localStorage.getItem( 'userId')==null){
      $("#logInOuter").show("blind");
  }
});
//login function
function logIn(u,p){
    $.post( "/DAL/login.php", { user: u, password: p }, function( data ) {
      if(data.result==1){
        $("#logInOuter").effect("blind");
        $("#loginUserName").val("");
        $("#loginPassword").val("");
        localStorage.setItem( 'userId', data.id );
      }else{
        $("#loginFailed").show();
        $("#loginUserName").focus();
      }
    }, "json");
}
