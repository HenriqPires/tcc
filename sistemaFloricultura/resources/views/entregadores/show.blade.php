<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Entregador</title>
</head>
<body>
    <h1>Detalhes do Entregador</h1>
    <p><strong>Nome:</strong> {{ $entregador->nome }}</p>
    <p><strong>Telefone:</strong> {{ $entregador->telefone }}</p>
    <p><strong>Email:</strong> {{ $entregador->email }}</p>
    <a href="{{ route('entregadores.index') }}">Voltar</a>
</body>
</html>
