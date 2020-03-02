<div class="page-content div-form col-lg-12 col-sm-12 col-md-12 container-fluid" style=' background-size: cover;  background-image: url("/rebron1/public/packages/ccpro/call-cente.jpg");opacity:0.75; '  >
      <!-- Default box -->
<!-- THE ACTUAL CONTENT -->
<style type="text/css">
 
  body{
    background:url("/rebron1/public/packages/ccpro/call-center3.jpg");
    background-size: cover; 
  	opacity:0.75;
  }
  .divDuTab {
    background:url("/rebron1/public/packages/ccpro/call-center3.jpg");
    background-size: cover; 
  	opacity:;
  }
</style>
<div class="col-lg-12 col-sm-12 col-md-12" style="font-family: 'Taviraj', semi-bold ;">
                     <form class="input-group controls" method="POST" action="">
                      <div class="row container-fluid">
                      
                          <div class="col-lg-8 col-sm-8 col-md-8 container-fluid   "style="padding-top:5px; ">
                           <div class="panel">
                               <header class="panel-heading panel-heading-blue bg-success rounded" style="text-align: center; font-size: 20px;"><span aria-hidden="true" class="icon-user-following"></span> &nbsp;Informations client</header>
                               <div class="panel-body">
                                   <div class="row ">
                                   <!-- 'nom','prenoms','telephone','email','civilite','adresse','entreprise','profession' -->
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                        
                                        <div class="form-group">
                                            <i class="fa fa-user" style="color:gray;font-size:20px;">&nbsp;Nom & Prenoms</i>
                                            <input type="text" class="form-control" id="nom"  name="nom" placeholder="Nom" @if(isset($data['nomclient']))  value="{{$data['nomclient']}}"@endif>
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenoms" @if(isset($data['prenomclient'])) value="{{$data['prenomclient']}}"@endif>
                                        </div> -->
                                        <div class="form-group">
                                            <i class="fa fa-mobile" style="color:gray;font-size:20px">&nbsp;Numero</i>
                                            <input type="text" class="form-control" id="number" name="telephone" placeholder="Téléphone"  @if(isset($data['telephoneclient'])) value="{{$data['telephoneclient']}}"@endif>
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-envelope" style="color:gray;font-size:20px">&nbsp;E-mail</i>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" @if(isset($data['emailclient']))  value="{{$data['emailclient']}}"@endif>
                                        </div>
          
                                       </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4">                                 
                                       
                                        <div class="form-group">
                                         <i class="fa fa-smile-o" aria-hidden="true" style="color:gray;font-size:20px">&nbsp;Civilité</i>
                                            <input type="text" class="form-control" id="civilite" name="civilite" placeholder="Civilité" @if(isset($data['civiliteclient'])) value="{{$data['civiliteclient']}}" @endif>
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-map-marker" aria-hidden="true" style="color:gray;font-size:20px">&nbsp;Adresse géographique</i>
                                            <input type="text" class="form-control" id="adress" name="adresse" placeholder="Adresse géographique" @if(isset($data['adresseclient'])) value="{{$data['adresseclient']}}" @endif>
                                        </div>
                                        
                                        <div class="form-group">
                                             <i class="fa fa-university" aria-hidden="true" style="color:gray;font-size:20px">&nbsp;Entreprise</i>
                                             <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="Entreprise" @if(isset($data['entrepriseclient'])) value="{{$data['entrepriseclient']}}" @endif>
                                        </div>
                                        
           
                                       </div>
                                       <div class="col-sm-4 col-md-4 col-lg-4">  
                                       <div class="form-group">
                                            <i class="fa fa-graduation-cap" aria-hidden="true" style="color:gray;font-size:20px">&nbsp;Profession</i>
                                            <input type="text" class="form-control" id="profession" name="profession" placeholder="Profession" @if(isset($data['professionclient'])) value="{{$data['professionclient']}}" @endif>
                                        </div> 
                                       </div> 
                                       
                                   </div>
                                      
                               </div>
                           </div>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-md-4 "style="padding-top:5px;   ">
                             <div class="panel">
                               <header class="panel-heading panel-heading-blue bg-primary rounded" style="text-align: center; font-size: 20px; "> <span aria-hidden="true" class="icon-docs "></span> &nbsp;Qualification de l'appel</header>
                               <div class="panel-body">
                                     <div class="card-body " id="bar-parent">

                                     <div class=""> 
                                            <div class="form-group">
                                            <i class="fa fa-user-secret" aria-hidden="true"style="color:gray;font-size:20px">&nbsp;Problème</i>

                                                    <select name="motif" class="form-control">
                                                        @foreach($data['categories'] as $categorie)

                                                           <option>{{$categorie->name}}</option>

                                                        @endforeach
                                                    </select>
                                                </div>
                                         <div class="form-group">
                                            <i class="fa fa-comments" aria-hidden="true" style="color:gray;font-size:20px">&nbsp;Commentaires</i>

                                          <textarea class="form-control" name="description" rows="3" placeholder="Veillez résumer le contexte de l'appel du client"></textarea>
                                        </div>
                                        </div>

                                        <br>
                                   </div>
                               </div>
                           </div>
                          </div>
                      </div>
                    </form>
                  </div>
                    <div class="row">
                     <div class="col-md-2">
                       <div class="col-sm-3 ">
                          <button type="" data-link='/rebron1/public/admin/call'  @if(isset($data['telephoneclient'])) 
                            data-num="{{$data['telephoneclient']}}"@endif class="btn btn-circle AnswerCall btn-success btn-lg m-b-10">
                             <span aria-hidden="true" class="icon-call-in"></span> &nbsp;Décrocher l'appel</button>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="col-sm-3 ">
                            <button type="" data-link='/rebron1/public/admin/call'  @if(isset($data['telephoneclient']))
                               data-num="{{$data['telephoneclient']}}"@endif class="btn btn-circle Hold btn-info btn-lg m-b-10">
                             <i class="fa fa-podcast" aria-hidden="true"></i>&nbsp;Mise en attente</button>
                         </div>
                     </div>
                     <div class="col-md-2">
                       <div class="col-sm-3 ">
                          <button type="" data-link='/rebron1/public/admin/call'  @if(isset($data['telephoneclient']))
                           data-num="{{$data['telephoneclient']}}"@endif class="btn btn-circle BlindTransfert btn-warning btn-lg m-b-10">
                         <i class="fa fa-share" aria-hidden="true"></i> &nbsp;Transférer l'appel</button>
                      </div>
                     </div>
                     <div class="col-md-2 col-md-offset-4">
                       <div class="col-sm-3 ">
                        <button type="" data-link='/rebron1/public/admin/call'  @if(isset($data['telephoneclient'])) 
                           data-num="{{$data['telephoneclient']}}"@endif class="btn btn-circle MakeCall btn-primary btn-lg m-b-10"> 
                          <span aria-hidden="true" class="icon-call-out"></span> &nbsp;Appeler</button>
                        </div>
                     </div>
                     <div class="col-md-2">
                       <div class="col-sm-3 ">
                          <button type="" data-link='/rebron1/public/admin/call'  @if(isset($data['telephoneclient'])) 
                           data-num="{{$data['telephoneclient']}}"@endif class="btn btn-circle sendfile btn-danger btn-lg m-b-10">
                          <i class="fa fa-download" aria-hidden="true"></i>
                          &nbsp;Enregistrer la fiche</button>
                       </div>
                     </div>
                    </div>

        <div class="">
          <div class="card-head">
          <header><em><span aria-hidden="true" class="icon-layers "></span> &nbsp;Historique @if(isset($data['nomclient'])) {{$data['nomclient']}} @endif</em></header> 
          </div>
          <div class="overflow-hidden mt-2">
            <div> <!-- <label for="search">Recherche: </label> -->
          <input type="search"  id="searchInput" placeholder="Recherche"class="form-control col-sm-2" >
          </div>
          <table id="userhis" data-searching="true" class="bg-white crudTable table table-striped table-hover display order-column nowrap rounded shadow-xs border-xs " cellspacing="0">
              <thead>
                <tr>
                  {{-- Table columns --}}
                  <th  data-orderable=" true">Date</th>
                  <th data-orderable=" true">Categorie</th>
                  <th data-orderable=" true">Agent</th>
                  <th data-orderable=" true">Client</th>
                  <th data-orderable=" true">Description</th>
                </tr>
              </thead>
              <tbody>
              <!-- 'motif','category_id', 'user_id','client_id','created_at' -->
              
        @foreach($data['calls'] as $call)

        <tr>
            <td>{{$call->created_at}}</td>
            <td>{{$call->category_name}}</td>
            <td>{{$call->user_name}}</td>
            <td>{{$call->nom}}</td>
            <td>{{$call->motif}}</td>
            
        </tr>
        @endforeach  
        </tbody>
        <!-- <tfoot>
          <tr>
          <th>Date</th>
          <th>Categorie</th>
          <th>Agent</th>
          <th>Client</th>
          <th>Description</th>
          </tr>
        </tfoot> -->
      </table>
      <div id="bottom_buttons" class="hidden-print">
        <div id="datatable_button_stack" class="float-right text-right hidden-xs"></div>
      </div>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia delectus recusandae praesentium expedita magnam voluptate molestiae id minima corrupti sapiente molestias, sit modi harum temporibus numquam, aspernatur quidem minus! Facere!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>

// //  var id_tab='08'+ Math.floor(100000 + Math.random() * 900000);
// // // //Only needed for the filename of export files.
// //  $(window).on('load',function(){

// //                       $('table').removeAttr('id');
// //                        $('table').attr('id','userhis'+id_tab);

                      
                      
                       ///////alert(id_tab);
                     // $('#myTable').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said

                  
                  $(document).ready(function() {

                     function strtrunc(str, max, add){
                        add = add || '[...]';
                        return (typeof str === 'string' && str.length > max ? str.substring(0, max) + add : str);
                      };
                    
                      oTable = $('#userhis').DataTable({
                          
                          "paging": true,
                          "autoWidth": true,
                          "lengthMenu": [[3,5,8,10,15,25,-1],[3,5,8,10,15,25,"Tous"]],
                          pageLength: 8,
                          /////"scrollX": true,
                          aaSorting: [],
                          serverSide: false,
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
   
                        });
                        $('#searchInput').keyup(function(){
                              oTable.search($(this).val()).draw() ;
                        })
                      // id_tab='08'+ Math.floor(100000 + Math.random() * 900000);

                  });




// DataTable initialisation



</script>


