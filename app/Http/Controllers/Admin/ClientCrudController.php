<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClientRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ClientCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ClientCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Client');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/client');
        $this->crud->setEntityNameStrings('client', 'clients');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
       // $this->crud->setFromDb();
      // 'nom','telephone','mobile','civilite','adresse','entreprise','profession'
       $this->crud->addColumn([
        'name' => 'nom',
        'type' => 'text',
        'label' => "Nom et prénoms",
      ]);
      $this->crud->addColumn([
        'name' => 'telephone',
        'type' => 'text',
        'label' => "Téléphone",
      ]);
      $this->crud->addColumn([
        'name' => 'email',
        'type' => 'text',
        'label' => "Email",
      ]);
      $this->crud->addColumn([
        'name' => 'civilite',
        'type' => 'text',
        'label' => "Civilité",
      ]);
      $this->crud->addColumn([
        'name' => 'adresse',
        'type' => 'text',
        'label' => "Adresse Géographique",
      ]);
      $this->crud->addColumn([
        'name' => 'entreprise',
        'type' => 'text',
        'label' => "Entreprise",
      ]);
      $this->crud->addColumn([
        'name' => 'profession',
        'type' => 'text',
        'label' => "Profession",
      ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ClientRequest::class);

        // TODO: remove setFromDb() and manually define Fields
      //  $this->crud->setFromDb();

      $this->crud->addField([
        'name' => 'nom',
        'type' => 'text',
        'label' => "Nom et prénoms",
      ]);
      $this->crud->addField([
        'name' => 'telephone',
        'type' => 'text',
        'label' => "Téléphone",
      ]);
      $this->crud->addField([
        'name' => 'email',
        'type' => 'text',
        'label' => "Email",
      ]);
      $this->crud->addField([
        'name' => 'civilite',
        'type' => 'text',
        'label' => "Civilité",
      ]);
      $this->crud->addField([
        'name' => 'adresse',
        'type' => 'text',
        'label' => "Adresse Géographique",
      ]);
      $this->crud->addField([
        'name' => 'entreprise',
        'type' => 'text',
        'label' => "Entreprise",
      ]);
      $this->crud->addField([
        'name' => 'profession',
        'type' => 'text',
        'label' => "Profession",
      ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
