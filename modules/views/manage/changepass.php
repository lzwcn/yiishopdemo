<?php
	use yii\bootstrap\ActiveForm;
	use yii\helpers\Html;
    use yii\bootstrap\Alert;
?>   
    <link rel="stylesheet" href="assets/admin/css/compiled/new-user.css" type="text/css" media="screen" />
    <?php 
       if( Yii::$app->getSession()->hasFlash('info') ) {
         echo Alert::widget([
             'options' => [
                 'class' => 'alert-info', //这里是提示框的class
             ],
             'body' => Yii::$app->getSession()->getFlash('info'), //消息体
             ]);
         }
    ?>
    <!-- main container -->
    <!-- <div class="content"> -->
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="new-user">
                <div class="row-fluid header">
                    <h3>修改邮箱</h3>
                </div>

                <div class="row-fluid form-wrapper">
                    <!-- left column -->
                    <div class="span9 with-sidebar">
                        <div class="container">
                        	<?php $form=ActiveForm::begin([
                        		'options'=>['class'=>'new_user_form inline-input'],
                        		'fieldConfig'=>['template'=>'<div class="span12 field-box">{label}{input}</div>{error}'],
                        		]);?>
                            	<?=$form->field($model,'adminuser')->textInput(['class'=>'span9','disabled'=>true]);?>
                            	<?=$form->field($model,'adminpass')->passwordInput(['class'=>'span9']);?>
                            	<?=$form->field($model,'repass')->passwordInput(['class'=>'span9']);?>
                                
                                <div class="span11 field-box actions">
                                	<?=Html::submitButton('修改',['class'=>'btn-glow primary']);?>
                                    <span>或者</span>
                                    <?=Html::resetButton('取消',['class'=>'reset']);?>
                                </div>
                            
                           	<?php ActiveForm::end(); ?>
                        </div>
                    </div>

                    <!-- side right column -->
                    <div class="span3 form-sidebar pull-right">
                        
                        <div class="alert alert-info hidden-tablet">
                            <i class="icon-lightbulb pull-left"></i>
                            请在左侧填写管理员相关信息，包括管理员账号，电子邮箱，以及密码
                        </div>                        
                        <h6>重要提示：</h6>
                        <p>管理员可以管理后台功能模块</p>
                        <p>请谨慎添加</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
    <!-- end main container -->
