<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController2 extends Controller
{
    public function generatePdf2()
    {
        // Dados da empresa
        $companyName = "Sua Empresa";
        $companyId = "12345";
        $companyAddress = "Endereço da Sua Empresa";

        // Dados do cliente
        $clientName = "Nome do Cliente";
        $clientId = "54321";

        // Itens do orçamento
        $items = [
            [
                'description' => 'Serviço 1',
                'quantity' => 2,
                'unitPrice' => 50.00,
                'totalPrice' => 100.00,
            ],
            [
                'description' => 'Serviço 2',
                'quantity' => 1,
                'unitPrice' => 75.00,
                'totalPrice' => 75.00,
            ],
            // Adicione mais itens conforme necessário
        ];

        // Cálculo do subtotal e total
        $subtotal = array_sum(array_column($items, 'totalPrice'));
        $total = $subtotal; // Adicione impostos, descontos, etc., se necessário

        // Carregar a visualização PDF com os dados
        $data = compact(
            'companyName',
            'companyId',
            'companyAddress',
            'clientName',
            'clientId',
            'items',
            'subtotal',
            'total'
        );

        $pdf = Pdf::loadView('welcome2', $data);

        return $pdf->stream('orcamento.pdf');
    }
}