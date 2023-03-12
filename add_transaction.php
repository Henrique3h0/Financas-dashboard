<!DOCTYPE html>
<html>

<head>
    <title>Adicionar Transação</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <h1>Adicionar Transação</h1>
    <form method="post" action="save_transaction.php">
        <label for="date">Data:</label>
        <input type="date" name="date" required>
        <br><br>
        <label for="category">Categoria:</label>
        <select name="category" required>
            <option value="">Selecione uma categoria</option>
            <option value="Corrente">Corrente</option>
            <option value="Despesas">Despesas</option>
            <option value="Wallet">Wallet</option>
            <option value="Investimentos">Investimentos</option>
            <option value="Outros">Outros</option>
        </select>
        <br><br>
        <label for="description">Descrição:</label>
        <input type="text" name="description" required>
        <br><br>
        <label for="amount">Valor:</label>
        <input type="number" name="amount" step="0.01" required>
        <br><br>
        <input type="submit" value="Salvar">
    </form>
</body>

</html>