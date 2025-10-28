<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Formulario extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'age',
        'renda',
        'animal_id',
        'address',
        'residential',
        'property',
        'petSpace',
        'familyAgreement',
        'hasOtherPets',
        'otherPets',
        'otherPetsVaccinated',
        'agreeVaccination',
        'aceita_termos',
        'aceita_visitas',
        'status',
        'rgPhoto',
        'incomeProof',
        'otherPetsPhotos',
        'fencePhoto'
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }

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
}
