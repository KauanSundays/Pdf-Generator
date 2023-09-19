<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $companyName }}</title>
    <style>
        /* Estilos CSS aqui */

        /* Exemplo de estilo para cabeçalho */
        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* Exemplo de estilo para tabela de itens */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        /* Estilo para informações da empresa e do cliente */
        .info-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .info-box {
            width: 48%;
            border: 1px solid #ddd;
            padding: 10px;
        }

        /* Outros estilos conforme necessário */

    </style>
</head>
<body>
    <header>
        <h1>{{ $companyName }}</h1>
        <p>Orçamento</p>
    </header>
    <div class="info-container">
        <div class="info-box">
            <h2>Informações da Empresa:</h2>
            <p>ID: {{ $companyId }}</p>
            <p>Endereço: {{ $companyAddress }}</p>
            <!-- Adicione mais informações da empresa aqui -->
        </div>
        <div class="info-box">
            <h2>Informações do Cliente:</h2>
            <p>Nome: {{ $clientName }}</p>
            <p>ID: {{ $clientId }}</p>
            <!-- Adicione mais informações do cliente aqui -->
        </div>
    </div>
    <h2>Itens:</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Descrição do Item</th>
                <th>Quantidade</th>
                <th>Preço Unitário</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['description'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>R$ {{ $item['unitPrice'] }}</td>
                    <td>R$ {{ $item['totalPrice'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="info-container" style="font-size: 15">
        <div class="info-box">
            <h2>Total:</h2>
            <p>Subtotal: R$ {{ $subtotal }}</p>
            <!-- Adicione informações de impostos, descontos, etc. aqui -->
            <p>Descontos: 10% - <span style="color: red;">(R$: {{ number_format($desconto, 2, ',', '.') }})</span></p>
            <p>Total Geral: <span style="color: green;">R$ {{ $total }}</span></p>
        </div>
    </div>
</body>
</html>

