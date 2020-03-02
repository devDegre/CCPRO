@extends(backpack_view('blank'))



@section('content')

<div class="row">

<!-- THE ACTUAL CONTENT -->
<div class="{{ $crud->getListContentClass() }}">
  <div class="">

    <div class="row mb-0">
      <div class="col-6">
        @if ( $crud->buttons()->where('stack', 'top')->count() ||  $crud->exportButtons())
        <div class="hidden-print {{ $crud->hasAccess('create')?'with-border':'' }}">

          @include('crud::inc.button_stack', ['stack' => 'top'])

        </div>
        @endif
      </div>
      <div class="col-6">
          <div id="datatable_search_stack" class="float-right"></div>
      </div>
    </div>

    {{-- Backpack List Filters --}}
    @if ($crud->filtersEnabled())
      @include('crud::inc.filters_navbar')
    @endif

    <div class="overflow-hidden mt-2">

    <table id="crudTable" class="bg-white table table-striped table-hover nowrap rounded shadow-xs border-xs" cellspacing="0">
        <thead>
          <tr>
            {{-- Table columns --}}
            @foreach ($crud->columns() as $column)
              <th
                data-orderable="{{ var_export($column['orderable'], true) }}"
                data-priority="{{ $column['priority'] }}"
                data-visible="{{ var_export($column['visibleInTable'] ?? true) }}"
                data-visible-in-modal="{{ var_export($column['visibleInModal'] ?? true) }}"
                data-visible-in-export="{{ var_export($column['visibleInExport'] ?? true) }}"
                >
                {!! $column['label'] !!}
              </th>
            @endforeach

            @if ( $crud->buttons()->where('stack', 'line')->count() )
              <th data-orderable="false" data-priority="{{ $crud->getActionsColumnPriority() }}" data-visible-in-export="false">{{ trans('backpack::crud.actions') }}</th>
            @endif
          </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
          <tr>
            {{-- Table columns --}}
            @foreach ($crud->columns() as $column)
              <th>{!! $column['label'] !!}</th>
            @endforeach

            @if ( $crud->buttons()->where('stack', 'line')->count() )
              <th>{{ trans('backpack::crud.actions') }}</th>
            @endif
          </tr>
        </tfoot>
      </table>

      
      <div id="bottom_buttons" class="hidden-print">
        @include('crud::inc.button_stack', ['stack' => 'bottom'])

        <div id="datatable_button_stack" class="float-right text-right hidden-xs"></div>
      </div>
      

    </div><!-- /.box-body -->

  </div><!-- /.box -->
</div>

</div>







<div class="{{ $widget['wrapperClass'] ?? '' }}">
	<div class="jumbotron mb-2">

	  
	  <h1 class="display-3">Bienvenue Monsieur {{backpack_user()->name }} </h1>
	  

	  
	  <p>Votre numéro Matricule CCPRO est {{backpack_user()->id }}, vous êtes @php $user_roles = backpack_user()->roles->pluck('name');     
                                                                                  $sep=' ';  
                                                                                  foreach($user_roles as $role_name){   
                                                                                    echo $sep.$role_name ;
                                                                                     $sep=$sep.' et  '; 
                                                                                     } ;   
                                                                                    
                                                                             @endphp </p>
	  

	  
	  <p class="lead">
	    <a class="btn btn-primary" href="{{ backpack_url('elfinder') }}" role="button">gestionnaire de fichiers</a>
	  </p>
	  
	</div>
</div>

@endsection


@php $widgets['after_content'][] = [
  'type' => 'div',
  'class' => 'row',
  'content' => [ // widgets 
     [
    'type'        => 'progress',
    'class'       => 'card text-white bg-primary mb-2',
    'value'       => '11',
    'description' => 'Appels effectués',
    'progress'    => 17, // integer
    'hint'        => '', ],

     [
    'type'        => 'progress',
    'class'       => 'card text-white bg-danger mb-2',
    'value'       => '11',
    'description' => 'Appels effectués',
    'progress'    => 17, // integer
    'hint'        => '', ],
    [
    'type'        => 'progress',
    'class'       => 'card text-white bg-success mb-2',
    'value'       => '11',
    'description' => 'Appels effectués',
    'progress'    => 17, // integer
    'hint'        => '', ],
    [
    'type'        => 'progress',
    'class'       => 'card text-white bg-info mb-2',
    'value'       => '11',
    'description' => 'Appels effectués',
    'progress'    => 17, // integer
    'hint'        => '', ],

  ]
]



@endphp
