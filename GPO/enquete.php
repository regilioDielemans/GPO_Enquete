<?php require 'includes/header.php'; ?>

<form method="post" action="controller.php" role="form" >


			<h1>GPO enquete</h1>

			
			<div class="form-group col-md-8">
				<label for="rol">1. Is er binnen 500 meter een invalidenparkeerplaats (let op in Oosterhout mag je met een IPK op alle parkeerplaatsen gratis parkeren.)</label>
			</div>
			<div class="form-group col-md-4">
					<input type="radio" name="vraag1" id="inlineRadio1" value="option1"> ja
					<input type="radio" name="vraag1" id="inlineRadio2" value="option2"> nee
			</div>
				
			<div class="form-group col-md-8">
				<label for="rol">2. Is er binnen 500 meter een algemene parkeergelegenheid</label>
			</div>

			<div class="form-group col-md-4">
					<input type="radio" name="vraag2" id="inlineRadio1" value="option1"> ja
					<input type="radio" name="vraag2" id="inlineRadio2" value="option2"> nee
			</div>
				
			
			<div class="form-group col-md-8">
				<label for="rol">3. Is er binnen 500 meter een bushalte</label>
			</div>
			<div class="form-group col-md-4">
					<input type="radio" name="vraag3" id="inlineRadio1" value="option1"> ja
					<input type="radio" name="vraag3" id="inlineRadio2" value="option2"> nee
			</div>

			<div class="form-group col-md-12">
				<input type="submit" value="volgende" name="enquete" class="btn btn-large">
			</div>
		</form>

<?php require 'includes/footer.php'; ?>
