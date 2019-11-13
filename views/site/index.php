<?php
$this->title = 'My Yii Application';

use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use \app\models\Kpi;

$dataProvider = new ActiveDataProvider([
    'query' => Kpi::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);


?>
<div class="site-index">

    <div class="body-content">

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
        ]);
        ?>

    </div>
</div>
