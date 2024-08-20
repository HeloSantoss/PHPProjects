<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Exibe uma lista de todos os clientes.
     *
     * @return View
     */
    public function index(): View
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Exibe o formulário para criar um novo cliente.
     *
     * @return View
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /**
     * Armazena um novo cliente no banco de dados.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'phone' => 'nullable|string|max:15',
        ]);

        Client::create($validatedData);

        return redirect()->route('clients.index')->with('success', 'Cliente adicionado com sucesso.');
    }

    /**
     * Exibe o formulário para editar um cliente existente.
     *
     * @param Client $client
     * @return View
     */
    public function edit(Client $client): View
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Atualiza um cliente existente no banco de dados.
     *
     * @param Request $request
     * @param Client $client
     * @return RedirectResponse
     */
    public function update(Request $request, Client $client): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients,email,' . $client->id,
            'phone' => 'nullable|string|max:15',
        ]);

        $client->update($validatedData);

        return redirect()->route('clients.index')->with('success', 'Cliente atualizado com sucesso.');
    }

    /**
     * Remove um cliente do banco de dados.
     *
     * @param Client $client
     * @return RedirectResponse
     */
    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente removido com sucesso.');
    }
}
