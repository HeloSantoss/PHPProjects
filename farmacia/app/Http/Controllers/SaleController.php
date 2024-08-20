<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SaleController extends Controller
{
    /**
     * Exibe uma lista de todas as vendas.
     *
     * @return View
     */
    public function index(): View
    {
        $sales = Sale::with('client', 'product')->get();
        return view('sales.index', compact('sales'));
    }

    /**
     * Exibe o formulário para criar uma nova venda.
     *
     * @return View
     */
    public function create(): View
    {
        $clients = Client::all();
        $products = Product::all();
        return view('sales.create', compact('clients', 'products'));
    }

    /**
     * Armazena uma nova venda no banco de dados.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'total' => 'nullable|numeric|min:0', // 'total' é calculado e não deve ser passado pelo usuário
        ]);

        // Calcular o total com base na quantidade e no preço do produto
        $product = Product::findOrFail($validatedData['product_id']);
        $validatedData['total'] = $product->price * $validatedData['quantity'];

        // Cria a venda com os dados validados
        Sale::create([
            'client_id' => $validatedData['client_id'],
            'product_id' => $validatedData['product_id'],
            'quantity' => $validatedData['quantity'],
            'total' => $validatedData['total'],
        ]);

        return redirect()->route('sales.index')->with('success', 'Venda registrada com sucesso.');
    }
}
