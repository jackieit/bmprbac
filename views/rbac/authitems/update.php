<?php
/**
 * Created by PhpStorm.
 * User: lxp
 * Date: 2015/8/23
 * Time: 16:21
 */
use yii\helpers\Html;

$this->title = '授权项目管理';
$this->params['breadcrumbs'][] = ['label' => '授权项目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = '编辑';

$asset = bmprbac\rbac\RbacAsset::register($this);
?>
<div class="box box-info">
    <div class="box-body">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>