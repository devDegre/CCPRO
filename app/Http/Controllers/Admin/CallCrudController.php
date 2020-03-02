<?php

namespace App\Http\Controllers\Admin;

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

/**
 * Class CallCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CallCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public $data = [];
    

    public function setup()
    {
        $this->crud->setModel('App\Models\Call');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/call');
        $this->crud->setEntityNameStrings('call', 'calls');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
      $this->crud->addColumn([
                'name' => 'created_at',
                'type' => 'time',
                'label' => "Date et heure",
          ]);
        $this->crud->addColumn([
          'label' => "Motif de l'appel",
          'type' => 'select',
          'name' => 'category_id', // the db column for the foreign key
         'entity' => 'category', // the method that defines the relationship in your Model
         'attribute' => 'name', // foreign key attribute that is shown to user
         'model' => "App\Models\Category", // foreign key model
        ]);
        $this->crud->addColumn([
  
          'label' => "Agent",
          'type' => 'select',
          'name' => 'user_id', // the db column for the foreign key
         'entity' => 'user', // the method that defines the relationship in your Model
         'attribute' => 'name', // foreign key attribute that is shown to user
         'model' => "App\User", // foreign key model
         ]);

         $this->crud->addColumn([
  
          'label' => "Client",
          'type' => 'select',
          'name' => 'client_id', // the db column for the foreign key
         'entity' => 'client', // the method that defines the relationship in your Model
         'attribute' => 'nom', // foreign key attribute that is shown to user
         'model' => "App\Models\Client", // foreign key model
         ]);

         $this->crud->addColumn([
          'name' => 'motif',
          'type' => 'text',
          'label' => "Description",
        ]);

          //  $this->crud->addColumn([
    
          //   'label' => "Motif d'appel",
          //   'type' => 'select2_multiple',
          //   'name' => 'issues', // the db column for the foreign key
          //  'entity' => 'issues', // the method that defines the relationship in your Model
          //  'attribute' => 'content', // foreign key attribute that is shown to user
          //  'model' => "App\Models\Issue", // foreign key model
          //  ]);

    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CallRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();

       

          $this->crud->addField([
            'label' => "Motif de l'appel",
            'type' => 'select2',
            'name' => 'category_id', // the db column for the foreign key
           'entity' => 'category', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Category", // foreign key model
          ]);

     $this->crud->addField([
            'name' => 'motif',
            'type' => 'text',
            'label' => "Description",
          ]);

        

          $this->crud->addField([
    
            'label' => "Agent",
            'type' => 'select2',
            'name' => 'user_id', // the db column for the foreign key
           'entity' => 'user', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\User", // foreign key model
           ]);

           $this->crud->addField([
    
            'label' => "Client",
            'type' => 'select2',
            'name' => 'client_id', // the db column for the foreign key
           'entity' => 'client', // the method that defines the relationship in your Model
           'attribute' => 'nom', // foreign key attribute that is shown to user
           'model' => "App\Models\Client", // foreign key model
           ]);

           
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }



    

    public function EnterringCall(CallRequest $request)

    {

     
      $this->data['categories']=Category::all();
      //$this->data['calls']=Call::all();

         $user_calls = DB::table('calls')
         ->rightJoin('clients', 'calls.client_id', '=', 'clients.id')
         ->leftJoin('categories','categories.id' , '=','calls.category_id' )
         ->leftJoin('users','users.id' , '=','calls.user_id' )
        ->where('clients.telephone','=',$request->telephone)
        ->select('calls.id','calls.created_at','clients.nom','users.name as user_name','categories.name as category_name','calls.motif')
         ->get();
      //  dd($user_calls);

      
           
        $this->data['calls']=$user_calls;

      if(isset($request->nom)){
        $this->data['nomclient']=$request->nom;
      }
      if(isset($request->civilite)){
        $this->data['civiliteclient']=$request->civilite;
      }
      if(isset($request->email)){
        $this->data['emailclient']=$request->email;
      }
      if(isset($request->profession)){
        $this->data['professionclient']=$request->profession;
      }
      if(isset($request->entreprise)){
        $this->data['entrepriseclient']=$request->entreprise;
      }
      if(isset($request->adresse)){
        $this->data['adresseclient']=$request->adresse;
      }
      if(isset($request->prenom)){
        $this->data['prenomclient']=$request->prenom;
      }
      if(isset($request->telephone)){
        $this->data['telephoneclient']=$request->telephone;
      }
      
      
      
      
     
     
      
  
         
  
      $data= $this->data;
     

       return view(backpack_view('ccpro.user_data0'),compact('data'))->render();

    }

    public function AjaxCallStore(CallRequest $request)
    {

      
        
        $client= Client::where('telephone', '=', $request->telephone)->first();
            if($client==null){
            
            $newclient= new Client;
            $newclient->nom=$request->nom;
            $newclient->telephone=$request->telephone;
            $newclient->email=$request->email;
            $newclient->entreprise=$request->entreprise;
            $newclient->civilite=$request->civilite;
            $newclient->profession=$request->profession;
            $newclient->adresse=$request->adresse;
            $newclient->save();

            }else
            {
            $client->nom=$request->nom;
            $client->telephone=$request->telephone;
            $client->email=$request->email;
            $client->entreprise=$request->entreprise;
            $client->civilite=$request->civilite;
            $client->profession=$request->profession;
            $client->adresse=$request->adresse;
            $client->save();
            }

            
            $call=new Call;
            $call->user_id=backpack_user()->id;
            $call->client_id= Client::where('telephone','=' ,$request->telephone)->value('id');
            $call->category_id= Category::where('name','=', $request->motif)->value('id');
            $call->motif=$request->description;
            $call->save();
        


        return response()->json($call);
    
 
    }

    public function check(CallRequest $request){

      
      
      if (Client::where('telephone', '=', $request->telephone)->exists()) {
        $client= Client::where('telephone', '=', $request->telephone)->first();
        
        $check=1;
       // 'telephone','email','civilite','adresse','entreprise','profession'
        $data=[ 
          'check'   => $check,
          'nom'   => $client->nom,
          'prenom'   => $client->prenom,
          'telephone'   => $client->telephone,
          'adresse'   => $client->adresse,
          'entreprise'   => $client->entreprise,
          'profession'   => $client->profession,
          'email'   => $client->email,
          'civilite'   => $client->civilite,

      ];

        return \Response::json($data);
     }else{
      $check=0;

      return \Response::json([ 'check'   => $check, 'telephone' => $request->telephone]);

     }

    }
    public function AjaxEditClient(CallRequest $request)
    {
      
    }

    public function AjaxRead()
    {
      # code...
    }
}
