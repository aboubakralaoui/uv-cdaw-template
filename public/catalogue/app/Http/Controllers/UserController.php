<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\film;
use App\Models\User;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserrController extends Controller
{
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    


}

?>
