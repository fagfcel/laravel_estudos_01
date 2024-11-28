<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request):void
    {
        echo "Sigle Action Controller";
        echo "</br>";
        echo $this->priveteMethod();
    }

    public function priveteMethod():string
    {
        return "Privato Method!";
    }
}
