<?php
/**
 * @var \yii\web\View $this
 * @var JobFilter $filter
 */

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use zhuravljov\yii\queue\monitor\assets\JobItemAsset;
use zhuravljov\yii\queue\monitor\filters\JobFilter;
use zhuravljov\yii\queue\monitor\Module;
use zhuravljov\yii\queue\monitor\widgets\FilterBar;

$this->params['breadcrumbs'][] = Module::t('main', 'Dashboard');

?>
<div class="queue-dashboard">
    <div class="row">
        <div class="col text-right">
            <h3>Estimated time to complete backlog: <?= $totalEstimatedTimeRemaining ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?= GridView::widget([
                'dataProvider' => $pushedJobDataProvider,
                'columns' => [ 'job_class','delayed','success','buried','stopped','inProgress','backlogged','average','estimated' ]
                ]) ?>
        </div>
    </div>
</div>
