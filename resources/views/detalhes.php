<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Controle de estoque</title>
</head>
<body>
<div class="container">
    <h1>Detalhes do produto: <?= $p->nome ?> </h1>

    <ul>
        <li>
            <b>Valor:</b> R$ <?= $p->valor ?>
        </li>
        <li>
            <b>Descrição:</b> <?= $p->descricao ?>
        </li>
        <li>
            <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
        </li>
    </ul>
</div>
</body>
</html>