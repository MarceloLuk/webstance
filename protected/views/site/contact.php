<div class="navbar navbar-inner migalha">
    <div ><a class="Home" href="#">Principal</a> / <a  class="contato" href="#">Contato</a></div>
</div>
<div class="title"><span class="mark">&nbsp;</span>&nbsp;Contato
<p>
    Entre em contato agora mesmo, Obrigado.
</p></div>
<h1></h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>



<div class="form" style="width:80%;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nome'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'E-mail'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Assunto'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128,'style'=>'width:90%')); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Conteudo'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50,'style'=>'width:90%')); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row buttons">
            <input id="enviar-contato" name="enviar-contato"  type="button" class="btn btn-primary" style="float: right;" value="Enviar"/>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>