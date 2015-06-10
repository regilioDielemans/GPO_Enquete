
<?php 
require 'header.php';	

?> 
<div class="page-header">
	<h1>Gpo enquete</h1>
</div>
<?php 
$db = new PDO('mysql:host=localhost;dbname=gpo_enquete', 'root', '');

$branche = 1;
if ( isset($_POST['location']) ) 
{
	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$location 	= $_POST['location'];
	
	switch ($location) {
		case 'winkel':
			$branche = 1;
			break;
		case 'restaurant':
			$branche = 2;
			break;

		case 'hotel':
			$branche = 3;
			break;

		case 'theater':
			$branche = 4;
			break;

		case 'bank':
			$branche = 5;
			break;

		case 'bibliotheek':
			$branche = 6;
			break;
	}

}


$queryBranch = $db->query("SELECT questions.question FROM branche_question as tbl_bq 
    INNER JOIN questions ON tbl_bq.question_id = questions.id 
    INNER JOIN branches ON tbl_bq.branche_id = branches.id WHERE 
    branches.id = $branche");

$query = $db->query("SELECT question from questions where id < 31 ");

$questions = $query->fetchAll(PDO::FETCH_OBJ);
$branche_question = $queryBranch->fetchAll(PDO::FETCH_OBJ);

$i = 1;
echo'<form method="post" action="controller.php" role="form">';
foreach($questions as $question) {
	// echo '<p>' . $question->question . '</p>';


echo '<div class="form-group col-md-8">';
echo '<label for="rol">' . $i 	.	'. ' 	. $question->question . '</label>';
echo'			</div>';
echo'			<div class="form-group col-md-4">';
echo'					<input type="radio" name="' . $i . '" id="inlineRadio1" value="1"> ja';
echo'					<input type="radio" name="' . $i . '" id="inlineRadio2" value="0"> nee';
echo'		</div>';
$i++;
}
echo '<input type="submit" value="volgende" name="submit" class="btn btn-large">';
?>