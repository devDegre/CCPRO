<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="UltimateAdmin" />
    <title>Ultimate Admin | Bootstrap Responsive Admin Template</title>
    <!-- google font -->
    <link href="../../fonts.googleapis.com/css-family=Poppins-300,400,500,600,700.htm" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{asset('packages/ultimate/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('packages/ultimate/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
	
	<!--bootstrap -->
    <link href="{{asset('packages/ultimate/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('packages/ultimate/assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('packages/ultimate/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet" media="screen">
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('packages/ultimate/assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('packages/ultimate/assets/css/material_style.css')}}">
	<!-- animation -->
	<link href="{{ asset('packages/ultimate/assets/css/pages/animate_page.css') }}" rel="stylesheet">
	<!-- Theme Styles -->
    
    <link href="{{ asset('packages/ultimate/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('packages/ultimate/assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('packages/ultimate/assets/css/pages/formlayout.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('packages/ultimate/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('packages/ultimate/assets/css/theme-color.css') }}" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
    <link href="{{ asset('packages/ultimate/assets/plugins/dropzone/dropzone.css') }}" rel="stylesheet" media="screen">
    <!--tagsinput-->
    <link href="{{ asset('packages/ultimate/assets/plugins/jquery-tags-input/jquery-tags-input.css') }}" rel="stylesheet">
    <!--select2-->
    <link href="{{ asset('packages/ultimate/assets/plugins/select2/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('packages/ultimate/assets/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('packages/ultimate/assets/img/favicon.ico.htm') }}" />
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md logo-cyan header-cyan white-sidebar-color">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index-2.html"><span class="logo-default">Ultimate</span></a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>

                @include('vendor/ultimate/oldone/layout/navHeader')

            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->

       @include('vendor/ultimate/oldone/layout/navColore')
        <!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
        @include('vendor/ultimate/oldone/layout/sidebar')
             <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                  <form class="form-group" method="POST" action="">
                      <div class="row">

                          <div class="col-md-8">
                           <div class="panel">
                               <header class="panel-heading panel-heading-green" style="text-align: center; font-size: 30px;"> <span aria-hidden="true" class="icon-user-following"></span> &nbsp;Informations client</header>
                               <div class="panel-body">
                                   <div class="row">
                                       <div class="col-sm-1">
                                           <div class="doctor-profile">
                                                <img src="{{asset('packages/ultimate/assets/img/user/usrbig6.jpg')}}" class="doctor-pic" alt=""> 
                                            </div>
                                       </div>
                                        <div class="col-sm-4">
                                            <div class="panel-body">
                                        <div class="card-body " id="bar-parent">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="civilite" placeholder="Nationalité">
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
                              </div>
                                       </div>
                                        <div class="col-sm-4">
                                            <div class="panel-body">
                                            <div class="card-body " id="bar-parent">                                    
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
                                        </div>
                                       </div>

                                       <div class="col-sm-3">
                                         <div class="panel-body">
                                     <div class="card-body " id="bar-parent">
                                    
                                         <div class="form-group">
                                            <input type="text" class="form-control" id="fonction" placeholder="Fonction">
                                        </div> 
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="numcpt" placeholder="Numero du Compteur">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control" id="photo" placeholder="">
                                        </div><br><br>
                                            <h1><span aria-hidden="true"  class="icon-call-in" style="color: #34C924; font-size: 130px;"></span></h1>
                                   </div>
                                  </div>
                                   </div>
                                   </div>
                               </div>
                           </div>
                          </div>

                          <div class="col-md-4">
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
                                   </div>
                               </div>
                           </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-3 offset-sm-1">
                              <button type="s" class="btn btn-circle btn-danger btn-lg m-b-10"> <span aria-hidden="true" class="icon-call-end"></span> &nbsp;Clôturer l'appel</button>
                          </div>
                      </div>
                    </form>
                     <div class="row"> 
                        <div class="col-sm-12">
                             <div class="card-box">
                                 <div class="card-head">
                                     <header><h1> <span aria-hidden="true" class="icon-layers "></span> &nbsp;Historique</h1></header>
                                 </div>
                                 <div class="card-body">
                                    
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" style="width:100%;" id="example4">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Motif</th>
                                                <th>Agent</th>
                                                <th>Numero</th>
                                                <th>Description</th>
                                                <th><span aria-hidden="true" class="icon-layers" style="font-size: 40px;
                                                color: green; text-align: center;"></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>27/05/2016</td>
                                                <td>ici motif</td>
                                                <td>Toto</td>
                                                <td>57899854</td>
                                                <td>Lorem ipsum...</td>
                                                <td><button class="btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"> <span aria-hidden="true" class="icon-book-open "></span> &nbsp;Open</button></td>
                                            </tr>
                                            <tr>
                                                <td>24/08/2016</td>
                                                <td>ici motif 1</td>
                                                <td>André</td>
                                                <td>87899878</td>
                                                <td>Lorem ipsum...</td>
                                                <td><button class="btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"> <span aria-hidden="true" class="icon-book-open "></span> &nbsp;Open</button></td>
                                            </tr>
                                            <tr>
                                                <td>27/05/2016</td>
                                                <td>ici motif</td>
                                                <td>Toto</td>
                                                <td>57899854</td>
                                                <td>Lorem ipsum...</td>
                                              <td><button class="btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"> <span aria-hidden="true" class="icon-book-open "></span> &nbsp;Open</button></td>
                                            </tr>
                                           <tr>
                                                <td>27/05/2016</td>
                                                <td>ici motif</td>
                                                <td>Toto</td>
                                                <td>57899854</td>
                                                <td>Lorem ipsum...</td>
                                                <td><button class="btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"> <span aria-hidden="true" class="icon-book-open "></span> &nbsp;Open</button></td>
                                            </tr>
                                            <tr>
                                                <td>27/05/2016</td>
                                                <td>ici motif</td>
                                                <td>Toto</td>
                                                <td>57899854</td>
                                                <td>Lorem ipsum...</td>
                                                <td><button class="btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"> <span aria-hidden="true" class="icon-book-open "></span> &nbsp;Open</button></td>
                                            </tr>
                                            <tr>
                                                <td>27/05/2016</td>
                                                <td>ici motif</td>
                                                <td>Toto</td>
                                                <td>57899854</td>
                                                <td>Lorem ipsum</td>
                                                <td><button class="btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"> <span aria-hidden="true" class="icon-book-open "></span> &nbsp;Open</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                 </div>
                             </div>
                         </div>
                        
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="index.htm#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab"> <i class="material-icons">chat</i>Chat
                                    <span class="badge badge-danger">4</span>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.htm#quick_sidebar_tab_3" class="nav-link tab-icon"  data-toggle="tab"> <i class="material-icons">settings</i> Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start User Chat --> 
                        <div class="tab-pane active chat-sidebar-chat in active show animated slideInRight" role="tabpanel" id="quick_sidebar_tab_1">
                            <div class="chat-sidebar-list">
                                <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
                                    <div class="chat-header"><h5 class="list-heading">Online</h5></div>
                                    <ul class="media-list list-items">
                                        <li class="media"><img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user3.jpg')}}" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">John Deo</h5>
                                                <div class="media-heading-sub">Spine Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">5</span>
                                            </div> <img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user1.jpg')}}" width="35" height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Rajesh</h5>
                                                <div class="media-heading-sub">Director</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user5.jpg')}}" width="35" height="35" alt="...">
                                            <i class="away dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jacob Ryan</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">8</span>
                                            </div> <img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user4.jpg')}}" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Kehn Anderson</h5>
                                                <div class="media-heading-sub">CEO</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user2.jpg')}}" width="35" height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Sarah Smith</h5>
                                                <div class="media-heading-sub">Anaesthetics</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user7.jpg')}}" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Vlad Cardella</h5>
                                                <div class="media-heading-sub">Cardiologist</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="chat-header"><h5 class="list-heading">Offline</h5></div>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-warning">4</span>
                                            </div> <img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user6.jpg')}}" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jennifer Maklen</h5>
                                                <div class="media-heading-sub">Nurse</div>
                                                <div class="media-heading-small">Last seen 01:20 AM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user8.jpg')}}" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Lina Smith</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                                <div class="media-heading-small">Last seen 11:14 PM</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">9</span>
                                            </div> <img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user9.jpg')}}" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jeff Adam</h5>
                                                <div class="media-heading-sub">Compounder</div>
                                                <div class="media-heading-small">Last seen 3:31 PM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="{{asset('packages/ultimate/assets/img/user/user10.jpg"')}} width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Anjelina Cardella</h5>
                                                <div class="media-heading-sub">Physiotherapist</div>
                                                <div class="media-heading-small">Last seen 7:45 PM</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-sidebar-item">
                                <div class="chat-sidebar-chat-user">
                                    <div class="page-quick-sidemenu">
                                        <a href="javascript:;" class="chat-sidebar-back-to-list">
                                            <i class="fa fa-angle-double-left"></i>Back
                                        </a>
                                    </div>
                                    <div class="chat-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="{{asset('packages/ultimate/assets/img/dp.jpg')}}" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">John Smith</a> <span class="datetime">9:10</span>
                                                <span class="body-out"> could you send me menu icons ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="{{asset('packages/ultimate/assets/img/user/user5.jpg')}}" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
                                                <span class="body"> please give me 10 minutes. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="{{asset('packages/ultimate/assets/img/dp.jpg')}}" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">John Smith</a> <span class="datetime">9:11</span>
                                                <span class="body-out"> ok fine :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="{{asset('packages/ultimate/assets/img/user/user5.jpg')}}" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
                                                <span class="body">Sorry for
                                                    the delay. i sent mail to you. let me know if it is ok or not.</span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="{{asset('packages/ultimate/assets/img/dp.jpg')}}" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">John Smith</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> it is perfect! :) </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="{{asset('packages/ultimate/assets/img/dp.jpg')}}" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">John Smith</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> Great! Thanks. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="{{asset('packages/ultimate/assets/img/user/user5.jpg')}}" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:27</span>
                                                <span class="body"> it is my pleasure :) </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn deepPink-bgcolor">
                                                    <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End User Chat --> 
                        <!-- Start Setting Panel --> 
                        <div class="tab-pane chat-sidebar-settings animated slideInUp" role="tabpanel" id="quick_sidebar_tab_3">
                            <div class="chat-sidebar-settings-list slimscroll-style">
                                <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
                                <div class="chatpane inner-content ">
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Position</div>
                                            <div class="setting-set">
                                               <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Header</div>
                                            <div class="setting-set">
                                               <select class="page-header-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Menu </div>
                                            <div class="setting-set">
                                               <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                                    <option value="accordion" selected="selected">Accordion</option>
                                                    <option value="hover">Hover</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Footer</div>
                                            <div class="setting-set">
                                               <select class="page-footer-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Notifications</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                      for = "switch-1">
                                                      <input type = "checkbox" id = "switch-1" 
                                                         class = "mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Show Online</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                      for = "switch-7">
                                                      <input type = "checkbox" id = "switch-7" 
                                                         class = "mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Status</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                      for = "switch-2">
                                                      <input type = "checkbox" id = "switch-2" 
                                                         class = "mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">2 Steps Verification</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                      for = "switch-3">
                                                      <input type = "checkbox" id = "switch-3" 
                                                         class = "mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Location</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                      for = "switch-4">
                                                      <input type = "checkbox" id = "switch-4" 
                                                         class = "mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Save Histry</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                      for = "switch-5">
                                                      <input type = "checkbox" id = "switch-5" 
                                                         class = "mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Auto Updates</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                      for = "switch-6">
                                                      <input type = "checkbox" id = "switch-6" 
                                                         class = "mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2019 &copy; Comafrique Technologie By
                <a href="mailto:info@vision.to" target="_top" class="makerCss">Degré to Design</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="{{ asset('package/ultimate/assets/plugins/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/plugins/popper/popper.min.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/plugins/jquery-blockui/jquery.blockui.min.js') }}" ></script>
	<script src="{{ asset('package/ultimate/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('package/ultimate/assets/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"  charset="UTF-8"></script>
    <script src="{{ asset('package/ultimate/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker-init.js') }}"  charset="UTF-8"></script>
    <script src="{{ asset('package/ultimate/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"  charset="UTF-8"></script>
    <script src="{{ asset('package/ultimate/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js') }}"  charset="UTF-8"></script>
    <!-- Common js-->
	<script src="{{ asset('package/ultimate/assets/js/app.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/js/layout.js') }}" ></script>
	<script src="{{ asset('package/ultimate/assets/js/theme-color.js') }}" ></script>
	<!-- Material -->
	<script src="{{ asset('package/ultimate/assets/plugins/material/material.min.js') }}"></script>
	<!-- animation -->
	<script src="{{ asset('package/ultimate/assets/js/pages/ui/animations.js') }}" ></script>
	<!-- dropzone -->
    <script src="{{ asset('package/ultimate/assets/plugins/dropzone/dropzone.js') }}" ></script>
    <!--tags input-->
    <script src="{{ asset('package/ultimate/assets/plugins/jquery-tags-input/jquery-tags-input.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/plugins/jquery-tags-input/jquery-tags-input-init.js') }}" ></script>
    <!--select2-->
    <script src="{{ asset('package/ultimate/assets/plugins/select2/js/select2.js') }}" ></script>
    <script src="{{ asset('package/ultimate/assets/js/pages/select2/select2-init.js') }}" ></script>
   

    <!-- end js include path -->
</body>
</html>