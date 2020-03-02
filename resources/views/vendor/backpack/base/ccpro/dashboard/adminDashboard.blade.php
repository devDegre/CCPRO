@extends(backpack_view('blank'))



@section('content')

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

