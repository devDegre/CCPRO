
@extends(backpack_view('blank'))

@section('header')
  
@endsection









@section('content')

<section class="oldhere">

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





</section class="oldhere">

@endsection



<section class="oldhere" >
<div id=" todeleted">

@php 

$widgets['after_content'][] = [
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


</div>



</section class="oldhere">





@section('nextcontent')



<div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12  divDuTab container-fluid" style="padding: 20px;">
                 <ul id="tab-nav">
                    
                </ul>
                  
                   
     </div>
</div>



@endsection
    




@section('after_styles')
  <!-- DATA TABLES -->
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
  <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/form.css') }}">
  <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/list.css') }}">

  <!-- CRUD LIST CONTENT - crud_list_styles stack -->
  @stack('crud_list_styles')
@endsection

@section('beforeloaded')
	

  <script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
  <script src="{{ asset('packages/backpack/crud/js/form.js') }}"></script>
  <script src="{{ asset('packages/backpack/crud/js/list.js') }}"></script>

  
  
  
  <!-- data tables -->
  <script src=" {{asset('package/ultimate/assets/plugins/datatables/jquery.dataTables.min.js')}}  " ></script>
  <script src="{{asset('package/ultimate/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}} " ></script>
  <script src="{{asset('package/ultimate/assets/js/pages/table/table_data.js')}} " ></script>
  <!-- Common js-->
 

  <!-- animation -->
    
  <script src="{{asset('packages/ccpro/jquery.js')}}"></script>

  
  <script src="{{ asset('package/ultimate/assets/plugins/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/plugins/popper/popper.min.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/plugins/jquery-blockui/jquery.blockui.min.js') }}" ></script>
	<script src="{{ asset('package/ultimate/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('package/ultimate/assets/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
    
	<script src="{{ asset('package/ultimate/assets/js/app.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/js/layout.js') }}" ></script>
	<script src="{{ asset('package/ultimate/assets/js/theme-color.js') }}" ></script>
	<!-- Material -->
	<script src="{{ asset('package/ultimate/assets/plugins/material/material.min.js') }}"></script>
	<!-- animation -->
	<script src="{{ asset('package/ultimate/assets/js/pages/ui/animations.js') }}" ></script>


  
          <script type="text/javascript">
           
                  
                  $(document).ready(function() {
    
                  var id_tab='08'+ Math.floor(100000 + Math.random() * 900000);



                     $('.nh_button').click(function(e){
                       e.preventDefault();
                     $(".oldhere").hide();
                      

                      $("#tab-nav ").append(' <li><a href="#" id="sys'+id_tab+'" data-tab="'+id_tab+'" class="tab-nav-active"><span aria-hidden="true"  class="icon-call-in" style="color: #34C924; font-size:20px;"></span>'+id_tab+'</a></li>');

                      $(".divDuTab ").append('<div id="onglet'+id_tab+'" class="tab tab-active container-fluid" style="padding:30px;"></div>');
                      
                      $("div #onglet"+id_tab).load("/rebron1/public/admin/getuserdata");

                      $('.tab').removeClass('tab-active');

                      $('#tab-nav a').removeClass('tab-nav-active');

                      $(' #sys'+id_tab).addClass('tab-nav-active');


                      $('div #onglet'+id_tab).addClass('tab-active');

                     
                          
                      
                      
                      id_tab='08'+ Math.floor(100000 + Math.random() * 900000);



                    
                      
                    });
                      
                    

                     $('#tab-nav').on('click', 'a',function(e){
    
                    //     /* On désactive l'action par défaut des liens */
                        e.preventDefault();
                    //     /* On récupère la valeur de l'onglet à activer */
                       var tab = $(this).data('tab');

                      
                         /* On masque tous les contenus */
                         $('.tab').removeClass('tab-active');
                         /* On affiche le contenu qui doit l'être */
                         $('div #onglet'+tab).addClass('tab-active');
                         /* On désactive tous les onglets */
                         $('#tab-nav a').removeClass('tab-nav-active');
                         /* On active l'onglet qui a été cliqué */
                         $(this).addClass('tab-nav-active');
                     });
 

                 });
          </script>



            
@endsection




    
    
    


         



<!-- end page content -->
<!-- start chat sidebar -->
<!-- Modal -->
    
          




























