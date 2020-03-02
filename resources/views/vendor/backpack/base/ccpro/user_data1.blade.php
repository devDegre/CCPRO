

                <div class="page-content div-form col-lg-12 col-sm-12 col-md-12 container-fluid"  >
                   




                   <form class="input-group controls" method="POST" action="">
                           <div class="row container-fluid">
     
                               <div class="col-lg-7 col-sm-7 col-md-7 container-fluid">
                                <div class="panel">
                                    <header class="panel-heading panel-heading-green" style="text-align: center; font-size: 30px;"> <span aria-hidden="true" class="icon-user-following"></span> &nbsp;Informations client</header>
                                    <div class="panel-body">
                                        <div class="row ">
                                            
                                             <div class="col-sm-3 col-md-3 col-lg-3">
                                             
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="Nationalité" placeholder="Nationalité">
                                             </div>
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="civilite" placeholder="Civilité">
                                             </div>
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="nom" placeholder="Nom">
                                             </div>
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="prenom" placeholder="Prenoms">
                                             </div>
                                             <div class="form-group">
                                                 <input type="email" class="form-control" id="email" placeholder="Email">
                                             </div>
                                             <div class="form-group">
                                                 <input type="number" class="form-control" id="number" placeholder="Téléphone">
                                             </div>
                                     
                                             
                                            </div>
                                             <div class="col-sm-4 col-md-4 col-lg-4">                                 
                                             <div class="form-group">
                                                 <input type="number" class="form-control" id="mobile" placeholder="Mobile">
                                             </div>
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="ville" placeholder="Ville">
                                             </div>
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="adress" placeholder="Adresse géographique">
                                             </div>
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="codpost" placeholder="Code postal">
                                             </div>
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="entreprise" placeholder="Entreprise">
                                             </div>
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="profession" placeholder="Profession">
                                             </div> 
                
                                            </div>
     
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                              
                                         
                                          <div class="form-group">
                                                 <input type="text" class="form-control" id="fonction" placeholder="Fonction">
                                             </div> 
                                             <div class="form-group">
                                                 <input type="text" class="form-control" id="numcpt" placeholder="Numero du Compteur">
                                             </div> 
                                             <div class="form-group">
                                                 <input type="file" class="form-control" id="photo" placeholder="">
                                             </div>
                                             
                                        </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
     
                               <div class="col-lg-5 col-sm-5 col-md-5">
                                  <div class="panel">
                                    <header class="panel-heading panel-heading-purple" style="text-align: center; font-size: 30px;"> <span aria-hidden="true" class="icon-docs "></span> &nbsp;Qualification de l'appel</header>
                                    <div class="panel-body">
                                          <div class="card-body " id="bar-parent">
                                          <div class="form-group">
                                               <label>Selectionner le motif de l'appel</label>
                                                     <select class="form-control">
                                                         <option>Motif 1</option>
                                                         <option>Motif 2</option>
                                                         <option>Motif 3</option>
                                                         <option>Motif 4</option>
                                                         <option>Motif 5</option>
                                                     </select>
                                                 </div>
                                              <div class="form-group">
                                                 <label>Description de l'appel</label>
                                               <textarea class="form-control" rows="7" placeholder="Veillez résumer le contexte de l'appel du client"></textarea>
                                             </div>
     
                                             <br>
                                        </div>
                                    </div>
                                </div>
                               </div>
                           </div>
                           
                         </form>
                   <div class="row">
                                 <div class="col-sm-3 offset-sm-1">
                                     <button type="s" class="btn btn-circle btn-danger btn-lg m-b-10"> <span aria-hidden="true" class="icon-call-end"></span> &nbsp;Clôturer l'appel</button>
                                 </div>
                           </div>
     
     
     
     
     <!-- Default box -->
       <div class="row">
     
         <!-- THE ACTUAL CONTENT -->
         <div class="col-lg-12 col-sm-12 col-md-12">
           <div class="">
     
             <div class="row mb-0">
               <div class="col-6">
                
                 <div class="hidden-print with-border ">
     
                  
                 </div>
                
               </div>
               <div class="col-6">
                   <div id="datatable_search_stack" class="float-right"></div>
               </div>
             </div>
     
             {{-- Backpack List Filters --}}
             
              
             <div class="card-head">
              <header><h1> <span aria-hidden="true" class="icon-layers "></span> &nbsp;Historique</h1></header>
             </div>
     
             <div class="overflow-hidden mt-2">
     
             <table id="crudTable" class="bg-white table table-striped table-hover nowrap rounded shadow-xs border-xs" cellspacing="0">
                 <thead>
                   <tr>
                     {{-- Table columns --}}
                    
                     <th>Date</th>
                     <th>Motif</th>
                     <th>Agent</th>
                     <th>Numero</th>
                     <th>Description</th>
                   </tr>
                 </thead>
                 <tbody>
     
                 <tr>
                     <td>27/05/2016</td>
                     <td>ici motif</td>
                     <td>Toto</td>
                     <td>57899854</td>
                     <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus ipsa excepturi ducimus repudiandae consequatur tenetur. Nisi sequi molestiae reprehenderit expedita debitis. Saepe eveniet alias iusto. Numquam perspiciatis maxime quis voluptatem?  </td>
                     
                 </tr>
                 <tr>
                     <td>24/08/2016</td>
                     <td>ici motif 1</td>
                     <td>André</td>
                     <td>87899878</td>
                     <td>Lorem ipsum...</td>
                    
                 </tr>
                 <tr>
                     <td>27/05/2016</td>
                     <td>ici motif</td>
                     <td>Toto</td>
                     <td>57899854</td>
                     <td>Lorem ipsum...</td>
                   
                 </tr>
                 <tr>
                     <td>27/05/2016</td>
                     <td>ici motif</td>
                     <td>Toto</td>
                     <td>57899854</td>
                     <td>Lorem ipsum...</td>
                     
                 </tr>
                 <tr>
                     <td>27/05/2016</td>
                     <td>ici motif</td>
                     <td>Toto</td>
                     <td>57899854</td>
                     <td>Lorem ipsum...</td>
                     
                 </tr>
                 <tr>
                     <td>27/05/2016</td>
                     <td>ici motif</td>
                     <td>Toto</td>
                     <td>57899854</td>
                     <td>Lorem ipsum</td>
                     
                 </tr>
     
                 </tbody>
                 <tfoot>
                   <tr>
                   <th>Date</th>
                   <th>Motif</th>
                   <th>Agent</th>
                   <th>Numero</th>
                   <th>Description</th>
                  
                     
                   </tr>
                 </tfoot>
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
     
     

     @foreach($data['calls'] as $call)

            <tr>
                <td>{{$call->created_at}}</td>
                <td>{{$call->category['name']}}</td>
                <td>{{$call->user['name']}}</td>
                <td>{{$call->client['nom']}}</td>
                <td>{{$call->motif}}</td>
                
            </tr>
            @endforeach