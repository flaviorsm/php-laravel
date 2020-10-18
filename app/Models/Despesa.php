<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'data', 'valor', 'categoria_id'];
    protected $guardef = ['id', 'created_at', 'update_at'];
    protected $table = 'despesas';

    public function categorias() {
        return $this->asMany(Categoria::class);
    }
}
