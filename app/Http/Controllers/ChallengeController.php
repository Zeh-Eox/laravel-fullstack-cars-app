<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function sum(float $a, float $b)
    {
        return 'Somme : ' . ($a + $b);
    }

    public function substract(float $a, float $b)
    {
        return 'Soustraction : ' . ($a - $b);
    }
}
