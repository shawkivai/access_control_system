<?php
/* @var $this StatusController */
/* @var $model Status */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'status-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
//   'htmlOptions' => array('enctype' => 'multipart/form-data'),
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'user_id'); ?>
<!--		--><?php //echo $form->textField($model,'user_id'); ?>
<!--		--><?php //echo $form->error($model,'user_id'); ?>
<!--	</div>-->

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'designation'); ?>
<!--		--><?php //echo $form->dropDownList($model,'designation',array('Admin'=>'Admin','Agent'=>'Agent','User'=>'User')); ?>
<!--		--><?php //echo $form->error($model,'designation'); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'privacy'); ?>
		<?php echo $form->dropDownList($model,'privacy',array('public'=>'public','private'=>'private')); ?>
		<?php echo $form->error($model,'privacy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'share'); ?>
		<?php echo $form->dropDownList($model,'share',CHtml::listData(User::model()->findAll(),'id','username')); ?>

		<?php echo $form->error($model,'share'); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'status'); ?>
<!--		--><?php //echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100)); ?>
<!--		--><?php //echo $form->error($model,'status'); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
<!--		--><?php //echo $form->fileField($model,'image',array('size'=>60,'maxlength'=>100)); ?>
<!--        --><?php //echo CHtml::form('','post',array('enctype'=>'multipart/form-data')); ?>
        <?php echo CHtml::activeFileField($model, 'image'); ?>

		<?php echo $form->error($model,'image'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->