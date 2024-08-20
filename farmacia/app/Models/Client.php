<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Client extends Model
{
    use HasFactory;

    /**
     * Atributos atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    /**
     * Obtém as vendas associadas ao cliente.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
   

}
