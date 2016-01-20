<?php
include("../../DAL/dbConfig.php");
try{
  $userName = htmlspecialchars($_POST["user"]);
  $password= htmlspecialchars($_POST["password"]);
  $sqli = dbConfig::connectDb();
	$error=false;
	// Check connection
  if ($sqli->connect_error) {
      $sqli->exit();
      $error=true;
  }
  //insert variables
	$Categorys=array();
	$IDs=array();
  $stmt = $sqli->prepare("CALL getCategorys();");
  if ($stmt->execute() === TRUE) {
    $stmt->bind_result($idCategory, $category);
		while ($stmt->fetch()) {
			$IDs[]=$idCategory;
			$Categorys[]=$category;
		}
  } else {
    $error=true;
  }
  $stmt->close();
  $sqli->close();
} catch (Exception $e) {
  	$error=true;
}
?>
<!--cleditor import-->
<link rel="stylesheet" href="../styles/code.css">
<link rel="stylesheet" href="../scripts/jquery/jquery-cleditor/jquery.cleditor.css">
<script src="../scripts/jquery/jquery-cleditor/jquery.cleditor.js"></script>
<script src="../scripts/jquery/jquery-cleditor/jquery.cleditor.extimage.js"></script>
<script src="../scripts/jquery/jquery-cleditor/cleditorRun.js"></script>
			<div class="registration">

				<div class="registration c">
				<div class="title form">Odpri novo temo</div>

				<form id="newForm" method="post" action="/DAL/threadAdd.php">

					<div class="label form">Naslov:</div>
					<input type="text" name="Title" id="Title" /></label>

					<div class="label form">Vsebina:</div><br>
					<textarea type="text" id="editor" /></textarea>

					<div class="label form">Oznake:</div>
					<input type="text" name="Tags" id="Tags" /></label>
					<div class="label form">Tema:</div>
						<select name="idCategory" class="md dropdown">
							<?php
									if(!$error){
										for($i=0;$i<count($Categorys);$i++) {
								      echo "<option value='".$IDs[$i]."'>".$Categorys[$i]."</option>";
								    }
									}
							?>
						 </select>
             <input type="hidden" name="Content" id="content" /></label>
             <input type="hidden" name="TextContent" id="textContent" /></label>
             <input type="hidden" name="IDUser" id="idUser" /></label>
					<input type="submit" name="action" value="OBJAVI" id="Raised">

				</input>
				</form>
        <script>
        $("#newForm").submit(function(){
            var content=$("#editor").next("iframe").contents().find("body").html();
            var contentText=$("#editor").next("iframe").contents().find("body").text();
            $("#textContent").val(contentText);
            $("#content").val(content);
            $("#idUser").val(localStorage.getItem('userId'));
          });
        </script>
				</div>

				<div id="sent" style="display:none">
					abc
				</div>

			</div>
