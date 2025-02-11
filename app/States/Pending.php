<?php

namespace App\States;

use App\States\SubmitMissionState;

class Pending extends SubmitMissionState{
  public function color(): string
  {
    return 'yellow';
  }
}