<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="https://my.consummatetraders.com/storage/generalconfig/small_app_logo1690844352.png"/>
    <!-- ENABLE LOADERS -->
<link href="theme/layouts/vertical-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
<link href="theme/layouts/vertical-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />

<!-- /ENABLE LOADERS -->
<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="theme/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="theme/layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
<link href="theme/layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="theme/plugins/src/animate/animate.css"/>
<link rel="stylesheet" type="text/css" href="theme/plugins/src/font-icons/fontawesome-free-6.2.0-web/css/all.css"/>
<link rel="stylesheet" type="text/css" href="theme/plugins/src/font-icons/fontawesome-free-6.2.0-web/css/fontawesome.css"/>

<link rel="stylesheet" type="text/css" href="theme/assets/css/light/elements/alert.css">
<link rel="stylesheet" type="text/css" href="theme/assets/css/dark/elements/alert.css">

<link href="theme/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">
<link href="theme/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">

<link href="theme/assets/css/dark/apps/contacts.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="theme/plugins/src/sweetalerts2/sweetalerts2.css">

<link href="theme/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link href="theme/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
<link href="theme/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link href="theme/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />

<link href="theme/plugins/src/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
<link href="theme/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
<link href="theme/plugins/css/light/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
<link href="theme/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->



 <!-- toastr-->


 <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
 alpha/css/bootstrap.css')}}" rel="stylesheet">

<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>

<link rel="stylesheet" type="text/css" 
 href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css')}}">

<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')}}"></script>
<style>
.accordion {
  background-color: transparent;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active,
.accordion:hover {}

/* Style the accordion panel. Note: hidden by default */
.panel2 {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>






<script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
</script>

<style>
    /*body.dark .layout-px-spacing, .layout-px-spacing {
        min-height: calc(100vh - 155px) !important;
    }*/

    /* Alinea los menu de redes sociales cuando estan anexados al menu lateral izq.*/
    .left-menu-smi i{
        margin: auto;
        text-align: center;
        font-size: 16px;
    }

    .myoverlay {
        position: fixed; /* Sit on top of the page content */
        display: none; /* Hidden by default */
        width: 100%; /* Full width (cover the whole page) */
        height: 100%; /* Full height (cover the whole page) */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.2); /* Black background with opacity */
        z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
    }
    .myoverlayMsg{
        position: absolute;
        top: 50%;
        left: 50%;
    }

    #sidebar ul.menu-categories li.menu ul.submenu > li.active > ul.sub-submenu a {
        color: #515365;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        font-weight: 500;
    }

    #sidebar ul.menu-categories li.menu ul.submenu > li.active > ul.sub-submenu > li.active a {
        color: #0d6efd;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        font-weight: 500;
    }

    #sidebar ul.menu-categories li.menu ul.submenu > li.active a:hover {
        color: #0d6efd !important;
    }

    #sidebar ul.menu-categories li.menu ul.submenu > li.active a::before {
        background-color: #bfc9d4;
    }

    #sidebar ul.menu-categories ul.submenu > li.active:before {
        content: "";
        position: absolute;
        background-color: rgba(255, 255, 255, 0.07);
        background-image: linear-gradient(90deg, rgb(27, 19, 219) 1%, rgba(11, 61, 255, 0.78) 20%, rgba(0,212,255,1) 100%);
        width: 15px;
        height: 42px;
        width: 100%;
        margin: 0 21px;
        border-radius: 6px;
        width: 87.5%;
        left: -5px;
        top: 1px;
    }

    #sidebar ul.menu-categories li.menu.active > .dropdown-toggle {
        background-image: linear-gradient(90deg, rgb(27, 19, 219) 1%, rgba(11, 61, 255, 0.78) 20%, rgba(0,212,255,1) 100%);
    }

    .text-hover-primary :hover {
        color: #4361ee;
    }
    .text-hover-info :hover {
        color: #2196f3;
    }
    .text-hover-success :hover {
        color: #00ab55;
    }
    .text-hover-warning :hover {
        color: #e2a03f;
    }
    .text-hover-danger :hover {
        color: #e7515a;
    }
    .text-hover-secondary :hover {
        color: #805dca;
    }
    .text-hover-dark :hover {
        color: #3b3f5c;
    }
    .text-hover-light-primary :hover {
        color: #152143;
    }
    .text-hover-light-info :hover {
        color: #0b2f52;
    }
    .text-hover-light-success :hover {
        color: #0c272b;
    }
    .text-hover-light-warning :hover {
        color: #282625;
    }
    .text-hover-light-danger :hover {
        color: #2c1c2b;
    }
    .text-hover-light-secondary :hover {
        color: #1d1a3b;
    }
    .text-hover-light-dark :hover {
        color: #181e2e;
    }

    /** ByDvd **/
    /** Placeholders o Ghost Loading Para la Carga de contenido**/
    @keyframes ghost_loading {
        from { left: -150%; }
        to { left: 100%;}
    }

    .ghost-loading {
        top: 0;
        left: 0;
        background: rgb(223, 223, 223);
        position: absolute;
        width: 50%;
        height: 50px;
        animation: ghost_loading 4s linear infinite;
        filter: blur(50px);
    }

    .bg-ghost-loading {
        animation: bg_ghost_loading 1s linear infinite alternate;
    }

    /* Table Placeholder or Ghost Loading */
    .table-placeholder{
        width: 100%;
        border-collapse: unset;
        border-spacing: 7px;
        border-collapse: separate;
    }
    .table-placeholder th{
        padding: 25px;
        background: #999;
        animation: bg_ghost_loading 1.5s linear infinite alternate;
        position: relative;
        overflow: hidden;
    }
    .table-placeholder tr td{
        padding: 15px;
        background: #999;
        animation: bg_ghost_loading 1s linear infinite alternate;
        position: relative;
        overflow: hidden;
    }
    /** End Ghost Loading Tables **/
