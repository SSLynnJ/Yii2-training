
<?php
use yii\widgets\ActiveForm;

use yii\helpers\Html;
?>

<h1>Создать событие</h1>

<?php
 $form = ActiveForm::begin()?>
<?$form->field($newone, 'title')?>
<?$form->field($newone, 'startDay')?>
<?$form->field($newone, 'endDay')?>
<?$form->field($newone, 'description')?>


<?php ActiveForm::end()?>


