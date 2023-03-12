<?php

$data = file_get_contents('transactions.json');
$transactions = json_decode($data, true);


$grouped_transactions = array_reduce($transactions, function ($result, $transaction) {
    $category = $transaction['category'];
    if (!isset($result[$category])) {
        $result[$category] = ['label' => $category, 'data' => 0];
    }
    $result[$category]['data'] += $transaction['amount'];
    return $result;
}, []);

$chart_data = [
    'labels' => array_keys($grouped_transactions),
    'datasets' => [
        [
            'label' => 'Montante financeiro',
            'data' => array_map(function ($category) {
                return $category['data'];
            }, $grouped_transactions),
            'backgroundColor' => [
                '#FF6384',
                '#36A2EB',
                '#FFCE56',
                '#8BFF82',
                '#EE82EE'
            ]
        ]
    ]
];



echo '<canvas class="myChart" id="myChart"></canvas>';
echo '<script>';
echo 'var ctx = document.getElementById("myChart").getContext("2d");';
echo 'var myChart = new Chart(ctx, { type: "bar", data: ' . json_encode($chart_data) . ' });';
echo '</script>';
