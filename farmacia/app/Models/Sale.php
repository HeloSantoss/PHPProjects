<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 * 
 * @package App\Models
 * @property int $id
 * @property int $client_id
 * @property int $product_id
 * @property int $quantity
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Sale extends Model
{
    use HasFactory;

    /**
     * Atributos atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'product_id',
        'quantity',
        'total',
    ];

    /**
     * Obtém o cliente associado à venda.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Obtém o produto associado à venda.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
