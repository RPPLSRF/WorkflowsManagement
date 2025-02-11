<?php

namespace App\Models;

use App\States\SubmitMissionState;
use Spatie\ModelStates\HasStates;
use Illuminate\Database\Eloquent\Model;

class SubmitMission extends Model{
  use HasStates;

  protected $fillable = ["amount", "state"];

  protected $casts = [
    "amount" => "decimal",
    'state' => SubmitMissionState::class,
  ];

}
