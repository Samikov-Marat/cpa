<?php

namespace app\common;

class Report
{
    public function send()
    {
        $stat = (new \yii\db\Query())
            ->select([
                'SUM(clicks) AS sum_clicks',
                'SUM(leads) AS sum_leads',
                'SUM(revenue) AS sum_revenue',
                'SUM(event_2) AS sum_event_2'
            ])
            ->from('kpi')
            ->one();
        $message = 'Загрузка завершена ' . date('d.m.Y H:i:s') . PHP_EOL .
            'Статистика' . PHP_EOL .
            'SUM(clicks) = ' . $stat['sum_clicks'] . PHP_EOL .
            'SUM(leads) = ' . $stat['sum_leads'] . PHP_EOL .
            'SUM(revenue) = ' . $stat['sum_revenue'] . PHP_EOL .
            'SUM(event_2) = ' . $stat['sum_event_2'];

        \Yii::$app->mailer->compose()
            ->setFrom('Samikov.Marat@gmail.com')
            ->setTo('Samikov.Marat@gmail.com')
            ->setSubject('Отчёт о загрузке данных')
            ->setTextBody($message)
            ->send();
    }
}