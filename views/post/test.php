<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    $this->title = "Index";
?>

<h1>Test Action</h1>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm', 'target' => '/post/index/']]) ?>
<?=   $form->field( $model, 'name' )->label('Имя') ?>
<?=   $form->field( $model, 'email' )->input('email')?>
<?=   $form->field( $model, 'text' )->label('Текст сообщения')->textarea(['rows' => '5']) ?>
<?=   Html::submitButton( 'Отправить', ['class' => 'btn btn-success']) ?>
<?=   Html::resetButton(  'Сброс',     ['class' => 'btn btn-danger'] ) ?>
<?php ActiveForm::end() ?>


