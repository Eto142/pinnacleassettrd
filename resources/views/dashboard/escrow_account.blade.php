@include('dashboard.header')
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
    .btn-primary{
        background: #419b53 !important;
        border-color: #419b53 !important;
        box-shadow:  0 10px 20px -10px #191914 !important;
        color: #fff !important;
    }
   .btn-primary:hover, .btn-primary:focus{
        background: #3f503a !important;
        border-color: #3f503a !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Primary Buttons*/


    /* Secondary Buttons */
   .btn-secondary{
        background: #382266 !important;
        border-color: #382266 !important;
        box-shadow:  0 10px 20px -10px #9374d1  !important;
        color: #fff !important;
    }
   .btn-secondary:hover, .btn-secondary:focus{
        background: #513b80 !important;
        border-color: #513b80 !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Secondary Buttons*/


    /* Warning Buttons */
   .btn-warning{
        background: #e2a03f !important;
        border-color: #e2a03f !important;
        box-shadow:  0 10px 20px -10px #e2a03f !important;
        color: #fff !important;
    }

   .btn-warning:hover, .btn-warning:focus{
        background: #cc8620 !important;
        border-color: #cc8620 !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Warning Buttons */




    /* Danger Buttons */
   .btn-danger{
        background: #e7515a !important;
        border-color: #e7515a !important;
        box-shadow:  0 10px 20px -10px  !important;
        color: #fff !important;
    }

   .btn-danger:hover, .btn-danger:focus{
        background: #e7515a !important;
        border-color: #e7515a !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Danger Buttons */



    /* Info Buttons */
   .btn-info{
        background: #00ab55 !important;
        border-color: #00ab55 !important;
        box-shadow:  0 10px 20px -10px #00ab55 !important;
        color: #fff !important;
    }

   .btn-info:hover, .btn-info:focus{
        background: #004646 !important;
        border-color: #004646 !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Info Buttons */




    /* Success Buttons */
   .btn-success{
        background: #00ab55 !important;
        border-color: #00ab55 !important;
        box-shadow:  0 10px 20px -10px #00ab55 !important;
        color: #fff !important;
    }

   .btn-success:hover, .btn-success:focus{
        background: #00ab55 !important;
        border-color: #00ab55 !important;
        box-shadow: none !important;
        color: #fff !important;
    }
    /* End Success Buttons */



    /* Dark Buttons */
   .btn-dark{
        background: #004646 !important;
        border-color: #004646 !important;
        box-shadow:  0 10px 20px -10px #004646 !important;
        color: #fff !important;
    }

   .btn-dark:hover, .btn-dark:focus{
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

    

        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content p-0">
                        <div wire:id="snAwjF5DRIAcwlxPFZ1X" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;snAwjF5DRIAcwlxPFZ1X&quot;,&quot;name&quot;:&quot;client.finance.deposit.deposit-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;deposit&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:{&quot;l4274934858-3&quot;:{&quot;id&quot;:&quot;kDjLPxiiuSvjC5WV34Q7&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;l4274934858-4&quot;:{&quot;id&quot;:&quot;xXJ99TviEg7uDFPBJ8FP&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;l4274934858-5&quot;:{&quot;id&quot;:&quot;33TySCvLFquVtObDdrF9&quot;,&quot;tag&quot;:&quot;div&quot;}},&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;f73509ab&quot;,&quot;data&quot;:{&quot;add&quot;:null,&quot;currency&quot;:&quot;&quot;,&quot;all_wallet_main&quot;:[],&quot;mainWalletActive&quot;:[],&quot;currency_group&quot;:[{&quot;id&quot;:2,&quot;name&quot;:&quot;Stable Coins&quot;,&quot;created_at&quot;:&quot;2022-04-06T23:12:04.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-04-06T23:12:07.000000Z&quot;},{&quot;id&quot;:3,&quot;name&quot;:&quot;Coins&quot;,&quot;created_at&quot;:&quot;2022-04-06T23:12:47.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-06-21T02:16:47.000000Z&quot;}],&quot;rate&quot;:0,&quot;amountCurr&quot;:1,&quot;amountBase&quot;:0,&quot;currencie&quot;:null,&quot;can_dep&quot;:true,&quot;crypto_deposit&quot;:true,&quot;fiat_deposit&quot;:false,&quot;cant_fiat_deposit&quot;:0,&quot;dep_meth_act&quot;:[],&quot;cant_custom_dep&quot;:3,&quot;custom_deposit&quot;:true,&quot;status&quot;:null,&quot;message&quot;:null,&quot;fiatdepcomission&quot;:0.97},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;all_wallet_main&quot;:{&quot;class&quot;:&quot;App\\Models\\WalletMainUser&quot;,&quot;id&quot;:[1385368],&quot;relations&quot;:[&quot;main_wallet&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;dep_meth_act&quot;:{&quot;class&quot;:&quot;App\\Models\\Depositmethod&quot;,&quot;id&quot;:[1,5,7,8],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}},&quot;models&quot;:{&quot;mainWalletActive&quot;:{&quot;class&quot;:&quot;App\\Models\\WalletMainUser&quot;,&quot;id&quot;:1385368,&quot;relations&quot;:[&quot;currencies&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;917b21c03fecdf0b680dd7b3b6bee2dfac4948603b5c28f05a9128ba913ef029&quot;}}">
                            <div class="row layout-top-spacing flex-wrap">



                                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-7 col-12 layout-spacing">
                                    <div class="tab-content" id="animateLineContent-4">
                                        <div wire:ignore.self class="tab-pane fade show active" id="permtab1" role="tabpanel" aria-labelledby="permtab1-tab">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-header">
                                                    <div class="d-flex justify-content-between flex-wrap">
                                                        <h6 class="m-0 p-3 text-center">Escrow</h6>
                                                        <div class="toolbar align-self-center"></div>
                                                    </div>
                                                </div>
                                                <div class="widget-content widget-content-area py-3">
                                                    <div class="card-body p-0">
                                                        <div class="ql-container" style="white-space: inherit;">
                                                            <div class="ql-editor" style="white-space: inherit;">
                                                                <p class="ql-align-justify"><strong></strong> An escrow account or wallet is a secure and temporary holding area for funds, assets, or data until certain conditions are fulfilled. It acts simply as a neutral third-party holder, protecting the interests of both the trader or investor and the brokerage community in a transaction.</p>
                                                                <p><br></p>
                                                                <p><strong>Here's how it works:</strong></p>
                                                                <ul>
                                                                    <li>Funds or assets are deposited into the escrow account.</li>
                                                                    <li>The platform holds the funds or assets until predetermined conditions are met (e.g., approval of services, or mutual agreement, commission/fees).</li>
                                                                    <li>Once the conditions are fulfilled, the escrow team releases the funds or assets to the intended investor's bank account or crypto address.</li>
                                                                </ul>
                                                                <p>Escrow accounts are commonly used in various transactions, such as:</p>
                                                                <ul>
                                                                    <li>Real estate purchases</li>
                                                                    <li>Online marketplaces (e.g., eBay, Amazon)</li>
                                                                    <li>Cryptocurrency transactions</li>
                                                                    <li>Business deals</li>
                                                                    <li>Legal settlements</li>
                                                                </ul>
                                                                <p>Using an escrow account or wallet provides a secure and trusted way to facilitate transactions, reducing the risk of fraud and ensuring a smooth exchange.</p>
                                                                <p><br></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                        <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                            <ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist">
                                                                                                                                      <li class="nav-item">
                                        <a  class="nav-link  active " id="2-tab" data-bs-toggle="tab" href="#cg_2" role="tab" aria-controls="home" aria-selected="true">
                                            Escrow Wallet
                                            <span class="badge badge-light-info ms-2">1</span>
                                        </a>
                                    </li>
                                                                                                                                            <li class="nav-item">
                                        <a  class="nav-link " id="3-tab" data-bs-toggle="tab" href="#cg_3" role="tab" aria-controls="home" aria-selected="false">
                                            Coins
                                            <span class="badge badge-light-info ms-2">3</span>
                                        </a>
                                    </li>
                                                                                                                                                                                              <li class="nav-item">
                                    {{-- <a  class="nav-link " id="fiat-tab" data-bs-toggle="tab" href="#cg_custom" role="tab" aria-controls="home" aria-selected="false">
                                        Online Payments
                                        <span class="badge badge-light-info ms-2">3</span>
                                    </a> --}}
                                </li>
                                                          </ul>
                            <div class="tab-content" id="simpletabContent">
                                {{-- <p>Escrow Account</p> --}}
                                                                                                  <div class="tab-pane fade  show active " id="cg_2" role="tabpanel" aria-labelledby="2-tab">
                                        <div class="row layout-top-spacing" >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
                                                    <div class="color-box" style="cursor: pointer; border: 1px solid rgba(28, 66, 128, 0.59);" wire:click="getWalletforDeposit('16')">
                                                        <span class="cl-example" style="background-color: #4361ee;"><img width="100%" src="escrow.png"></span>
                                                        <div class="cl-info">
                                                            <h5 class="cl-title">Escrow Account</h5>
                                                         
                                                            <small>Amount: {{ Auth::user()->update_escrow }}</small>
                                                            <br>
                                                            <span>locked</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                   
                                                                    <div class="tab-pane fade " id="cg_3" role="tabpanel" aria-labelledby="3-tab">
                                        <div class="row layout-top-spacing" >
                                                                                                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
                                                    <div class="color-box" style="cursor: pointer; border: 1px solid rgba(28, 66, 128, 0.59);" wire:click="getWalletforDeposit('1')">
                                                        <span class="cl-example" style="background-color: #4361ee;"><img width="100%" src="https://my.consummatetraders.com/storage/cryptocurrency/6234af5fdc104_.png"></span>
                                                        <div class="cl-info">
                                                            <h5 class="cl-title">Bitcoin</h5>
                                                            <span>BTC</span><br>
                                                            <small>Amount: {{$btc_balance}}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                                                                                                                                                                                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
                                                    <div class="color-box" style="cursor: pointer; border: 1px solid rgba(28, 66, 128, 0.59);" wire:click="getWalletforDeposit('10')">
                                                        <span class="cl-example" style="background-color: #4361ee;"><img width="100%" src="https://my.consummatetraders.com/storage/cryptocurrency/6234aff97e1b6_.png"></span>
                                                        <div class="cl-info">
                                                            <h5 class="cl-title">Ethereum</h5>
                                                            <span>ETH</span><br>
                                                            <small>Amount:{{$eth_balance}}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                                                                                                                                                                                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
                                                    <div class="color-box" style="cursor: pointer; border: 1px solid rgba(28, 66, 128, 0.59);" wire:click="getWalletforDeposit('12')">
                                                        <span class="cl-example" style="background-color: #4361ee;"><img width="100%" src="usdt.png"></span>
                                                        <div class="cl-info">
                                                            <h5 class="cl-title">USDT</h5>
                                                            <span>USDT</span><br>
                                                            <small>Amount: {{$user_balance}}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                    </div>
                                                                                                                                                          <div class="tab-pane fade " id="cg_custom" role="tabpanel" aria-labelledby="fiat-tab" >
                                                                        <div class="row layout-top-spacing" >
                                        <div wire:id="kDjLPxiiuSvjC5WV34Q7" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;kDjLPxiiuSvjC5WV34Q7&quot;,&quot;name&quot;:&quot;client.finance.deposit.custom-deposit-client-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;deposit&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;5859232c&quot;,&quot;data&quot;:{&quot;selectCustomDeposit&quot;:null,&quot;customDeposit&quot;:null,&quot;customDepositRequest&quot;:false,&quot;amount&quot;:0,&quot;comment&quot;:null,&quot;proof&quot;:null,&quot;proof_file_name&quot;:null,&quot;proof_img_valid&quot;:false,&quot;proof_upload&quot;:false,&quot;can_dep_custom&quot;:true,&quot;user_reference&quot;:&quot;Ayodre22_249387&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;6c1578b9586fb087a1c6195681d08ad5b8e856373ad7ad4592b3b98d42e09400&quot;}}">

    <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
            <div class="color-box" style="cursor: pointer; border: 1px solid rgba(28, 66, 128, 0.59);"  wire:click="showFormCustom(6)">
                <a href="javascript:;" class="cl-example" style="cursor: default;"><img width="100%" src="https://my.consummatetraders.com/storage/provider/7d89f0578313b.jpg"></a>
                <div class="cl-info">
                    <h5 class="cl-title">Pay with Bank Transfer. Processing time is 0 - 3 hours</h5>
                </div>
            </div>
        </div>
                    </div>

    
    <script>

        document.addEventListener("DOMContentLoaded", () => {

            Livewire.on('custom_show', Msg => {
                $('#customModal').modal('show');
            });
            Livewire.on('custom_hide', Msg => {
                $('#customModal').modal('hide');
            });

            Livewire.on('ct_success', Msg => {
                Snackbar.show({
                    text: Msg,
                    pos: 'top-center',
                    actionTextColor: '#fff',
                    backgroundColor: '#00ab55',
                    showAction: false
                })
            });

            Livewire.on('ct_error', Msg => {
                Snackbar.show({
                    text: Msg,
                    pos: 'top-center',
                    actionTextColor: '#fff',
                    backgroundColor: '#e7515a',
                    showAction: false
                })
            });
        });

    </script>
</div>

<!-- Livewire Component wire-end:kDjLPxiiuSvjC5WV34Q7 -->                                    </div>
                                                                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
                                        <div wire:id="xXJ99TviEg7uDFPBJ8FP" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;xXJ99TviEg7uDFPBJ8FP&quot;,&quot;name&quot;:&quot;client.finance.deposit.praxis-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;deposit&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;ea2374b3&quot;,&quot;data&quot;:{&quot;amount&quot;:50,&quot;logo&quot;:&quot;instantpayment.png&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;1b9cfaf003caecfe6d03781d89b227e07ec2ce5f957cf8fe89782b3159941912&quot;}}">
    <div class="color-box" style="cursor: pointer; border: 1px solid rgba(28, 66, 128, 0.59);"  data-bs-toggle="modal" data-bs-target="#praxisModal" >
        <a href="javascript:;" class="cl-example" style="cursor: default;"><img width="100%" height="100%" src="https://my.consummatetraders.com/storage/provider/instantpayment.png"></a>
        <div class="cl-info">
            <h5 class="cl-title">Instant Payment</h5>
            <span>You will be redirect to payment provider</span>
        </div>
    </div>
    
    <div wire:ignore.self class="modal fade profile-modal" id="praxisModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #ffffff">
            <div class="m-0" style="border-radius: 6px; border: 2px solid #e0e6ed;">
                <div class="d-flex justify-content-between pt-2 px-2">
                    <div class="d-flex d-inline-flex">
                            <div class="avatar  avatar-sm me-2" style="border-radius: 50%; border: 1px solid rgba(28, 66, 128, 0.89);">
                                <img class="rounded-circle" src="https://my.consummatetraders.com/storage/provider/instantpayment.png">
                            </div>
                        <div>
                            {{-- <h4 class="mb-0" style="font-size: 16px; font-weight: 600;">Online Payment</h4> --}}
                        </div>
                    </div>
                    <a href="javascript:;" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </a>
                </div>
                <div class="modal-body pt-4 px-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <div style="margin:auto; width: 250px;">
                                    <label class="col-form-label ">Amount to deposit in USD</label>
                                    <input wire:model.lazi="amount" placeholder="Ej: 1000" class="form-control form-control-lg" required autofocus
                                           onKeyDown="if(this.value.length < this.maxLength && event.keyCode > 47 && event.keyCode < 58 || (event.keyCode > 95 && event.keyCode < 106) || (event.ctrlKey && event.key === 'v') || event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 35 || event.keyCode == 36 || event.keyCode == 46 || event.keyCode == 110 || event.keyCode == 190)return true; else return false;"
                                           oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                           type="text" maxlength="9"/>
                                    
                                    <button type="button" wire:click="makePraxisDeposit()"  enable  class="btn btn-light-primary font-weight-bold mt-2">
                                        Make deposit
                                    </button>
                                </div>
                            </div>
                            <div class="mt-3 col-12 text-center">You will be redirected to the Praxis terminal to complete the payment process. When the process is complete, just close the Praxis terminal window. You will be notified by mail the status of your transaction.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div wire:loading wire:target="makePraxisDeposit">
        <div class="d-flex justify-content-center myoverlay">
            <div class="myoverlayMsg">
                <div class="loader">
                    <div class="loader-content">
                        <div class="spinner-grow align-self-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {


            Livewire.on('payment_redirect', function(url) {
                $("#praxisModal").modal('hide');

                Snackbar.show({
                    text: "You will be redirected to the Praxis terminal to complete the payment process. When the process is complete, just close the Praxis terminal window. You will be notified by mail the status of your transaction",
                    pos: 'top-center',
                    actionTextColor: '#fff',
                    backgroundColor: '#00ab55',
                    showAction: false
                })

                setTimeout(function(){
                    window.open(url, '_blank');
                }, 3000)

            });

            Livewire.on('p_success', Msg => {
                Snackbar.show({
                    text: Msg,
                    pos: 'top-center',
                    actionTextColor: '#fff',
                    backgroundColor: '#00ab55',
                    showAction: false
                })
            });

            Livewire.on('p_error', Msg => {
                Snackbar.show({
                    text: Msg,
                    pos: 'top-center',
                    actionTextColor: '#fff',
                    backgroundColor: '#e7515a',
                    showAction: false
                })
            });
        });

    </script>

</div>

<!-- Livewire Component wire-end:xXJ99TviEg7uDFPBJ8FP -->                                    </div>
                                    
                                                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col layout-spacing">
                                        <div wire:id="33TySCvLFquVtObDdrF9" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;33TySCvLFquVtObDdrF9&quot;,&quot;name&quot;:&quot;client.finance.deposit.kora-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;deposit&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;523d7d0e&quot;,&quot;data&quot;:{&quot;time&quot;:1715729091,&quot;amount&quot;:&quot;5&quot;,&quot;ngnamount&quot;:7400,&quot;min&quot;:&quot;5&quot;,&quot;logo&quot;:&quot;64f399446a0de.png&quot;,&quot;method&quot;:[],&quot;pk_api&quot;:&quot;pk_live_yRkpHSS1prPhwWP8RjaTwKmmf9bpPxM5tS2LtXwy&quot;,&quot;rate&quot;:&quot;1480&quot;},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;method&quot;:{&quot;class&quot;:&quot;App\\Models\\Depositmethod&quot;,&quot;id&quot;:8,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;95fb226531331732487ad0cac7d22b0e4c056c4e004d2cca7ec289b01da7098f&quot;}}">
    <div class="color-box" style="cursor: pointer; border: 1px solid rgba(28, 66, 128, 0.59);"  data-bs-toggle="modal" data-bs-target="#koraModal" >
        <a href="javascript:;" class="cl-example" style="cursor: default;"><img width="100%" height="100%" src="https://my.consummatetraders.com/storage/provider/64f399446a0de.png"></a>
        <div class="cl-info">
            <h5 class="cl-title">Instant Payment Naira</h5>
            <span>Rate: 1 USD = 1480NGN</span>
        </div>
    </div>
                <div wire:ignore.self class="modal fade profile-modal" id="koraModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #ffffff">
            <div class="m-0" style="border-radius: 6px; border: 2px solid #e0e6ed;">
                <div class="d-flex justify-content-between pt-2 px-2">
                    <div class="d-flex d-inline-flex">
                            <div class="avatar  avatar-sm me-2" style="border-radius: 50%; border: 1px solid rgba(28, 66, 128, 0.89);">
                                <img class="rounded-circle" src="https://my.consummatetraders.com/storage/provider/64f399446a0de.png">
                            </div>
                        <div>
                            <h4 class="mb-0" style="font-size: 16px; font-weight: 600;">Instant Payment Naira</h4>
                        </div>
                    </div>
                    <a href="javascript:;" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </a>
                </div>
                <div class="modal-body pt-4 px-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <div style="margin:auto; width: 250px;">
                                    <label class="col-form-label ">Amount to deposit in USD</label>
                                    <input wire:model.debounce.1000ms="amount" placeholder="Ej: 1000" class="form-control form-control-lg" required autofocus
                                           onKeyDown="if(this.value.length < this.maxLength && event.keyCode > 47 && event.keyCode < 58 || (event.keyCode > 95 && event.keyCode < 106) || (event.ctrlKey && event.key === 'v') || event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 35 || event.keyCode == 36 || event.keyCode == 46 || event.keyCode == 110 || event.keyCode == 190)return true; else return false;"
                                           oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                           type="text" maxlength="9"/>
                                                                        <div class="small"><b>Rate:</b> 1 USD = 1480 NGN</div>
                                    <div class="small">5 USD = 7400 NGN</div>

                                </div>
                            </div>
                            <div class="mt-3 col-12 text-center">Complete the payment process. When the process is complet you will be notified by mail the status of your transaction.</div>
                            <div class="text-center">
                                <button type="button" onclick="payKorapay(7400,1715729091)"  enable  class="btn btn-light-primary font-weight-bold mt-2">
                                    Make deposit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://korablobstorage.blob.core.windows.net/modal-bucket/korapay-collections.min.js"></script>
<script>

    function payKorapay(amount,mtime) {
        window.Korapay.initialize({
            key: "pk_live_yRkpHSS1prPhwWP8RjaTwKmmf9bpPxM5tS2LtXwy",
            reference: "Ayodre22|"+mtime,
            amount: amount,
            currency: "NGN",
            customer: {
                name: "Ayo Lott",
                email: "Bebelizibe@gmail.com"
            },
            notification_url: "https://my.consummatetraders.com/koracallback",
            onClose: function () {
                window.livewire.find('33TySCvLFquVtObDdrF9').amount = 0;
            },
            onSuccess: function (data) {
                Snackbar.show({
                    text: "Payment made successfully, when the deposit is confirmed it will be reflected in your account, you will be notified by email",
                    pos: 'top-center',
                    actionTextColor: '#fff',
                    backgroundColor: '#00ab55',
                    showAction: false
                });
                $('#koraModal').modal('hide');
            },
            onFailed: function (data) {
                Snackbar.show({
                    text: "An error has occurred, if it persists contact support",
                    pos: 'top-center',
                    actionTextColor: '#fff',
                    backgroundColor: '#e7515a',
                    showAction: false
                });
                $('#koraModal').modal('hide');
            }
        });
    }

</script>
    


</div>

<!-- Livewire Component wire-end:33TySCvLFquVtObDdrF9 -->                                    </div>
                                    
                                </div>
                                                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div wire:loading>
            <div class="d-flex justify-content-center myoverlay">
                <div class="myoverlayMsg">
                    <div class="loader">
                        <div class="loader-content">
                            <div class="spinner-grow align-self-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        

    </div>

<!-- Livewire Component wire-end:snAwjF5DRIAcwlxPFZ1X -->

                    
                                    </div>
            </div>
        </div>
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->



<script src="https://my.consummatetraders.com/theme/plugins/src/global/vendors.min.js"></script>
<script src="https://my.consummatetraders.com/theme/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://my.consummatetraders.com/theme/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="https://my.consummatetraders.com/theme/layouts/vertical-dark-menu/app.js"></script>

<script src="https://my.consummatetraders.com/theme/assets/js/custom.js"></script>


<script src="https://my.consummatetraders.com/theme/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>

<script src="https://my.consummatetraders.com/theme/plugins/src/notification/snackbar/snackbar.min.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->

<script>
    </script>

<script src="/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'AQwYtqXc3HBn98e3UJ553lJWaTk4buK9P7H5Rw9o';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>

<script>
    Livewire.on('success', Msg => {
        Snackbar.show({
            text: Msg,
            pos: 'top-center',
            actionTextColor: '#fff',
            backgroundColor: '#4361ee',
            showAction: false
        })
    });

    Livewire.on('warning', Msg => {
        Snackbar.show({
            text: Msg,
            pos: 'top-center',
            actionTextColor: '#fff',
            backgroundColor: '#e2a03f',
            showAction: false
        })
    });

    Livewire.on('error', Msg => {
        Snackbar.show({
            text: Msg,
            pos: 'top-center',
            actionTextColor: '#fff',
            backgroundColor: '#e7515a',
            showAction: false
        })
    });

    // Este evento es disparado por el Componente 'NavbarRewardBreakdownModalComponent'
    Livewire.on('open_reward_breakdown_points', _=>{
        $('#show_rewards_breakdown_modal').modal('show');
    })

    Livewire.on('modal', o=>{
        $('#'+o.id).modal(o.action);
    })

</script>


            <script>
                if("" == "Ok")
                {
                    Snackbar.show({
                        text: "",
                        pos: 'top-center',
                        actionTextColor: '#fff',
                        backgroundColor: '#00ab55',
                        showAction: false
                    })
                }

                if("" == "Error")
                {
                    Snackbar.show({
                        text: "",
                        pos: 'top-center',
                        actionTextColor: '#fff',
                        backgroundColor: '#e7515a',
                        showAction: false
                    })
                }

                document.addEventListener("DOMContentLoaded", () => {

                    Livewire.on('hide-modal', Msg => {
                        $('#depositModal').modal('hide');

                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: Msg,
                            showConfirmButton: true
                        })
                    });

                    Livewire.on('show_modal', Msg => {
                        $('#depositModal').modal('show');
                    });

                    Livewire.on('success', Msg => {
                        Snackbar.show({
                            text: Msg,
                            pos: 'top-center',
                            actionTextColor: '#fff',
                            backgroundColor: '#00ab55',
                            showAction: false
                        })
                    });

                    Livewire.on('error', Msg => {
                        Snackbar.show({
                            text: Msg,
                            pos: 'top-center',
                            actionTextColor: '#fff',
                            backgroundColor: '#e7515a',
                            showAction: false
                        })
                    });
                });

                function copyToClipboard(data) {
                    navigator.clipboard.writeText(data);
                    Snackbar.show({
                        text: 'copied successfully',
                        pos: 'top-center',
                        actionTextColor: '#fff',
                        backgroundColor: '#00ab55',
                        showAction: false
                    })
                }

                Livewire.on('deposit_error_creating_wallet', function() {
                    Snackbar.show({
                        text: "Error creating the wallet, please try again. If the error persists, contact support.",
                        pos: 'top-center',
                        actionTextColor: '#fff',
                        backgroundColor: '#e7515a',
                        showAction: false
                    })
                });

            </script>
        </body>
</html>

@include('dashboard.footer')