<!DOCTYPE html>
<html>

<head>
    <title>Gerenciador Financeiro Pessoal</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" type="text/css" href="style_index.css">
</head>

<body>
    <h1>Gerenciador Financeiro Pessoal</h1>
    <a href="add_transaction.php">
        <button type="button">Criar transação</button>
    </a>
    <button onclick="toggleDarkMode()">Alternar tema</button>
    <br><br>
    <?php include 'transactions_table.php'; ?>
    <br><br>
    <?php include 'transactions_chart.php'; ?>
    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>

</html>