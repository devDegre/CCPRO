@extends(backpack_view('layouts.top_left'))


@hasrole('Admin')
  @php
  $defaultBreadcrumbs = [
    trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
    $crud->entity_name_plural => url($crud->route),
    trans('backpack::crud.list') => false,
  ];

   //if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
    $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
     @endphp
    @section('header')
  <div class="container-fluid">
    <h2>
      <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
      <small id="datatable_info_stack">{!! $crud->getSubheading() ?? '' !!}</small>
    </h2>
  </div>
  @endsection
 @else
    @hasrole('Agent')
   
    
    @endhasrole
  @endhasrole

  @hasrole('Superviseur')
@php
  $defaultBreadcrumbs = [
    trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
    $crud->entity_name_plural => url($crud->route),
    trans('backpack::crud.list') => false,
  ];

  // if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
  $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp
  @section('header')
  
  <div class="container-fluid">
  
    <h2>
      <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
      <small id="datatable_info_stack">{!! $crud->getSubheading() ?? '' !!}</small>
    </h2>
  </div>
  @endsection

  @endhasrole

  


@section('content')
<!-- Default box -->

  <div class="row oldhere">

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


                @hasrole('Admin')
                      @if ( $crud->buttons()->where('stack', 'line')->count() )
                        <th data-orderable="false" data-priority="{{ $crud->getActionsColumnPriority() }}" data-visible-in-export="false">{{ trans('backpack::crud.actions') }}</th>
                      @endif
                @else
                  @hasrole('Agent')

                  @endhasrole
                @endhasrole

                @hasrole('Superviseur')
                    @if ( $crud->buttons()->where('stack', 'line')->count() )
                      <th data-orderable="false" data-priority="{{ $crud->getActionsColumnPriority() }}" data-visible-in-export="false">{{ trans('backpack::crud.actions') }}</th>
                    @endif
                @endhasrole

                

                
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

                @hasrole('Admin')
                    @if ( $crud->buttons()->where('stack', 'line')->count() )
                      <th>{{ trans('backpack::crud.actions') }}</th>
                    @endif
                @else
                  @hasrole('Agent')

                  @endhasrole
                @endhasrole

                @hasrole('Superviseur')
                    @if ( $crud->buttons()->where('stack', 'line')->count() )
                      <th>{{ trans('backpack::crud.actions') }}</th>
                    @endif
                @endhasrole


                


              </tr>
            </tfoot>
          </table>

          @if ( $crud->buttons()->where('stack', 'bottom')->count() )
          <div id="bottom_buttons" class="hidden-print">
            @include('crud::inc.button_stack', ['stack' => 'bottom'])

            <div id="datatable_button_stack" class="float-right text-right hidden-xs"></div>
          </div>
          @endif

        </div><!-- /.box-body -->

      </div><!-- /.box -->
    </div>

  </div>




@endsection

@hasrole('Agent')
    @section('nextcontent')



    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12  divDuTab container-fluid"  style='padding: 20px;'>
                    <ul id="tab-nav">
                        
                    </ul>
                      
                      
        </div>
    </div>



    @endsection
@endhasrole

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


<!-- <script type="text/javascript">
        //Numero de poste


  $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

              function strtrunc(str, max, add){
                  add = add || '[...]';
                  return (typeof str === 'string' && str.length > max ? str.substring(0, max) + add : str);
                };
                    
                     
        var id_tab;

        var call_cpt=0;
        
        var onlyfirst=1;


 <!-- ========================================================= -->
             <!-- ========= Tel_API ========== -->
 <!-- ========================================================= -->
