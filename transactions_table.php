<?php

$data = file_get_contents('transactions.json');
$transactions = json_decode($data, true);


echo '<table>';
echo '<tr><th>Data</th><th>Categoria</th><th>Descrição</th><th>Valor</th></tr>';
foreach ($transactions as $transaction) {
    echo '<tr>';
    echo '<td>' . $transaction['date'] . '</td>';
    echo '<td>' . $transaction['category'] . '</td>';
    echo '<td>' . $transaction['description'] . '</td>';
    echo '<td>R$ ' . $transaction['amount'] . '</td>';
    echo '</tr>';
}
echo '</table>';
