<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];
    protected $guardef = ['id', 'created_at', 'update_at'];
    protected $table = 'categorias';

    public function despesas() {
        return $this->belongsTo(Despesa::class);
    }
}
