<?php 
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
	<li><label>Name:<?= Html::encode($model->name) ?></label></li>
	<li><label>Name:<?= Html::encode($model->email) ?></label></li>
</ul>