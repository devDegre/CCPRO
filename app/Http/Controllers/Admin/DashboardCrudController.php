<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\ClientRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Traits\HasRoles;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Notifications\Notifiable;
use App\Models\Category;
use App\Models\Issue;
use App\Models\Call;
use App\User;
use App\Models\BackpackUser;
use App\Models\Client;
use Illuminate\Routing\Controller;


/**
 * Class ClientCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */

class DashboardCrudController extends Controller
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use CrudTrait;
    use Notifiable;
    use HasRoles;

    public function setup()
    {
    //    $this->crud->setModel('App\Models\Dash');
  //      $this->crud->setRoute(config('backpack.base.route_prefix') . '/dash');
//$this->crud->setEntityNameStrings('dash', 'dashs');
    }



    public $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());

        
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,   ];
        

        $data=$this->data;


        if (backpack_user()->hasRole('Admin') ){

            //return view(backpack_view('ccpro.dashboard.agentDashboard'),$this->data);
            return view(backpack_view('ccpro.user_data'))->with($this->data);
           

        }elseif(backpack_user()->hasRole('Agent')){

           // return view(backpack_view('ccpro.dashboard.adminDashboard'),$this->data);
            return redirect(backpack_url('call'))->with($this->data);

        }elseif(backpack_user()->hasRole('Admin')) {

            //return view(backpack_view('blank'),$this->data);
            return view(backpack_view('ccpro.user_data'))->with($this->data);

        }

        
    }


    

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        dd(backpack_user());
        if(backpack_user()->hasRole('Agent')){
    
            return redirect(backpack_url('call'));
        }
        
    }



    









    //
}
