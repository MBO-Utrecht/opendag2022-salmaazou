<section class="contact-bg">

<form id="contact-form" action="database.php"  method="POST">

<div class="container">
	<div class="row">
			<h1>Neem Contact met ons</h1>
	</div>
	<div class="row">
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="firstName" id="firstName" required />
					<label>Voornaam</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name="lastName" id="lastName" required />
					<label>Achternaam</label> 
				</div>
			</div>
            <div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input  type="email" name="Email" id="Email" required />
					<label>E-mail</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="PhoneNumber" id="PhoneNumber"required />
					<label>Moblie</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="textarea" id="textarea" required></textarea>
					<label>Stuur een Bricht</label>
				</div>
			</div>
			<div class="col-xs-12">
            <Input type="submit" name="submit" value="send"></Input>
			</div>
	</div>
</div>
</form>

</section>