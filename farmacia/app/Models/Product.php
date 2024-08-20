<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $price
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Product extends Model
{
    use HasFactory;

    /**
     * Atributos atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'type',
    ];

    /**
     * Obtém as vendas associadas ao produto.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
