<?php

namespace App\States;

use App\States\SubmitMissionState;

class Approved extends SubmitMissionState{
  public function color(): string
  {
    return 'green';
  }
}