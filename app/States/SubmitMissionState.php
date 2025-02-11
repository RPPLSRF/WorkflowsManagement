<?php

namespace App\States;

use App\States\Approved;
use App\States\Rejected;
use App\States\Pending;
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

abstract class SubmitMissionState extends State{

  abstract public function color(): string;

  public static function config(): StateConfig{
    return parent::config()
            ->default(Pending::class)
            ->allowTransition(Pending::class, Approved::class)
            ->allowTransition(Pending::class, Rejected::class);
    }
}