</style>

            <style>

   /* body {
        background:  !important;
        color: white;
    }
    body::before {
        background:  !important;
    }*/

    .header-container {
        background: #004646 !important;
        color: #ffffff !important;
    }

    .sidebar-theme {
        background: #004646;
    }

    #sidebar .theme-brand {
        background-color: #004646;
        border-bottom: 1px solid #004646;
    }

    #sidebar .theme-brand div.theme-text a {
        color: #ffffff !important;
    }

    #sidebar ul.menu-categories li.menu > .dropdown-toggle {
        color: #ffffff;
    }

    #sidebar ul.menu-categories li.menu > .dropdown-toggle svg:not(.badge-icon) {
        color: #ffffff;
    }

    #sidebar ul.menu-categories li.menu.active > .dropdown-toggle {
        background-image: linear-gradient(270deg, #004646 1%, #009055 20%, #004646 100%);
    }

    #sidebar ul.menu-categories li.menu > .dropdown-toggle[aria-expanded="true"]:hover {
        color: #ffffff;
    }
    #sidebar ul.menu-categories li.menu > .dropdown-toggle[aria-expanded="true"] {
        background: #009055;
    }
    #sidebar ul.menu-categories li.menu > .dropdown-toggle[aria-expanded="true"] span {
        color: #ffffff;
    }
    #sidebar ul.menu-categories li.menu.active > .dropdown-toggle svg, #sidebar ul.menu-categories li.menu.active > .dropdown-toggle span {
        color: #ffffff !important;
    }
    #sidebar ul.menu-categories ul.submenu > li a {
        color: #ffffff;
    }
    #sidebar ul.menu-categories li.menu > .dropdown-toggle:hover {
        color: #009055 !important;
    }
    #sidebar ul.menu-categories ul.submenu > li a:hover {
        color: #009055 !important;
    }
    #sidebar ul.menu-categories ul.submenu > li.active::before {
        /*background-color: rgba(255, 255, 255, 0.07);*/
        background-image: linear-gradient(270deg, #004646 1%, #009055 20%, #004646 100%);
    }

   #sidebar ul.menu-categories li.menu.active > .dropdown-toggle[aria-expanded="true"] {
       background-image: linear-gradient(270deg, #004646 1%, #009055 20%, #004646 100%);
   }

    #sidebar ul.menu-categories li.menu.active > .dropdown-toggle[aria-expanded="true"] {
        /*background: rgba(0, 132, 132, 0.1);*/
    }
    #sidebar ul.menu-categories li.menu ul.submenu > li a:hover {
        color: #004646;
    }

    #sidebar ul.menu-categories li.menu > .dropdown-toggle:hover {
        color: #004646;
    }
    #sidebar ul.menu-categories li.menu > .dropdown-toggle:hover svg:not(.badge-icon) {
        color: #009055;
    }
    #sidebar ul.menu-categories li.menu ul.submenu > li.active a:hover {
        color: #004646 !important;
    }
    #sidebar ul.menu-categories li.menu ul.submenu > li.active a {
        color: #000;
    }

    .page-title h3 {
        color: #004646;
    }

    /*.btn-info {
        color: #ffffff !important;
        background-color: #004646;
        border-color: #009055;
        box-shadow: 0 10px 20px -10px #004646;
    }
    .btn-info:hover, .btn-info:focus {
        color: #ffffff !important;
        background-color: #009055;
        border-color: #004646;
        box-shadow: none;
    }*/

    .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
        color: #ffffff;
        background-color: #009055;
    }

    /*.btn-primary {
        color: #ffffff;
        background-color: #004646 !important;
        border-color: #009055 !important;
        box-shadow: 0 10px 20px -10px #004646;
    }

    .btn-primary:hover, .btn-primary:focus {
        color: #ffffff !important;
        background-color: #009055 !important;
        border-color: #004646 !important;
        box-shadow: none;

    }*/

    .active .bs-stepper-circle {
        background-color: #004646 !important;
    }
    .bs-stepper .step.crossed + .line {
        background-color: #009055 !important;
    }

    #sidebar ul.menu-categories li.menu ul.submenu > li.active > ul.sub-submenu a {
        color: #ffffff;
    }
    #sidebar ul.menu-categories ul.submenu > li ul.sub-submenu > li a {
        color: #ffffff;
    }

    .bg-modal {
        background: #004646 !important;
    }
    .min-info{
            background-color: #fff;
    }
    @keyframes bg_ghost_loading {
        from { background: #f8f8f8 }
        to { background: #dfdfdf }
    }

   .bg-primary {
       background-color: #004646 !important;
   }

   /*.accordion .card-header section > div:not(.collapsed) {
       color: #ffffff !important;
       border-bottom: 1px solid #d3d3d3;
       font-weight: 600;
   }*/
   /*.card-bg{
        background-color: #fff;
   }
   .card-body-bg{
        border: 1px solid #eee;
   }*/

    /*
        Estos estilos son para la seccion de funding / products
        debido a que la seccion no fue creada a partir de componentes pre-existentes en la plantilla
    */
    .nav-tabs{
        border-bottom: 1px solid #d5d5d5;
    }
    .nav-tabs .nav-link.active{
        color: #0083ab !important;
        background-color: transparent;
        border-color: #d5d5d5;
        border-bottom: 1px solid #f9f9f9;
    }
    .product-item{
        box-shadow: 0px 0px 5px -2px #acacac;
        border-left: 5px solid rgb(0, 171, 85);
    }
    .product-item.disabled{
        border-left: 5px solid rgb(230, 76, 76);
    }
    .control-group {
        border: 1px solid #b9b9b9;
        border-radius: 5px;
        position: relative;
    }
    .control-group .label{
        background: #e1e1e1;
        font-size: 11px;
        padding: 2px 10px;
        border-radius: 5px;
        color: #2c2c2c;
        top: -12px;
        position: absolute;
    }
    .type-item{
        color: #2576cf;
        border: 1px solid #d5d5d5;
        box-shadow: 0px 0px 6px -3px #757575;
    }
    .bottom-element span{
        background: linear-gradient(#f7f7f7, #e1e1e1);
        color: #5b5b5b;
        box-shadow: 0px 0px 3px -2px #333;
    }
    /* End Fundingn / Products */


    /* Widgets */
    .widget{
        background: #fff !important;
    }
    .widget .widget-header,
    .widget .widget-heading{
        background: linear-gradient(-255deg, #004646 10%, #fff 120%) !important;
    }
    .widget .widget-header *:not(
        .text-primary,
        .text-secondary,
        .text-info,
        .text-success,
        .text-warning,
        .text-danger,
        .text-dark,
        .text-muted,
        .btn,
        .btn *,
        .bg-primary,
        .bg-secondary,
        .bg-info,
        .bg-success,
        .bg-warning,
        .bg-danger,
        .bg-dark,
        svg,
        svg *,
        .dropdown-menu,
        .dropdown-menu *
    ),
    .widget .widget-heading *:not(
        .text-primary,
        .text-secondary,
        .text-info,
        .text-success,
        .text-warning,
        .text-danger,
        .text-dark,
        .text-muted,
        .btn,
        .btn *,
        .bg-primary,
        .bg-secondary,
        .bg-info,
        .bg-success,
        .bg-warning,
        .bg-danger,
        .bg-dark,
        svg,
        svg *,
        .dropdown-menu,
        .dropdown-menu *
    ){
        color: #fff !important;
    }
    .widget .widget-content *:not(
        .text-primary,
        .text-secondary,
        .text-info,
        .text-success,
        .text-warning,
        .text-danger,
        .text-dark,
        .text-muted,
        .btn,
        .btn *,
        .bg-primary,
        .bg-secondary,
        .bg-info,
        .bg-success,
        .bg-warning,
        .bg-danger,
        .bg-dark,
        svg,
        svg *,
        .badge,
        .badge *,
        .dropdown-menu,
        .dropdown-menu *
    ){
        color: #060404 !important;
    }

   .widget-account-invoice-three .widget-heading {
       background-color: transparent !important;
       background-image: linear-gradient(-255deg, #004646 10%, #fff 120%) !important;
   }

   /* End Widgets */



    /* Modals */
    .modal-content,
    .modal-content *:not(
        .color-p,
        .text-primary,
        .text-secondary,
        .text-info,
        .text-success,
        .text-warning,
        .text-danger,
        .text-dark,
        .text-muted,
        .btn,
        .btn *,
        .bg-primary,
        .bg-secondary,
        .bg-info,
        .bg-success,
        .bg-warning,
        .bg-danger,
        .bg-dark,
        .form-select,
        input,
        span,
        span *,
        svg,
        svg *,
        .dropdown-menu,
        .dropdown-menu *,
        .form-check-input){
            background-color: #fff !important;
            color: #444 !important;
    }
    /* End Modals */



    /** Primary Buttons **/
    .btn .btn-primary{
        background: #419b53 !important;
        border-color: #419b53 !important;
        box-shadow:  0 10px 20px -10px #191914 !important;
        color: #fff !important;
    }
   .btn .btn-primary:hover, .btn-primary:focus{
        background: #3f503a !important;
        border-color: #3f503a !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Primary Buttons*/


    /* Secondary Buttons */
   .btn .btn-secondary{
        background: #382266 !important;
        border-color: #382266 !important;
        box-shadow:  0 10px 20px -10px #9374d1  !important;
        color: #fff !important;
    }
   .btn .btn-secondary:hover, .btn-secondary:focus{
        background: #513b80 !important;
        border-color: #513b80 !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Secondary Buttons*/


    /* Warning Buttons */
   .btn .btn-warning{
        background: #e2a03f !important;
        border-color: #e2a03f !important;
        box-shadow:  0 10px 20px -10px #e2a03f !important;
        color: #fff !important;
    }

   .btn .btn-warning:hover, .btn-warning:focus{
        background: #cc8620 !important;
        border-color: #cc8620 !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Warning Buttons */




    /* Danger Buttons */
   .btn .btn-danger{
        background: #e7515a !important;
        border-color: #e7515a !important;
        box-shadow:  0 10px 20px -10px  !important;
        color: #fff !important;
    }

   .btn .btn-danger:hover, .btn-danger:focus{
        background: #e7515a !important;
        border-color: #e7515a !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Danger Buttons */



    /* Info Buttons */
   .btn .btn-info{
        background: #00ab55 !important;
        border-color: #00ab55 !important;
        box-shadow:  0 10px 20px -10px #00ab55 !important;
        color: #fff !important;
    }

   .btn .btn-info:hover, .btn-info:focus{
        background: #004646 !important;
        border-color: #004646 !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Info Buttons */




    /* Success Buttons */
   .btn .btn-success{
        background: #00ab55 !important;
        border-color: #00ab55 !important;
        box-shadow:  0 10px 20px -10px #00ab55 !important;
        color: #fff !important;
    }

   .btn .btn-success:hover, .btn-success:focus{
        background: #00ab55 !important;
        border-color: #00ab55 !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Success Buttons */



    /* Dark Buttons */
   .btn .btn-dark{
        background: #004646 !important;
        border-color: #004646 !important;
        box-shadow:  0 10px 20px -10px #004646 !important;
        color: #fff !important;
    }

   .btn .btn-dark:hover, .btn-dark:focus{
        background: #419b53 !important;
        border-color: #419b53 !important;
        box-shadow: none !important;
        color: #fff !important;
    }
     /* End Dark Buttons */


    /* User Points alert */
    .user-points-alert
    {
        bottom: -10px;
        right: -10px;
        background: rgb(173, 61, 61);
        border-radius: 5px;
        height: 16px;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 11px;
        z-index: 2;
        position: absolute;
        padding: 0 4px 0 4px;
    }
    /* End user points alert */


    /* Text color for H tag*/
   h1,h2,h3,h4,h5,h6 {
       color: #9d9d9d !important;
   }
   /* END Text color for H tag*/

   /* TAB colors */
   .rounded-pills-icon .nav-pills .nav-link.active, .rounded-pills-icon .nav-pills .show > .nav-link {
       box-shadow: #004646 !important;
       background-color: #f0f0f0 !important;
       color: #fff !important;
   }
   .rounded-pills-icon .nav-pills li a {
       background-color: #f1f2f3 !important;
       color: #f7f7f7 !important;
   }
   /* END TAB colors */

    .primary{
        background-color: transparent !important;
    }


    /*** Configuracion del color de los textos de bootstrap  ***/

    /**
    *
    *    text-info
    *    text-danger
    *    text-success
    *    text-dark
    *    text-warning
    *    text-primary
    *    text-secondary
    *
    ***/

    .text-info{
        color: #0dcaf0 !important;
    }
    .text-danger{
        color: #dc3545 !important;
    }
    .text-success{
        color: #198754 !important;
    }
    .text-dark{
        color: #212529 !important;
    }
    .text-warning{
        color: #ffc107 !important;
    }
    .text-primary{
        color: #0d6efd !important;
    }
    .text-secondary{
        color: #ffffff !important;
    }
    .text-muted{
        color: #868886 !important;
    }


   /*** END Configuracion del color de los textos de bootstrap  ***/
</style>

    


<style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>

    <link href="theme/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">

    <link href="theme/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="theme/assets/css/light/widgets/modules-widgets.css">

    <link href="theme/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="theme/assets/css/dark/widgets/modules-widgets.css">

    <link rel="stylesheet" type="text/css" href="theme/assets/css/light/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="theme/assets/css/dark/forms/switches.css">


    <link href="theme/plugins/css/light/apex/custom-apexcharts.css" rel="stylesheet" type="text/css">
    <link href="theme/plugins/css/dark/apex/custom-apexcharts.css" rel="stylesheet" type="text/css">

    <link href="theme/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="theme/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />

    <link href="theme/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="theme/assets/css/light/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <link href="theme/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />

    <link href="theme/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="theme/assets/css/dark/dashboard/dash_2.css" rel="stylesheet" type="text/css" />

    <link href="theme/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css" />
    <link href="theme/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css" />
    <link href="https://my.consummatetraders.com/css/main/widget-account-invoice.css" rel="stylesheet" type="text/css" />

    <link href="theme/assets/css/light/elements/infobox.css" rel="stylesheet" type="text/css" />
    <link href="theme/assets/css/dark/elements/infobox.css" rel="stylesheet" type="text/css" />

    <link href="theme/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css" />
    <link href="theme/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="theme/plugins/drag-and-drop/dragula/dragula.css">
    <style>
        body.dark .widget-content .progress-info .progress-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 19px;
        }
        body.dark .info-box-3:hover .info-box-3-icon {
            color: #4361ee !important;
        }
        body.dark .widget-content .progress-info .due-time {
            align-self: center;
        }

        body.dark .widget-content .progress-info .due-time p {
            font-weight: 500;
            font-size: 11px;
            padding: 4px 6px 4px 6px;
            background: #3b3f5c;
            border-radius: 30px;
            color: #bfc9d4;
        }

        body.dark .widget-content .progress-info .due-time p svg {
            width: 14px;
            height: 15px;
            vertical-align: text-bottom;
            margin-right: 2px;
        }

        .nav-pills .nav-link {
            display: inline-block;
            color: #fff;
            background: rgb(0 0 0 / 40%);
            background-color: rgba(0, 0, 0, 0.4);
            padding: 4px 12px 4px 12px;
            border-radius: 21px;
            position: relative;
            font-size: 12px;
            letter-spacing: 1px;
            background-color: #1b2e4b;
        }

        .nav-pills .nav-link.active {
            display: inline-block;
            color: #fff;
            background: rgb(0 0 0 / 40%);
            background-color: rgba(0, 0, 0, 0.4);
            padding: 4px 12px 4px 20px;
            border-radius: 21px;
            position: relative;
            font-size: 12px;
            letter-spacing: 1px;
            background-color: #1b2e4b;
        }

        .nav-pills .nav-link.active::before {
            content: '';
            position: absolute;
            height: 6px;
            width: 6px;
            background: white;
            border-radius: 50%;
            left: 9px;
            top: 9.5px;
        }
    </style>

    
</head>
<body class="layout-boxed    " layout="full-width" page="starter-pack">
        <!--  BEGIN NAVBAR  -->
 <div class="header-container">

    <header class="header navbar navbar-expand-sm expand-header">

        <a href="javascript:void(0);" class="sidebarCollapse">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </a>
        <div class="d-flex">
                        <span class = "m-auto ms-0">Server Date: </span><b class="m-auto ms-0" id="formattedDateOutput">
                        </b>
        </div>
        
        <ul class="navbar-item flex-row ms-lg-auto ms-0">
                
           



                            <li wire:id="TFYpX5S8DTL8ShjbEYpr" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;TFYpX5S8DTL8ShjbEYpr&quot;,&quot;name&quot;:&quot;common.navbar-reward-menu-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;update_navbar_rewards_points&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;8fe21b02&quot;,&quot;data&quot;:{&quot;RewardPoints&quot;:0,&quot;listeners&quot;:[&quot;update_navbar_rewards_points&quot;]},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;ba8295f4c19f8a4a6bf22ad35c1f1bfbc760bb2126be2b0692e77923488183da&quot;}}" class="nav-item position-relative" title="My rewards points">
    
    
    <a href="" class="nav-link" wire:click.prevent = "$emit('open_modal')">
        <img src="https://my.consummatetraders.com/mmt_points.png" alt="My Points" width="32px">
    </a>
    <span class="user-points-alert">
        0
    </span>
</li>

<!-- Livewire Component wire-end:TFYpX5S8DTL8ShjbEYpr -->            
            
            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-container">
                        <div class="avatar avatar-sm avatar-indicators avatar-online" style="border-radius: 50%; border: 3px solid rgba(224, 230, 237, 0.16);">
                        
                                                                                                <img alt="avatar" src="{{asset('user/uploads/id/'.Auth::user()->photo)}}" class="rounded-circle">
                                                                
                                                    </div>
                    </div>
                </a>

                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                                                            <img src="https://my.consummatetraders.com/storage/default.jpg" class="img-fluid me-2">
                                
                                                        <div class="media-body">
                                <h5>{{Auth::user()->name}}</h5>
                                                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                                                    <a href="{{url('profile')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span>Profile</span>
                            </a>
                                            </div>
                    
                    <div class="dropdown-item">
                        <a href="{{ route('logout.perform') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                            <span>Sign Out</span>
                        </a>
                        {{-- <form id="logout-form" action="https://my.consummatetraders.com/logout" method="POST" class="d-none">
                            <input type="hidden" name="_token" value="6IrW6JxuXafWB7o1nM2xwczRIFbCCCQL8RxdTNCz">                        </form> --}}
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
    
    <div wire:id="mPKFM5uU5wi8GVz7Otac" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;mPKFM5uU5wi8GVz7Otac&quot;,&quot;name&quot;:&quot;common.navbar-reward-breakdown-modal-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;open_modal&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;7e604112&quot;,&quot;data&quot;:{&quot;listeners&quot;:[&quot;open_modal&quot;]},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;8088374518cd6f5e919eb745d765531c7624c46038ba215efa2d430a529319bc&quot;}}" class="modal fade" id="show_rewards_breakdown_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rewards Breakdown</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">

                        <div class="col">
                            <h4>Earned Points</h4>
                                                    </div>

                        <div class="col">
                            <h4>Spent Points</h4>
                                                    </div>

                    </div>
                </div>



            </div>
            <div class="modal-footer">
                <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Livewire Component wire-end:mPKFM5uU5wi8GVz7Otac -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
                     <!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{url('/dashboard')}}">
                        <img src="https://my.consummatetraders.com/storage/generalconfig/small_app_logo1690844352.png" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{url('/dashboard')}}" class="nav-link">Fundforme</a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </div>
        </div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu  active ">
                <a href="{{url('/dashboard')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
                        
                <li wire:id="LBthVnuYEuISwNgkAPFI" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;LBthVnuYEuISwNgkAPFI&quot;,&quot;name&quot;:&quot;components.funding.menu-periods.menu-periods-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;b8ffab4a&quot;,&quot;data&quot;:{&quot;menu_active&quot;:&quot;home&quot;,&quot;activeMenu&quot;:false},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;bc94e6339aa18a2a81c6f942dabb7ca4c249bff4b7d74b3c769e004c9f9ba42f&quot;}}" class="menu ">
    <a href="#FnProducts" data-bs-toggle="collapse" aria-expanded=" false " class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            <span>Get Funded</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled " id="FnProducts" data-bs-parent="#accordionExample">
                    <li class="">
                <a href="{{(url('buy-account'))}}"> Purchase Account </a>
            </li>
                   
            </ul>
</li>

{{-- <!-- Livewire Component wire-end:LBthVnuYEuISwNgkAPFI -->
                <li class="menu ">
                    <a href="https://my.consummatetraders.com/funding/mychallenges" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect></svg>
                            <span>My challenges</span>
                        </div>
                    </a>
                </li> --}}


                <li class="menu ">
                    <a href="{{url('deposit')}}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            <span> Make Deposits</span>
                        </div>
                    </a>
                </li>


                
                <li class="menu ">
                    <a href="{{url('withdrawal')}}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect></svg>
                            <span>Withdrawals</span>
                        </div>
                    </a>
                </li>


                 
                <li class="menu ">
                    <a href="{{url('transfer')}}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect></svg>
                            <span>Transfer</span>
                        </div>
                    </a>
                </li>




                


                                                
            <li class="menu ">
                <a href="#finance" data-bs-toggle="collapse" aria-expanded="" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        <span>Trade History</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled " id="finance" data-bs-parent="#accordionExample">
                
                  
                    <li class="">
                        <a href="{{url('/accounthistory')}}"> Transaction history </a>
                    </li>
                                        <li class="">
                        <a href="{{url('/purchasehistory')}}"> Purchase History </a>
                    </li>
                                    </ul>
            </li>
            
            {{-- <li class="menu ">
                <a href="#refIBProgram" data-bs-toggle="collapse" aria-expanded=" false " class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>IB Program</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled " id="refIBProgram" data-bs-parent="#accordionExample">
                                        <li class="">
                        <a href="https://my.consummatetraders.com/ibLinks"> Links </a>
                    </li>
                                                                                    <li class="">
                            <a href="https://my.consummatetraders.com/funding/ibFunding"> Downlines </a>
                        </li>
                                                        </ul>
            </li> --}}

            <li class="menu ">
                <a href="{{url('profile')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>Account Profile</span>
                    </div>
                </a>
            </li>

            
                        <li class="menu ">
                <a href="{{url('support')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        <span>Support</span>
                    </div>
                </a>
            </li>
            
                      
            <li class="menu ">
                <a href="{{url('legal')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        <span>Legal Aspects</span>
                    </div>
                </a>
            </li>



            <li class="menu ">
                <a href="{{url('user-refer')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>Referrals</span>
                    </div>
                </a>
            </li>

              

            <li class="menu ">
                <a href="{{ route('logout.perform') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        <span>Logout</span>
                    </div>
                </a>
            </li>


                    </ul>

    </nav>
    
          
    </div>
<!--  END SIDEBAR  -->


<script>
    @if(Auth::user()->kyc_status=='1')
     toastr.options =
     {
         "closeButton" : true,
         "progressBar" : true
     }
             toastr.success("Kyc status verified");
   
     @else
     toastr.options =
     {
         "closeButton" : true,
         "progressBar" : true
     }
     toastr.warning("kyc not verified, please verify your kyc document");
     @endif
   </script>
   







<script>

    // Create a new Date object
var date = new Date();

// Get the components of the date
var day = date.getUTCDate();
var month = date.getUTCMonth() + 1; // Months are zero-indexed, so add 1
var year = date.getUTCFullYear();
var hours = date.getUTCHours();
var minutes = date.getUTCMinutes();

// Format the components with leading zeros if needed
day = day < 10 ? '0' + day : day;
month = month < 10 ? '0' + month : month;
hours = hours < 10 ? '0' + hours : hours;
minutes = minutes < 10 ? '0' + minutes : minutes;

// Construct the final string
var formattedDate = day + '-' + month + '-' + year + ' ' + hours + ':' + minutes + ' GMT+0';

// Print out the formatted date
console.log(formattedDate);
// Assuming you have an HTML element with id "formattedDateOutput"
document.getElementById("formattedDateOutput").textContent = formattedDate;


     </script>