<!-- 

        var Extension = "{{backpack_user()->extention }}"  ;

        console.log("valeur de l'extension : "+Extension);


        var resq = {
            Methode: null,
            Extension: null,
            CallingNumber: null,
            CalledNumber: null
        };

        resq.Methode = "registrer";
        resq.Extension = Extension;

        var text = JSON.stringify(resq);
        var socket = new WebSocket('ws://192.168.0.45/tel_api');
        socket.onopen = function () {
            console.log('Connected ...');
            socket.send(text);
             new Noty({
               type: "success",
              text: "<strong>Connection Effectuée</strong><br>Le serveur est en ligne"
           }).show();
        };
        socket.onmessage = function (evt) {
            var received_msg = evt.data;
console.log(received_msg);
            resq = JSON.parse(received_msg);
            switch (resq.Methode) {
                case "Handshaked":
                    break;
                case "ReceiveCall":
                    if (Extension == resq.Extension) {
                      // $("#num").val(resq.CallingNumber);
                        console.log(resq.CallingNumber);
                        call_cpt+=1;
                        $(".badge").html(call_cpt);
                       
                        id_tab=resq.CallingNumber;
                        $.ajax({
                          type:'POST',
                          url:'/rebron1/public/admin/checkIfRecordExist',
                         
                          dataType:'json',
                         
                          data:{ 
                            
                          
                          'telephone':id_tab,

                          },
                          success:function(data){

                            if(data.check==1){

                                $(".oldhere").hide();
   
                                $("#tab-nav ").append(' <li id="li'+id_tab+'"><a href="#" id="sys'+id_tab+'" data-tab="'+id_tab+'" class="tab-nav-active"><span aria-hidden="true"  class="icon-call-in" style="color: #34C924; font-size:20px;"></span>'+id_tab+'</a></li>');

                                $(".divDuTab ").append('<div id="onglet'+id_tab+'" class="tab tab-active container-fluid" style="padding:30px;"></div>');
                                if( onlyfirst!=1){
                                               

                                      $(".divDuTab").find(" #onglet"+id_tab).removeClass('tab-active');

                                      $('#tab-nav #sys'+id_tab).removeClass('tab-nav-active');
                                            

                                }else{

                                               //// garder les attributs de d'activation
                                                                                                
                                }

                                onlyfirst+=1; 
                                $.ajax({ 
                                    type: "GET",   
                                    url: '/rebron1/public/admin/getuserdata',
                                    //async: false,
                                    dataType:'html',
                                    data:{ 

                                                
                                          'nom'   : data.nom,
                                          'prenom'   : data.prenom,
                                          'telephone'  : data.telephone,
                                          'adresse'   : data.adresse,
                                          'entreprise'   : data.entreprise,
                                          'profession'   : data.profession,
                                          'email'   : data.email,
                                          'civilite'  : data.civilite,


                                    },
                                          
                                    success : function(text)
                                    {

                                      $("div #onglet"+id_tab).html(text);
                                      

                                        
                                         

                                    }
                                });


                            }else{
                                $(".oldhere").hide();
                                
                                $("#tab-nav ").append(' <li id="li'+id_tab+'" ><a href="#" id="sys'+id_tab+'" data-tab="'+id_tab+'" class="tab-nav-active"><span aria-hidden="true"  class="icon-call-in" style="color: #34C924; font-size:20px;"></span>'+id_tab+'</a></li>');

                                $(".divDuTab ").append('<div id="onglet'+id_tab+'" class="tab tab-active container-fluid" style="padding:30px;"></div>');
                                if( onlyfirst!=1){

                                    
                                      $(".divDuTab").find(" #onglet"+id_tab).removeClass('tab-active');

                                      $('#tab-nav #sys'+id_tab).removeClass('tab-nav-active');  
                                
                                }else{

                                                // garder les attributs de d'activation
                                }

                                onlyfirst+=1;
                                $.ajax({ 

                                      type: "GET",   
                                          url: '/rebron1/public/admin/getuserdata',
                                          //async: false,
                                          dataType:'html',
                                          data:{ 

                                                
                                                'nom'   : data.nom,
                                                'prenom'   : data.prenom,
                                                'telephone'  : data.telephone,
                                                'adresse'   : data.adresse,
                                                'entreprise'   : data.entreprise,
                                                'profession'   : data.profession,
                                                'email'   : data.email,
                                                'civilite'  : data.civilite,


                                          },
                                          
                                          success : function(text)
                                          {

                                            $("div #onglet"+id_tab).html(text);

                                            

                                          }
                                      });
                                  
                          }

                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                         console.log(XMLHttpRequest);
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                       
                    }
                       

                      });


                    }
                    break;
                default:
            }
        };
        socket.onclose = function () {
            console.log('connection closed');
            socket.onopen = function () {
                var req = {};
                req.Methode = "registrer";
                req.Extension = Extension;
                var rep_msg = JSON.stringify(req);
                console.log('Connected ...');
                socket.send(rep_msg);
            };
        };

        socket.onerror = function () {
            console.log('erreur');

            new Noty({
               type: "error",
              text: "<strong>Connection Impossible</strong><br>Veillez à établir la connection au serveur Téléphonique"
           }).show();
            socket.onopen = function () {
                var req = {};
                req.Methode = "registrer";
                req.Extension = Extension;
                var rep_msg = JSON.stringify(req);
                console.log('Connected ...');
                socket.send(rep_msg);
            };
        };

        $("#Decrocher").click(function (e) {
            e.preventDefault();

            var req = {};
            req.Methode = "AnswerCall";
            req.Extension = "1020";
            var text = JSON.stringify(req);
            socket.send(text);
        });

        $("#Appeler").click(function (e) {
            e.preventDefault();

            var req = {};
            req.Methode = "MakeCall";
            req.Extension = "1020";
            req.CalledNumber = $("#num").val();
            var text = JSON.stringify(req);
            socket.send(text);
        });
        $("#transf").click(function (e) {
            e.preventDefault();

            var req = {};
            req.Methode = "BlindTransfert";
            req.Extension = "1020";
            req.CalledNumber = $("#tranfert").val();
            var text = JSON.stringify(req);
            socket.send(text);
        });
        $("#transf2").click(function (e) {
            e.preventDefault();

            var req = {};
            req.Methode = "Transfert";
            req.Extension = "1020";
            req.CalledNumber = $("#tranfert").val();
            var text = JSON.stringify(req);
            socket.send(text);
        });
        $("#Grade").click(function (e) {
            e.preventDefault();

            var req = {};
            req.Methode = "Hold";
            req.Extension = "1020";
            //req.CalledNumber = $("#tranfert").val();
            var text = JSON.stringify(req);
            socket.send(text);
         }); </script>-->

       
    



  
 <script type="text/javascript">
            // alert("pain sucré");
             
                  
                  $(document).ready(function() {
                   

                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    function strtrunc(str, max, add){
                        add = add || '[...]';
                        return (typeof str === 'string' && str.length > max ? str.substring(0, max) + add : str);
                      };
                    
                     


                     
    
                  //var id_tab='8825854'+ Math.floor(1 + Math.random() * 9);
                var id_tab;

                var call_cpt=0;
                
                var onlyfirst=1;

// <!-- ========================================================= -->
//               <!-- ========= Tel_API ========== -->
// <!-- ========================================================= -->

                var Extension = "{{backpack_user()->extention }}"  ;

                console.log("valeur de l'extension : "+Extension);

                var resq = {
                Methode: null,
                Extension: null,
                CallingNumber: null,
                CalledNumber: null
                };

                resq.Methode = "registrer";
                resq.Extension = Extension;

                var text = JSON.stringify(resq);
                var socket = new WebSocket('ws://192.168.0.45/tel_api');
                socket.onopen = function () {
                console.log('Connected ...');
                socket.send(text);
                  new Noty({
                    type: "success",
                  text: "<strong>Connection Effectuée</strong><br>Le serveur est en ligne"
                }).show();
                };
                socket.onmessage = function (evt) {
                var received_msg = evt.data;
                console.log(received_msg);
                resq = JSON.parse(received_msg);
                switch (resq.Methode) {
                    case "Handshaked":
                        break;
                    case "ReceiveCall":
                        if (Extension == resq.Extension) {
                          // $("#num").val(resq.CallingNumber);
                            console.log(resq.CallingNumber);
                            call_cpt+=1;
                            $(".badge").html(call_cpt);
                            
                            id_tab=resq.CallingNumber;
                            $.ajax({
                              type:'POST',
                              url:'/rebron1/public/admin/checkIfRecordExist',
                              
                              dataType:'json',
                              
                              data:{ 
                                
                              
                              'telephone':id_tab,

                              },
                              success:function(data){

                                if(data.check==1){

                                    $(".oldhere").hide();

                                    $("#tab-nav ").append(' <li id="li'+id_tab+'"><a href="#" id="sys'+id_tab+'" data-tab="'+id_tab+'" class="tab-nav-active"><span aria-hidden="true"  class="icon-call-in" style="color: #34C924; font-size:20px;"></span>'+id_tab+'</a></li>');

                                    $(".divDuTab ").append('<div id="onglet'+id_tab+'" class="tab tab-active container-fluid" ></div>');
                                    
                                    if( onlyfirst!=1){
                                                    

                                          $(".divDuTab").find(" #onglet"+id_tab).removeClass('tab-active');

                                          $('#tab-nav #sys'+id_tab).removeClass('tab-nav-active');
                                                

                                    }else{

                                         //// garder les attributs de d'activation
                                                                                                    
                                    }

                                    onlyfirst+=1; 
                                    $.ajax({ 
                                        type: "GET",   
                                        url: '/rebron1/public/admin/getuserdata',
                                        //async: false,
                                        dataType:'html',
                                        data:{ 

                                                    
                                              'nom'   : data.nom,
                                              'prenom'   : data.prenom,
                                              'telephone'  : data.telephone,
                                              'adresse'   : data.adresse,
                                              'entreprise'   : data.entreprise,
                                              'profession'   : data.profession,
                                              'email'   : data.email,
                                              'civilite'  : data.civilite,


                                        },
                                              
                                        success : function(text)
                                        {

                                          $("div #onglet"+id_tab).html(text);
                                          

                                            
                                              

                                        }
                                    });


                                }else{
                                    $(".oldhere").hide();
                                    
                                    $("#tab-nav ").append(' <li id="li'+id_tab+'" ><a href="#" id="sys'+id_tab+'" data-tab="'+id_tab+'" class="tab-nav-active"><span aria-hidden="true"  class="icon-call-in" style="color: #34C924; font-size:20px;"></span>'+id_tab+'</a></li>');

                                    $(".divDuTab ").append('<div id="onglet'+id_tab+'" class="tab tab-active container-fluid" ></div>');
                                    if( onlyfirst!=1){

                                        
                                          $(".divDuTab").find(" #onglet"+id_tab).removeClass('tab-active');

                                          $('#tab-nav #sys'+id_tab).removeClass('tab-nav-active');  
                                    
                                    }else{

                                                    // garder les attributs de d'activation
                                    }

                                    onlyfirst+=1;
                                    $.ajax({ 

                                          type: "GET",   
                                              url: '/rebron1/public/admin/getuserdata',
                                              //async: false,
                                              dataType:'html',
                                              data:{ 

                                                    
                                                    'nom'   : data.nom,
                                                    'prenom'   : data.prenom,
                                                    'telephone'  : data.telephone,
                                                    'adresse'   : data.adresse,
                                                    'entreprise'   : data.entreprise,
                                                    'profession'   : data.profession,
                                                    'email'   : data.email,
                                                    'civilite'  : data.civilite,


                                              },
                                              
                                              success : function(text)
                                              {

                                                $("div #onglet"+id_tab).html(text);

                                                

                                              }
                                          });
                                      
                              }

                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                              console.log(XMLHttpRequest);
                            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                            
                        }
                            

                          });


                        }
                        break;
                    default:
                }
                };
                socket.onclose = function () {
                console.log('connection closed');
                socket.onopen = function () {
                    var req = {};
                    req.Methode = "registrer";
                    req.Extension = Extension;
                    var rep_msg = JSON.stringify(req);
                    console.log('Connected ...');
                    socket.send(rep_msg);
                };
                };

                socket.onerror = function () {
                console.log('erreur');

                new Noty({
                    type: "error",
                  text: "<strong>Connection Impossible</strong><br>Veillez à établir la connection au serveur Téléphonique"
                }).show();
                socket.onopen = function () {
                    var req = {};
                    req.Methode = "registrer";
                    req.Extension = Extension;
                    var rep_msg = JSON.stringify(req);
                    console.log('Connected ...');
                    socket.send(rep_msg);
                };
                };
        $('.divDuTab').on('click','.AnswerCall',function(e){
            e.preventDefault();

            var req = {};
            req.Methode = "AnswerCall";
            req.Extension = Extension;
            var text = JSON.stringify(req);
            socket.send(text);
        });

        $('.body').on('click','.MakeCall',function(e){
            e.preventDefault();

            var req = {};
            req.Methode = "MakeCall";
            req.Extension = Extension;
            req.CalledNumber =  "752" ; ////$("#num").val();
            var text = JSON.stringify(req);
            socket.send(text);
        });
        $('.divDuTab').on('click','.BlindTransfert',function(e){
            e.preventDefault();

            var req = {};
            req.Methode = "BlindTransfert";
            req.Extension = Extension;
         //   req.CalledNumber = $("#tranfert").val();
            var text = JSON.stringify(req);
            socket.send(text);
        });

        $('.divDuTab').on('click','.Hold',function(e){
            e.preventDefault();

            var req = {};
            req.Methode = "Hold";
            req.Extension = Extension;
            //req.CalledNumber = $("#tranfert").val();
            var text = JSON.stringify(req);
            socket.send(text);
         });


// <!-- ========================================================= -->
//               <!-- ========= Web_Side ========== -->
// <!-- ========================================================= -->


                  $('.nh_button').on('click',function(e){
                       e.preventDefault();
                       call_cpt+=1;
                       $(".badge").html(call_cpt);
                      
                       id_tab=$('#Action').val();
                       $.ajax({
                        type:'POST',
                        url:'/rebron1/public/admin/checkIfRecordExist',
                       
                        dataType:'json',
                       
                        data:{ 
                          
                          
                          'telephone':id_tab,

                        },
                        success:function(data){

                          if(data.check==1){

                                $(".oldhere").hide();
   
                                $("#tab-nav ").append(' <li id="li'+id_tab+'"><a href="#" id="sys'+id_tab+'" data-tab="'+id_tab+'" class="tab-nav-active"><span aria-hidden="true"  class="icon-call-in" style="color: #34C924; font-size:20px;"></span>'+id_tab+'</a></li>');

                                $(".divDuTab ").append('<div id="onglet'+id_tab+'" class="tab tab-active container-fluid" ></div>');

                                if( onlyfirst!=1){
                                               

                                     $(".divDuTab").find(" #onglet"+id_tab).removeClass('tab-active');

                                     $('#tab-nav #sys'+id_tab).removeClass('tab-nav-active');
                                            

                                    }else{

                                               //// garder les attributs de d'activation
                                               //// console.log("first#1, suprimer suprimer le way courant");
                                                 
                                     }

                                      onlyfirst+=1; 
                                     $.ajax({ 

                                          type: "GET",   
                                          url: '/rebron1/public/admin/getuserdata',
                                          //async: false,
                                          dataType:'html',
                                          data:{ 

                                                
                                                'nom'   : data.nom,
                                                'prenom'   : data.prenom,
                                                'telephone'  : data.telephone,
                                                'adresse'   : data.adresse,
                                                'entreprise'   : data.entreprise,
                                                'profession'   : data.profession,
                                                'email'   : data.email,
                                                'civilite'  : data.civilite,


                                          },
                                          
                                          success : function(text)
                                          {

                                            $("div #onglet"+id_tab).html(text);
         

                                          }
                                      });


                          }else{
                                $(".oldhere").hide();
                                
                                $("#tab-nav ").append(' <li id="li'+id_tab+'" ><a href="#" id="sys'+id_tab+'" data-tab="'+id_tab+'" class="tab-nav-active"><span aria-hidden="true"  class="icon-call-in" style="color: #34C924; font-size:20px;"></span>'+id_tab+'</a></li>');

                                $(".divDuTab ").append('<div id="onglet'+id_tab+'" class="tab tab-active container-fluid"></div>');
                                if( onlyfirst!=1){

                                    
                                      $(".divDuTab").find(" #onglet"+id_tab).removeClass('tab-active');

                                      $('#tab-nav #sys'+id_tab).removeClass('tab-nav-active');  
                                      
                                 }else{

                                                // garder les attributs de d'activation
                                }

                                onlyfirst+=1;
                                $.ajax({

                                          type: "GET",   
                                          url: '/rebron1/public/admin/getuserdata',
                                          //async: false,
                                          dataType:'html',
                                          data:{ 

                                                
                                                'nom'   : data.nom,
                                                'prenom'   : data.prenom,
                                                'telephone'  : data.telephone,
                                                'adresse'   : data.adresse,
                                                'entreprise'   : data.entreprise,
                                                'profession'   : data.profession,
                                                'email'   : data.email,
                                                'civilite'  : data.civilite,


                                          },
                                          
                                          success : function(text)
                                          {

                                            $("div #onglet"+id_tab).html(text);

                                            

                                          }
                                      });
                                  

                            //
                          }

                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                         console.log(XMLHttpRequest);
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                       
                        }
                       

                        });
      
                      
                   });

  
                     $('#tab-nav').on('click', 'a',function(e){
    
                         /* On désactive l'action par défaut des liens */
                        e.preventDefault();
                         /* On récupère la valeur de l'onglet à activer */
                       var tab = $(this).data('tab');

                      
                         /* On masque tous les contenus */
                         $('.tab').removeClass('tab-active');
                         /* On affiche le contenu qui doit l'être */
                         $('div #onglet'+tab).addClass('tab-active');
                         /* On désactive tous les onglets */
                         $('#tab-nav a').removeClass('tab-nav-active');

                         $('div #onglet'+tab+' table').removeAttr('id');

                         $('div #onglet'+tab+' table').attr('id','userhis'+tab);
                        // $('div #onglet'+tab+' .mt-2 input').removeAttr('id');
      
                         oTable =  $('#userhis'+tab).DataTable({
                          
                           "paging": true,
                           "autoWidth": true,
                           "lengthMenu": [[3,5,8,10,15,25,-1],[3,5,8,10,15,25,"Tous"]],
                           pageLength: 8,
                         //  "scrollX": true,
                           aaSorting: [],
                           language: {
                                   "emptyTable":     "{{ trans('backpack::crud.emptyTable') }}",
                                   "info":           "{{ trans('backpack::crud.info') }}",
                                   "infoEmpty":      "{{ trans('backpack::crud.infoEmpty') }}",
                                   "infoFiltered":   "{{ trans('backpack::crud.infoFiltered') }}",
                                   "infoPostFix":    "{{ trans('backpack::crud.infoPostFix') }}",
                                   "thousands":      "{{ trans('backpack::crud.thousands') }}",
                                   "lengthMenu":     "{{ trans('backpack::crud.lengthMenu') }}",
                                   "loadingRecords": "{{ trans('backpack::crud.loadingRecords') }}",
                                   "processing":     "<img src='{{ asset('packages/backpack/crud/img/ajax-loader.gif') }}' alt='{{ trans('backpack::crud.processing') }}'>",
                                   "search":         "<span class='d-none d-sm-inline'>{{ trans('backpack::crud.search') }}</span>",
                                   "zeroRecords":    "{{ trans('backpack::crud.zeroRecords') }}",
                                   "paginate": {
                                       "first":      "{{ trans('backpack::crud.paginate.first') }}",
                                       "last":       "{{ trans('backpack::crud.paginate.last') }}",
                                       "next":       ">",
                                       "previous":   "<"
                                   },
                                   "aria": {
                                       "sortAscending":  "{{ trans('backpack::crud.aria.sortAscending') }}",
                                       "sortDescending": "{{ trans('backpack::crud.aria.sortDescending') }}"
                                   },
                                   "buttons": {
                                       "copy":   "{{ trans('backpack::crud.export.copy') }}",
                                       "excel":  "{{ trans('backpack::crud.export.excel') }}",
                                       "csv":    "{{ trans('backpack::crud.export.csv') }}",
                                       "pdf":    "{{ trans('backpack::crud.export.pdf') }}",
                                       "print":  "{{ trans('backpack::crud.export.print') }}",
                                       "colvis": "{{ trans('backpack::crud.export.column_visibility') }}"
                                   },
                               },
                               'columnDefs': [
                                              {
                                                'targets': 4,
                                                'render': function(data, type, full, meta){
                                                    if(type === 'display'){
                                                      data = strtrunc(data, 70);
                                                    }
                                                  
                                                    return data;
                                                }
                                              }
                                          ],
                               processing: true,
                               
                               dom:
                                 "<'row hidden'<'col-sm-6 hidden-xs'i><'col-sm-6 hidden-print'f>>" +
                                 "<'row'<'col-sm-12'tr>>" +
                                 "<'row mt-2 '<'col-sm-6 col-md-4'l><'col-sm-2 col-md-4 text-center'B><'col-sm-6 col-md-4 hidden-print'p>>",
   
                         }
                       );
                        $(this).addClass('tab-nav-active');
                       
                        $(this).parent('div').find('#searchInput').keyup(function(){
                              oTable.search($(this).val()).draw();
                        })

                      


                         });
  

            $('.divDuTab').on('click','.sendfile',function(e){
                     e.preventDefault();
                     console.log('boutton appuyé');
                  var num = $(this).data('num');
                  console.log('numéro:'+num);
                  var val= $(".divDuTab").find('#onglet'+num+' input[name=nom]').val();
                  

                 console.log('Valeur input nom:'+val);

                 $.ajax({ 
                   type: "POST",   
                    url: '/rebron1/public/admin/sendfile',
                    dataType: "json",
                    
                    data:{ 

                          
                          'nom'   :  $(".divDuTab").find('#onglet'+num+' input[name=nom]').val(),
                          'telephone'  :  num,
                          'adresse'   :   $(".divDuTab").find('#onglet'+num+' input[name=adresse]').val(),
                          'entreprise'   :   $(".divDuTab").find('#onglet'+num+' input[name=entreprise]').val(),
                          'profession'   :   $(".divDuTab").find('#onglet'+num+' input[name=profession]').val(),
                          'email'   :   $(".divDuTab").find('#onglet'+num+' input[name=email]').val(),
                          'civilite'  :   $(".divDuTab").find('#onglet'+num+' input[name=civilite]').val(),
                          'motif'  :   $(".divDuTab").find('#onglet'+num+' select[name=motif] option:selected').val(),
                          'description'  :   $(".divDuTab").find('#onglet'+num+' textarea[name=description]').val(),


                    },
                    
                    success : function(text)
                    {
                      
                      console.log('User Data stored !! ');
                      new Noty({
                               type: "success",
                              text: "<strong>Enregistrement Effectuée</strong><br>La fiche d'appel à été sauvegardée"
                           }).show();
                      $("#tab-nav ").find('#li'+num).remove();

                      $(".divDuTab ").find('#onglet'+num).remove();

                      $(".divDuTab ").find('div:first').addClass('tab-active');

                     var vide= $("#tab-nav ").find('a:first').addClass('tab-nav-active');

                      console.log('items deleted !! ');
                      if(vide.length==0){
                        onlyfirst=1;
                        $(".oldhere").fadeIn();
                        $("#crudTable").DataTable().ajax.reload();
                        //$('.item-nav').click(function (event) {
                              // Avoid the link click from loading a new page
                         //     event.preventDefault();
                       //  $('.ccpro-cont').load(reload);
                              // Load the content from the link's href attribute
                      

                      //console.log(reload);
                         // });

                      }

     
                    }


                   });
                                     
                                     
                 });
 

             
          });





  </script>

  







            
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

@section('after_scripts')
	@include('crud::inc.datatables_logic')

  <script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
  <script src="{{ asset('packages/backpack/crud/js/form.js') }}"></script>
  <script src="{{ asset('packages/backpack/crud/js/list.js') }}"></script>

  <!-- CRUD LIST CONTENT - crud_list_scripts stack -->
  @stack('crud_list_scripts')
@endsection
