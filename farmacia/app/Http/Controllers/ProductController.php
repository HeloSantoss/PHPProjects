<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Exibe uma lista de todos os produtos.
     *
     * @return View
     */
    public function index(): View
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Exibe o formulário para criar um novo produto.
     *
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * Armazena um novo produto no banco de dados.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0', // Adicionei uma restrição para o preço não ser negativo
            'type' => 'required|in:medication,service',
        ]);

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Produto adicionado com sucesso.');
    }

    /**
     * Exibe o formulário para editar um produto existente.
     *
     * @param Product $product
     * @return View
     */
    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Atualiza um produto existente no banco de dados.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0', // Adicionei uma restrição para o preço não ser negativo
            'type' => 'required|in:medication,service',
        ]);

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso.');
    }

    /**
     * Remove um produto do banco de dados.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produto removido com sucesso.');
    }
}
