<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="styleProduto.css">
</head>
<body>
    <div class="container">
        <h1>Adicionar Produto</h1>
        <form action="process_product.php" method="post">
            <div class="form-group">
                <label for="produto">Produto</label>
                <input type="text" id="produto" name="produto" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" required></textarea>
            </div>
            <div class="form-group">
                <label for="compra">CUSTO:</label>
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" id="data" name="data" required>
            </div>           
            <div class="form-group">
                <label for="compra">Compra</label>
                <input type="number" id="compra" name="compra" required>
            </div>
            <button type="submit" class="btn">Adicionar</button>
        </form>
    </div>
</body>
</html>