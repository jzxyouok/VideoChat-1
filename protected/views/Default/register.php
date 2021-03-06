<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - register';
$this->breadcrumbs = array(
    'register',
);
?>


<h1>用户注册</h1>
<?php $form = $this->beginWidget('CActiveForm', array(
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
)); ?>
<table>
    <tr>
        <td> <?php echo $form->label($user_model, 'user_name'); ?></td>
        <td> <?php echo $form->textField($user_model, 'user_name') ?></td>
        <td><?php echo $form->error($user_model, 'user_name'); ?></td>
    </tr>
    <tr>
        <td><?php echo $form->label($user_model, 'password'); ?></td>
        <td><?php echo $form->passwordField($user_model, 'password') ?></td>
        <td><?php echo $form->error($user_model, 'password'); ?></td>
    </tr>

    <tr>
        <td><?php echo $form->label($user_model, 'password2'); ?></td>
        <td><?php echo $form->passwordField($user_model, 'password2') ?></td>
        <td><?php echo $form->error($user_model, 'password2'); ?></td>
    </tr>
    <tr>
        <td><?php echo $form->label($user_model, 'email'); ?></td>
        <td><?php echo $form->emailField($user_model, 'email'); ?></td>
        <td><?php echo $form->error($user_model, 'email'); ?></td>
    </tr>

    <tr>
        <td><?php echo $form->labelEx($user_model, 'verifyCode'); ?></td>
        <td><?php echo $form->textField($user_model, 'verifyCode', array('size' => 15, 'class' => 'inputBg', 'maxlength' => 6)); ?></td>
        <td><?php $this->widget('CCaptcha') ?></td>
        <td><?php echo $form->error($user_model, 'verifyCode'); ?></td>

    </tr>

    <tr>
        <td><?php echo CHtml::submitButton('注册');
            ?></td>
        <td>
            <button type="button" id="login">登录</button>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            if (Yii::app()->user->hasFlash('success')) {
                echo Yii::app()->user->getFlash('success');
            }
            ?>
        </td>
    </tr>
</table>
<?php $this->endWidget(); ?>

