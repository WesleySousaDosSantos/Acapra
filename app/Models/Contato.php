<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Contato extends Model
{
  use HasFactory;

  public $timestamps = false;

  protected $fillable = [
    'id',
    'name',
    'email',
    'phone',
    'subject',
    'message',
  ];
  const CREATED_AT = 'created_at';

  public function getDataFormatadaAttribute()
  {
    $data = Carbon::parse($this->created_at);

    if ($data->isToday()) {
      return 'Hoje, ' . $data->format('H:i');
    } elseif ($data->isYesterday()) {
      return 'Ontem, ' . $data->format('H:i');
    }

    return $data->format('d/m/Y, H:i');
  }

  public function getAssuntoFormatadoAttribute()
  {
    $map = [
      'adocao_animal' => 'Adoção de Animal',
      'doacao' => 'Doação',
      'voluntario' => 'Voluntariado',
      'resgate' => 'Resgate de Animal',
      'outro' => 'Outro Assunto',
    ];

    return $map[$this->subject] ?? $this->subject;
  }
}
