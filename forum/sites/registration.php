			<script>
			$("head").append('<script src="../scripts/registration.js">');
			$("head").append('<script src="https://www.google.com/recaptcha/api.js">');
			</script>
			<div class="registration">

				<div class="registration c">
				<div class="title form">Registracija</div>

				<form id="regForm" method="post" action="/DAL/userAdd.php">

					<div class="label form">Vaše ime in priimek:<span class="regError name"></span></div>
					<input type="text" name="Name" id="Name" maxlength="2048" /></label>
					<div class="label form">Vaš e-poštni naslov:<span class="regError email"></span></div>
					<input type="email" name="Email" id="Email" maxlength="255" /></label>

					<div class="label form">Željeno uporabniško ime:<span class="regError user"></span></div>
					<input type="text" name="Usrname" id="Usrname" maxlength="2048" /></label>

					<div class="label form">Geslo:<span class="regError password"></span></div>
					<input type="password" name="Pass" id="Pass" maxlength="2048" /></label>
					<div class="label form">Ste robot?<span class="regError recaptcha"></span></div>
					<div class="g-recaptcha" id="Recaptcha" data-sitekey="6LdEOxQTAAAAAAH7LhzkFm9HGZaDPxUaJl_3qj2f"></div>
					<input type="button" value="REGISTRACIJA" id="Raised" />
				</input>
				</form>
				</div>
				<div id="sent" style="display:none">
					abc
				</div>

			</div>
