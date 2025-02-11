<?php

namespace App\States;

use App\States\SubmitMissionState;

class Rejected extends SubmitMissionState{
  public function color(): string
  {
    return 'red';
  }
}