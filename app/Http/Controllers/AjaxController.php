<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Traits\HasRoles;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Notifications\Notifiable;
use App\Models\Category;
use App\Models\Call;
use App\User;
use App\Models\BackpackUser;
use App\Models\Client;
use Illuminate\Routing\Controller;
use Illuminate\Http\Response;

use Validator;

class AjaxController extends Controller
{

    public function check(Request $request){

        dd($request);

        $client= Client::where('telephone', '=', $request->telephone);
        
        if ($client==null) {
          $check=0;
          return response()->json([ 'check'   => $check]);
       }else{
        $check=1;
        return response()->json([ 'check'   => $check]);
  
       }
    }
    
    //
}
