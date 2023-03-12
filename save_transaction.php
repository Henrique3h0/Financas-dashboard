<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $date = $_POST['date'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    if ($date && $category && $description && $amount) {

        $transactions_json = file_get_contents('transactions.json');
        $transactions = json_decode($transactions_json, true);


        $new_transaction = [
            'date' => $date,
            'category' => $category,
            'description' => $description,
            'amount' => $amount
        ];


        $transactions[] = $new_transaction;


        $transactions_json = json_encode($transactions);
        file_put_contents('transactions.json', $transactions_json);


        header('Location: index.php');
        exit;
    } else {
        $error_message = 'Por favor, preencha todos os campos.';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Salvar Transação</title>
</head>

<body>

    <?php if (isset($error_message)) : ?>
        <p class="error"><?= $error_message ?></p>
    <?php endif; ?>

</body>

</html>