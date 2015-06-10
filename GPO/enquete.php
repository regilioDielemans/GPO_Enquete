<?php require __DIR__ . '/includes/header.php'; ?>

<?php
$branche = $_GET['location'];


$queryBranch = $db->query("SELECT questions.question, questions.id FROM branche_question as tbl_bq
    INNER JOIN questions ON tbl_bq.question_id = questions.id
    INNER JOIN branches ON tbl_bq.branche_id = branches.id WHERE
    branches.id = $branche");

$query = $db->query("SELECT * from questions where id < 31 ");

$questions = $query->fetchAll(PDO::FETCH_OBJ);
$branche_questions = $queryBranch->fetchAll(PDO::FETCH_OBJ);

?>

<form action="controllers/submissioncontroller.php" method="POST" class="col-md-12" style="padding: 20px">


        <h3>Algemeen</h3>
        <?php foreach($questions as $question): ?>
            <div class="row">
            <div class="form-group" style="border-bottom: 1px solid #ccc">
                <label class="checkbox-inline col-md-8" for="">
                    <?= $question->question ?>

                </label>
                <div class=" col-md-2 col-md-offset-1 inputs">
                <input type="radio" name="<?=$question->id?>" value="1"/> Ja
                <input type="radio" name="<?=$question->id?>" value="0"/> Nee
                </div>
            </div>
            </div>
        <?php endforeach; ?>

        <h4>Branche specifiek</h4>
        <?php foreach ($branche_questions as $question): ?>
            <div class="row">
                <div class="form-group" style="border-bottom: 1px solid #ccc">
                    <label class="checkbox-inline col-md-8" for="">
                        <?= $question->question ?>

                    </label>
                    <div class=" col-md-2 col-md-offset-1 inputs">
                        <input type="radio" name="<?= $question->id?>" value="1"/> Ja
                        <input type="radio" name="<?= $question->id?>" value="0"/> Nee
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <div class="row" style="margin-top: 20px">
    <input type="submit" class="btn btn-primary pull-right" value="Verzenden"/>
    </div>
</form>



<?php require 'includes/footer.php'; ?>
