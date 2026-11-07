@include('dashboard.header')


        
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content p-0">
                <div wire:id="XEos4e7s0l1xQHirNPFy" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;XEos4e7s0l1xQHirNPFy&quot;,&quot;name&quot;:&quot;common.profile-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:{&quot;l2435479828-0&quot;:{&quot;id&quot;:&quot;1EZ5lQzIctsrr0zD3U3T&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;l2435479828-1&quot;:{&quot;id&quot;:&quot;sj12ZLxDPG6EbDkLlzZT&quot;,&quot;tag&quot;:&quot;div&quot;}},&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;7e6ac500&quot;,&quot;data&quot;:{&quot;userData&quot;:[],&quot;param&quot;:false,&quot;tabGeneral&quot;:&quot;generalInformation&quot;,&quot;hedge_module&quot;:false,&quot;crm_module&quot;:false,&quot;&quot;funding_module&quot;:true,&quot;:&quot;Metamap&quot;,&quot;dataTab&quot;:[&quot;generalInformation&quot;,&quot;security&quot;,&quot;transactionHistory&quot;,&quot;referrals&quot;,&quot;deposit&quot;,&quot;withdraw&quot;,&quot;depositInfo&quot;,&quot;,&quot;challenges&quot;]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userData&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;lang&quot;,&quot;permissions&quot;,&quot;roles&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;9786a58411200d429e77f6177f6ba3836efc0e03a201e054a76f43cfe7d30a2c&quot;}}">

<div class="account-settings-container layout-top-spacing">
<div class="account-content">

    <div class="row mb-3">
<div class="col-md-12">
<div class="animated-underline-content">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a wire:ignore.self wire:click="tabControlGeneral('generalInformation')" class="nav-link active" data-bs-toggle="tab" href="#contentTab" role="tab" aria-selected="true" style="padding: 5px 0.5rem">
                General information
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link "  href="{{url('photo')}}" role="tab"  style="padding: 5px 0.5rem">
                Profile Picture
            </a>
        </li>
                            <li class="nav-item">
                <a href="{{url('kyc')}}" class="nav-link "   role="tab" style="padding: 5px 0.5rem">
                    KYC
                </a>
            </li>
                                                        
                    </ul>
</div>
</div>
</div>

    <div class="tab-content" id="animateLineContent-4">
        <div class="tab-pane fade show active" id="contentTab" role="tabpanel">
            <div class="row" wire:loading.remove wire:target="tabControlGeneral">

                                            <div wire:id="1EZ5lQzIctsrr0zD3U3T" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;1EZ5lQzIctsrr0zD3U3T&quot;,&quot;name&quot;:&quot;common.profile-components.general.profile&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;updUserState&quot;,&quot;updUserStateCancel&quot;,&quot;disableSecurity&quot;,&quot;sendActMail&quot;,&quot;assignCredit&quot;,&quot;uploadImgProfile&quot;,&quot;deleteUser&quot;,&quot;updUserData&quot;,&quot;removeUserClient&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;1eabe608&quot;,&quot;data&quot;:{&quot;user_id&quot;:249387,&quot;param&quot;:false,&quot;userData&quot;:[],&quot;userSaldo&quot;:0,&quot;walletDefault&quot;:&quot;USD&quot;,&quot;userMainWallet&quot;:[],&quot;userState&quot;:null,&quot;searchIb&quot;:null,&quot;selectedIb&quot;:null,&quot;userError&quot;:null,&quot;linkSelected&quot;:-1,&quot;resolutions&quot;:[],&quot;selectresolution&quot;:&quot;other&quot;,&quot;resolutiondescrip&quot;:null,&quot;internalComent&quot;:null,&quot;nameMotive&quot;:null,&quot;selectSaveMotive&quot;:false,&quot;sendEmail&quot;:false,&quot;creditAmount&quot;:null,&quot;creditType&quot;:null,&quot;passUs&quot;:&quot;&quot;,&quot;password&quot;:&quot;&quot;,&quot;password_confirmation&quot;:&quot;&quot;,&quot;imgprofile&quot;:null,&quot;img&quot;:null,&quot;IbRatio&quot;:null},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userData&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;country&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;userMainWallet&quot;:{&quot;class&quot;:&quot;App\\Models\\WalletMainUser&quot;,&quot;id&quot;:1385368,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;4cc11edbaafd6828f6152cf98727d40ca57f5064ed5ddcb2e5cebd34557c9427&quot;}}" class="col-xl-4 col-lg-4 col-md-12 col-sm-12 layout-spacing">
<div class="user-profile">
<div class="widget-content widget-content-area">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="">
            {{Auth::user()->email}}
        </h5>
                            <div>
                <a href="javascript:void(0)" onclick="confirmRemoveClient()" class="btn btn-icon btn-light-danger btn-sm" title="Delete account" style="padding: 3px 4px;">
                    <svg style="width: 18px; height: 18px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                        <polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                </a>
            </div>
                                    </div>
    <div class="text-center user-info mt-4" wire:loading.class="opacity-50" wire:target="imgprofile">
                            <div wire:ignore.self class="image-input image-input-outline image-input">
                                            <div id="imgwrapper" class="image-input-wrapper" style="background-image: url('storage/default.jpg'); background-position: center; background-size: cover; border: 3px solid #888ea8;"></div>
                                        <label onclick="$('#fileUpload').click();" class="btn m-0" data-action="change" style="padding: 4px; border: 2px solid #888ea8; background-color: #F3F6F9; border-radius: 50%; height: 24px !important; width: 24px !important; align-items: center;">
                    <div style="font-size: 14px; margin-top: -5px; margin-left: -1px; color: #515365">
                        <i wire:loading.remove wire:target="imgprofile" class="fa fa-upload"></i>
                        <span class="spinner-border text-warning align-self-center me-2" wire:loading wire:target="imgprofile" style="width: 14px; height: 14px;"></span>
                    </div>
                  
                </label>
            </div>
                        <p class="">{{Auth::user()->name}}</p>
    </div>
    <div class="user-info-list">

        <div class="">
            <ul class="contacts-block list-unstyled mt-2">
                <li class="contacts-block__item d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    {{Auth::user()->email}}
                </li>
                                                                    <li class="contacts-block__item d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin me-2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        {{Auth::user()->country}}                            </li>
                                                                                    </ul>

                                    <div class="d-grid gap-2 col-8 mx-auto pt-4">
                    <button wire:click="showPass" class="btn btn-primary" type="button">
                        <span class="spinner-border text-warning align-self-center me-2" wire:loading wire:target="showPass" style="width: 14px; height: 14px;"></span>
                        Change password
                    </button>
                </div>
                            </div>
    </div>
</div>
</div>

    <div wire:ignore.self class="modal fade" id="modalPass" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h6 class="modal-title add-title text-dark">Change password</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-12 mb-3">
                <div class="form-group">
                    <label class="mb-0">Password<code>*</code></label>
                    <input type="password" wire:model.defer="passUs" class="form-control">
                                            </div>
            </div>
            <div class="col-sm-12 mb-3">
                <div class="form-group">
                    <label class="mb-0">New password<code>*</code></label>
                    <input type="password" wire:model.defer="password" class="form-control">
                                            </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="mb-0">Confirm password<code>*</code></label>
                    <input type="password" wire:model.defer="password_confirmation" class="form-control">
                                            </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button data-bs-dismiss="modal" class="btn">Back</button>
        <button wire:click="changePass()" wire:loading.attr="disabled" wire:target="changePass" class="btn btn-primary">
            <span class="spinner-border text-warning align-self-center me-2" wire:loading wire:target="changePass" style="width: 14px; height: 14px;"></span>
            Save
        </button>
    </div>
</div>
</div>
</div>
</div>


<!-- Livewire Component wire-end:1EZ5lQzIctsrr0zD3U3T -->                            <div wire:id="sj12ZLxDPG6EbDkLlzZT" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;sj12ZLxDPG6EbDkLlzZT&quot;,&quot;name&quot;:&quot;common.profile-components.general.data&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;57bcdccf&quot;,&quot;data&quot;:{&quot;user_id&quot;:249387,&quot;param&quot;:false,&quot;userData&quot;:[],&quot;name&quot;:&quot;Ayo&quot;,&quot;lastname&quot;:&quot;Lott&quot;,&quot;phone&quot;:&quot;07063425403&quot;,&quot;instagram&quot;:null,&quot;sex&quot;:&quot;m&quot;,&quot;bday&quot;:&quot;15&quot;,&quot;bmonth&quot;:&quot;01&quot;,&quot;bmonthName&quot;:null,&quot;byear&quot;:null,&quot;street&quot;:null,&quot;city&quot;:null,&quot;country&quot;:163,&quot;postalcode&quot;:null,&quot;listCountry&quot;:[{&quot;id&quot;:1,&quot;country&quot;:&quot;Afghanistan&quot;},{&quot;id&quot;:2,&quot;country&quot;:&quot;\u00c5land Islands&quot;},{&quot;id&quot;:3,&quot;country&quot;:&quot;Albania&quot;},{&quot;id&quot;:4,&quot;country&quot;:&quot;Algeria&quot;},{&quot;id&quot;:5,&quot;country&quot;:&quot;American Samoa&quot;},{&quot;id&quot;:6,&quot;country&quot;:&quot;Andorra&quot;},{&quot;id&quot;:7,&quot;country&quot;:&quot;Angola&quot;},{&quot;id&quot;:8,&quot;country&quot;:&quot;Anguilla&quot;},{&quot;id&quot;:9,&quot;country&quot;:&quot;Antarctica&quot;},{&quot;id&quot;:10,&quot;country&quot;:&quot;Antigua and Barbuda&quot;},{&quot;id&quot;:11,&quot;country&quot;:&quot;Argentina&quot;},{&quot;id&quot;:12,&quot;country&quot;:&quot;Armenia&quot;},{&quot;id&quot;:13,&quot;country&quot;:&quot;Aruba&quot;},{&quot;id&quot;:14,&quot;country&quot;:&quot;Australia&quot;},{&quot;id&quot;:15,&quot;country&quot;:&quot;Austria&quot;},{&quot;id&quot;:16,&quot;country&quot;:&quot;Azerbaijan&quot;},{&quot;id&quot;:17,&quot;country&quot;:&quot;Bahamas&quot;},{&quot;id&quot;:18,&quot;country&quot;:&quot;Bahrain&quot;},{&quot;id&quot;:19,&quot;country&quot;:&quot;Bangladesh&quot;},{&quot;id&quot;:20,&quot;country&quot;:&quot;Barbados&quot;},{&quot;id&quot;:21,&quot;country&quot;:&quot;Belarus&quot;},{&quot;id&quot;:22,&quot;country&quot;:&quot;Belgium&quot;},{&quot;id&quot;:23,&quot;country&quot;:&quot;Belize&quot;},{&quot;id&quot;:24,&quot;country&quot;:&quot;Benin&quot;},{&quot;id&quot;:25,&quot;country&quot;:&quot;Bermuda&quot;},{&quot;id&quot;:26,&quot;country&quot;:&quot;Bhutan&quot;},{&quot;id&quot;:27,&quot;country&quot;:&quot;Bolivia (Plurinational State of)&quot;},{&quot;id&quot;:28,&quot;country&quot;:&quot;Bonaire, Sint Eustatius and Saba&quot;},{&quot;id&quot;:29,&quot;country&quot;:&quot;Bosnia and Herzegovina&quot;},{&quot;id&quot;:30,&quot;country&quot;:&quot;Botswana&quot;},{&quot;id&quot;:31,&quot;country&quot;:&quot;Bouvet Island&quot;},{&quot;id&quot;:32,&quot;country&quot;:&quot;Brazil&quot;},{&quot;id&quot;:33,&quot;country&quot;:&quot;British Indian Ocean Territory&quot;},{&quot;id&quot;:35,&quot;country&quot;:&quot;Virgin Islands (British)&quot;},{&quot;id&quot;:36,&quot;country&quot;:&quot;Virgin Islands (U.S.)&quot;},{&quot;id&quot;:37,&quot;country&quot;:&quot;Brunei Darussalam&quot;},{&quot;id&quot;:38,&quot;country&quot;:&quot;Bulgaria&quot;},{&quot;id&quot;:39,&quot;country&quot;:&quot;Burkina Faso&quot;},{&quot;id&quot;:40,&quot;country&quot;:&quot;Burundi&quot;},{&quot;id&quot;:41,&quot;country&quot;:&quot;Cambodia&quot;},{&quot;id&quot;:42,&quot;country&quot;:&quot;Cameroon&quot;},{&quot;id&quot;:44,&quot;country&quot;:&quot;Cabo Verde&quot;},{&quot;id&quot;:45,&quot;country&quot;:&quot;Cayman Islands&quot;},{&quot;id&quot;:46,&quot;country&quot;:&quot;Central African Republic&quot;},{&quot;id&quot;:47,&quot;country&quot;:&quot;Chad&quot;},{&quot;id&quot;:48,&quot;country&quot;:&quot;Chile&quot;},{&quot;id&quot;:49,&quot;country&quot;:&quot;China&quot;},{&quot;id&quot;:50,&quot;country&quot;:&quot;Christmas Island&quot;},{&quot;id&quot;:51,&quot;country&quot;:&quot;Cocos (Keeling) Islands&quot;},{&quot;id&quot;:52,&quot;country&quot;:&quot;Colombia&quot;},{&quot;id&quot;:53,&quot;country&quot;:&quot;Comoros&quot;},{&quot;id&quot;:54,&quot;country&quot;:&quot;Congo&quot;},{&quot;id&quot;:55,&quot;country&quot;:&quot;Congo (Democratic Republic of the)&quot;},{&quot;id&quot;:56,&quot;country&quot;:&quot;Cook Islands&quot;},{&quot;id&quot;:57,&quot;country&quot;:&quot;Costa Rica&quot;},{&quot;id&quot;:58,&quot;country&quot;:&quot;Croatia&quot;},{&quot;id&quot;:59,&quot;country&quot;:&quot;Cuba&quot;},{&quot;id&quot;:60,&quot;country&quot;:&quot;Cura\u00e7ao&quot;},{&quot;id&quot;:61,&quot;country&quot;:&quot;Cyprus&quot;},{&quot;id&quot;:62,&quot;country&quot;:&quot;Czech Republic&quot;},{&quot;id&quot;:63,&quot;country&quot;:&quot;Denmark&quot;},{&quot;id&quot;:64,&quot;country&quot;:&quot;Djibouti&quot;},{&quot;id&quot;:65,&quot;country&quot;:&quot;Dominica&quot;},{&quot;id&quot;:66,&quot;country&quot;:&quot;Dominican Republic&quot;},{&quot;id&quot;:67,&quot;country&quot;:&quot;Ecuador&quot;},{&quot;id&quot;:68,&quot;country&quot;:&quot;Egypt&quot;},{&quot;id&quot;:69,&quot;country&quot;:&quot;El Salvador&quot;},{&quot;id&quot;:70,&quot;country&quot;:&quot;Equatorial Guinea&quot;},{&quot;id&quot;:71,&quot;country&quot;:&quot;Eritrea&quot;},{&quot;id&quot;:72,&quot;country&quot;:&quot;Estonia&quot;},{&quot;id&quot;:73,&quot;country&quot;:&quot;Ethiopia&quot;},{&quot;id&quot;:74,&quot;country&quot;:&quot;Falkland Islands (Malvinas)&quot;},{&quot;id&quot;:75,&quot;country&quot;:&quot;Faroe Islands&quot;},{&quot;id&quot;:76,&quot;country&quot;:&quot;Fiji&quot;},{&quot;id&quot;:77,&quot;country&quot;:&quot;Finland&quot;},{&quot;id&quot;:78,&quot;country&quot;:&quot;France&quot;},{&quot;id&quot;:79,&quot;country&quot;:&quot;French Guiana&quot;},{&quot;id&quot;:80,&quot;country&quot;:&quot;French Polynesia&quot;},{&quot;id&quot;:81,&quot;country&quot;:&quot;French Southern Territories&quot;},{&quot;id&quot;:82,&quot;country&quot;:&quot;Gabon&quot;},{&quot;id&quot;:83,&quot;country&quot;:&quot;Gambia&quot;},{&quot;id&quot;:84,&quot;country&quot;:&quot;Georgia&quot;},{&quot;id&quot;:85,&quot;country&quot;:&quot;Germany&quot;},{&quot;id&quot;:86,&quot;country&quot;:&quot;Ghana&quot;},{&quot;id&quot;:87,&quot;country&quot;:&quot;Gibraltar&quot;},{&quot;id&quot;:88,&quot;country&quot;:&quot;Greece&quot;},{&quot;id&quot;:89,&quot;country&quot;:&quot;Greenland&quot;},{&quot;id&quot;:90,&quot;country&quot;:&quot;Grenada&quot;},{&quot;id&quot;:91,&quot;country&quot;:&quot;Guadeloupe&quot;},{&quot;id&quot;:92,&quot;country&quot;:&quot;Guam&quot;},{&quot;id&quot;:93,&quot;country&quot;:&quot;Guatemala&quot;},{&quot;id&quot;:94,&quot;country&quot;:&quot;Guernsey&quot;},{&quot;id&quot;:95,&quot;country&quot;:&quot;Guinea&quot;},{&quot;id&quot;:96,&quot;country&quot;:&quot;Guinea-Bissau&quot;},{&quot;id&quot;:97,&quot;country&quot;:&quot;Guyana&quot;},{&quot;id&quot;:98,&quot;country&quot;:&quot;Haiti&quot;},{&quot;id&quot;:99,&quot;country&quot;:&quot;Heard Island and McDonald Islands&quot;},{&quot;id&quot;:100,&quot;country&quot;:&quot;Holy See&quot;},{&quot;id&quot;:101,&quot;country&quot;:&quot;Honduras&quot;},{&quot;id&quot;:102,&quot;country&quot;:&quot;Hong Kong&quot;},{&quot;id&quot;:103,&quot;country&quot;:&quot;Hungary&quot;},{&quot;id&quot;:104,&quot;country&quot;:&quot;Iceland&quot;},{&quot;id&quot;:105,&quot;country&quot;:&quot;India&quot;},{&quot;id&quot;:106,&quot;country&quot;:&quot;Indonesia&quot;},{&quot;id&quot;:107,&quot;country&quot;:&quot;C\u00f4te d&#039;Ivoire&quot;},{&quot;id&quot;:108,&quot;country&quot;:&quot;Iran (Islamic Republic of)&quot;},{&quot;id&quot;:109,&quot;country&quot;:&quot;Iraq&quot;},{&quot;id&quot;:110,&quot;country&quot;:&quot;Ireland&quot;},{&quot;id&quot;:111,&quot;country&quot;:&quot;Isle of Man&quot;},{&quot;id&quot;:112,&quot;country&quot;:&quot;Israel&quot;},{&quot;id&quot;:113,&quot;country&quot;:&quot;Italy&quot;},{&quot;id&quot;:114,&quot;country&quot;:&quot;Jamaica&quot;},{&quot;id&quot;:115,&quot;country&quot;:&quot;Japan&quot;},{&quot;id&quot;:116,&quot;country&quot;:&quot;Jersey&quot;},{&quot;id&quot;:117,&quot;country&quot;:&quot;Jordan&quot;},{&quot;id&quot;:118,&quot;country&quot;:&quot;Kazakhstan&quot;},{&quot;id&quot;:119,&quot;country&quot;:&quot;Kenya&quot;},{&quot;id&quot;:120,&quot;country&quot;:&quot;Kiribati&quot;},{&quot;id&quot;:121,&quot;country&quot;:&quot;Kuwait&quot;},{&quot;id&quot;:122,&quot;country&quot;:&quot;Kyrgyzstan&quot;},{&quot;id&quot;:123,&quot;country&quot;:&quot;Lao People&#039;s Democratic Republic&quot;},{&quot;id&quot;:124,&quot;country&quot;:&quot;Latvia&quot;},{&quot;id&quot;:125,&quot;country&quot;:&quot;Lebanon&quot;},{&quot;id&quot;:126,&quot;country&quot;:&quot;Lesotho&quot;},{&quot;id&quot;:127,&quot;country&quot;:&quot;Liberia&quot;},{&quot;id&quot;:128,&quot;country&quot;:&quot;Libya&quot;},{&quot;id&quot;:129,&quot;country&quot;:&quot;Liechtenstein&quot;},{&quot;id&quot;:130,&quot;country&quot;:&quot;Lithuania&quot;},{&quot;id&quot;:131,&quot;country&quot;:&quot;Luxembourg&quot;},{&quot;id&quot;:132,&quot;country&quot;:&quot;Macao&quot;},{&quot;id&quot;:133,&quot;country&quot;:&quot;Macedonia (the former Yugoslav Republic of)&quot;},{&quot;id&quot;:134,&quot;country&quot;:&quot;Madagascar&quot;},{&quot;id&quot;:135,&quot;country&quot;:&quot;Malawi&quot;},{&quot;id&quot;:136,&quot;country&quot;:&quot;Malaysia&quot;},{&quot;id&quot;:137,&quot;country&quot;:&quot;Maldives&quot;},{&quot;id&quot;:138,&quot;country&quot;:&quot;Mali&quot;},{&quot;id&quot;:139,&quot;country&quot;:&quot;Malta&quot;},{&quot;id&quot;:140,&quot;country&quot;:&quot;Marshall Islands&quot;},{&quot;id&quot;:141,&quot;country&quot;:&quot;Martinique&quot;},{&quot;id&quot;:142,&quot;country&quot;:&quot;Mauritania&quot;},{&quot;id&quot;:143,&quot;country&quot;:&quot;Mauritius&quot;},{&quot;id&quot;:144,&quot;country&quot;:&quot;Mayotte&quot;},{&quot;id&quot;:145,&quot;country&quot;:&quot;Mexico&quot;},{&quot;id&quot;:146,&quot;country&quot;:&quot;Micronesia (Federated States of)&quot;},{&quot;id&quot;:147,&quot;country&quot;:&quot;Moldova (Republic of)&quot;},{&quot;id&quot;:148,&quot;country&quot;:&quot;Monaco&quot;},{&quot;id&quot;:149,&quot;country&quot;:&quot;Mongolia&quot;},{&quot;id&quot;:150,&quot;country&quot;:&quot;Montenegro&quot;},{&quot;id&quot;:151,&quot;country&quot;:&quot;Montserrat&quot;},{&quot;id&quot;:152,&quot;country&quot;:&quot;Morocco&quot;},{&quot;id&quot;:153,&quot;country&quot;:&quot;Mozambique&quot;},{&quot;id&quot;:154,&quot;country&quot;:&quot;Myanmar&quot;},{&quot;id&quot;:155,&quot;country&quot;:&quot;Namibia&quot;},{&quot;id&quot;:156,&quot;country&quot;:&quot;Nauru&quot;},{&quot;id&quot;:157,&quot;country&quot;:&quot;Nepal&quot;},{&quot;id&quot;:158,&quot;country&quot;:&quot;Netherlands&quot;},{&quot;id&quot;:159,&quot;country&quot;:&quot;New Caledonia&quot;},{&quot;id&quot;:160,&quot;country&quot;:&quot;New Zealand&quot;},{&quot;id&quot;:161,&quot;country&quot;:&quot;Nicaragua&quot;},{&quot;id&quot;:162,&quot;country&quot;:&quot;Niger&quot;},{&quot;id&quot;:163,&quot;country&quot;:&quot;Nigeria&quot;},{&quot;id&quot;:164,&quot;country&quot;:&quot;Niue&quot;},{&quot;id&quot;:165,&quot;country&quot;:&quot;Norfolk Island&quot;},{&quot;id&quot;:166,&quot;country&quot;:&quot;Korea (Democratic People&#039;s Republic of)&quot;},{&quot;id&quot;:167,&quot;country&quot;:&quot;Northern Mariana Islands&quot;},{&quot;id&quot;:168,&quot;country&quot;:&quot;Norway&quot;},{&quot;id&quot;:169,&quot;country&quot;:&quot;Oman&quot;},{&quot;id&quot;:170,&quot;country&quot;:&quot;Pakistan&quot;},{&quot;id&quot;:171,&quot;country&quot;:&quot;Palau&quot;},{&quot;id&quot;:172,&quot;country&quot;:&quot;Palestine, State of&quot;},{&quot;id&quot;:173,&quot;country&quot;:&quot;Panama&quot;},{&quot;id&quot;:174,&quot;country&quot;:&quot;Papua New Guinea&quot;},{&quot;id&quot;:175,&quot;country&quot;:&quot;Paraguay&quot;},{&quot;id&quot;:176,&quot;country&quot;:&quot;Peru&quot;},{&quot;id&quot;:177,&quot;country&quot;:&quot;Philippines&quot;},{&quot;id&quot;:178,&quot;country&quot;:&quot;Pitcairn&quot;},{&quot;id&quot;:179,&quot;country&quot;:&quot;Poland&quot;},{&quot;id&quot;:180,&quot;country&quot;:&quot;Portugal&quot;},{&quot;id&quot;:181,&quot;country&quot;:&quot;Puerto Rico&quot;},{&quot;id&quot;:182,&quot;country&quot;:&quot;Qatar&quot;},{&quot;id&quot;:183,&quot;country&quot;:&quot;Republic of Kosovo&quot;},{&quot;id&quot;:184,&quot;country&quot;:&quot;R\u00e9union&quot;},{&quot;id&quot;:185,&quot;country&quot;:&quot;Romania&quot;},{&quot;id&quot;:186,&quot;country&quot;:&quot;Russian Federation&quot;},{&quot;id&quot;:187,&quot;country&quot;:&quot;Rwanda&quot;},{&quot;id&quot;:188,&quot;country&quot;:&quot;Saint Barth\u00e9lemy&quot;},{&quot;id&quot;:189,&quot;country&quot;:&quot;Saint Helena, Ascension and Tristan da Cunha&quot;},{&quot;id&quot;:190,&quot;country&quot;:&quot;Saint Kitts and Nevis&quot;},{&quot;id&quot;:191,&quot;country&quot;:&quot;Saint Lucia&quot;},{&quot;id&quot;:192,&quot;country&quot;:&quot;Saint Martin (French part)&quot;},{&quot;id&quot;:193,&quot;country&quot;:&quot;Saint Pierre and Miquelon&quot;},{&quot;id&quot;:194,&quot;country&quot;:&quot;Saint Vincent and the Grenadines&quot;},{&quot;id&quot;:195,&quot;country&quot;:&quot;Samoa&quot;},{&quot;id&quot;:196,&quot;country&quot;:&quot;San Marino&quot;},{&quot;id&quot;:197,&quot;country&quot;:&quot;Sao Tome and Principe&quot;},{&quot;id&quot;:198,&quot;country&quot;:&quot;Saudi Arabia&quot;},{&quot;id&quot;:199,&quot;country&quot;:&quot;Senegal&quot;},{&quot;id&quot;:200,&quot;country&quot;:&quot;Serbia&quot;},{&quot;id&quot;:201,&quot;country&quot;:&quot;Seychelles&quot;},{&quot;id&quot;:202,&quot;country&quot;:&quot;Sierra Leone&quot;},{&quot;id&quot;:203,&quot;country&quot;:&quot;Singapore&quot;},{&quot;id&quot;:204,&quot;country&quot;:&quot;Sint Maarten (Dutch part)&quot;},{&quot;id&quot;:205,&quot;country&quot;:&quot;Slovakia&quot;},{&quot;id&quot;:206,&quot;country&quot;:&quot;Slovenia&quot;},{&quot;id&quot;:207,&quot;country&quot;:&quot;Solomon Islands&quot;},{&quot;id&quot;:208,&quot;country&quot;:&quot;Somalia&quot;},{&quot;id&quot;:209,&quot;country&quot;:&quot;South Africa&quot;},{&quot;id&quot;:210,&quot;country&quot;:&quot;South Georgia and the South Sandwich Islands&quot;},{&quot;id&quot;:211,&quot;country&quot;:&quot;Korea (Republic of)&quot;},{&quot;id&quot;:212,&quot;country&quot;:&quot;South Sudan&quot;},{&quot;id&quot;:213,&quot;country&quot;:&quot;Spain&quot;},{&quot;id&quot;:214,&quot;country&quot;:&quot;Sri Lanka&quot;},{&quot;id&quot;:215,&quot;country&quot;:&quot;Sudan&quot;},{&quot;id&quot;:216,&quot;country&quot;:&quot;Suriname&quot;},{&quot;id&quot;:217,&quot;country&quot;:&quot;Svalbard and Jan Mayen&quot;},{&quot;id&quot;:218,&quot;country&quot;:&quot;Swaziland&quot;},{&quot;id&quot;:219,&quot;country&quot;:&quot;Sweden&quot;},{&quot;id&quot;:220,&quot;country&quot;:&quot;Switzerland&quot;},{&quot;id&quot;:221,&quot;country&quot;:&quot;Syrian Arab Republic&quot;},{&quot;id&quot;:222,&quot;country&quot;:&quot;Taiwan&quot;},{&quot;id&quot;:223,&quot;country&quot;:&quot;Tajikistan&quot;},{&quot;id&quot;:224,&quot;country&quot;:&quot;Tanzania, United Republic of&quot;},{&quot;id&quot;:225,&quot;country&quot;:&quot;Thailand&quot;},{&quot;id&quot;:226,&quot;country&quot;:&quot;Timor-Leste&quot;},{&quot;id&quot;:227,&quot;country&quot;:&quot;Togo&quot;},{&quot;id&quot;:228,&quot;country&quot;:&quot;Tokelau&quot;},{&quot;id&quot;:229,&quot;country&quot;:&quot;Tonga&quot;},{&quot;id&quot;:230,&quot;country&quot;:&quot;Trinidad and Tobago&quot;},{&quot;id&quot;:231,&quot;country&quot;:&quot;Tunisia&quot;},{&quot;id&quot;:232,&quot;country&quot;:&quot;Turkey&quot;},{&quot;id&quot;:233,&quot;country&quot;:&quot;Turkmenistan&quot;},{&quot;id&quot;:234,&quot;country&quot;:&quot;Turks and Caicos Islands&quot;},{&quot;id&quot;:235,&quot;country&quot;:&quot;Tuvalu&quot;},{&quot;id&quot;:236,&quot;country&quot;:&quot;Uganda&quot;},{&quot;id&quot;:237,&quot;country&quot;:&quot;Ukraine&quot;},{&quot;id&quot;:238,&quot;country&quot;:&quot;United Arab Emirates&quot;},{&quot;id&quot;:239,&quot;country&quot;:&quot;United Kingdom of Great Britain and Northern Ireland&quot;},{&quot;id&quot;:241,&quot;country&quot;:&quot;Uruguay&quot;},{&quot;id&quot;:242,&quot;country&quot;:&quot;Uzbekistan&quot;},{&quot;id&quot;:243,&quot;country&quot;:&quot;Vanuatu&quot;},{&quot;id&quot;:244,&quot;country&quot;:&quot;Venezuela (Bolivarian Republic of)&quot;},{&quot;id&quot;:245,&quot;country&quot;:&quot;Viet Nam&quot;},{&quot;id&quot;:246,&quot;country&quot;:&quot;Wallis and Futuna&quot;},{&quot;id&quot;:247,&quot;country&quot;:&quot;Western Sahara&quot;},{&quot;id&quot;:248,&quot;country&quot;:&quot;Yemen&quot;},{&quot;id&quot;:249,&quot;country&quot;:&quot;Zambia&quot;},{&quot;id&quot;:250,&quot;country&quot;:&quot;Zimbabwe&quot;}]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userData&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;country&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;963569e1250e7a4c139cc72dc50495fa0515201c06d4f416a7c42d856b470269&quot;}}" class="col-xl-8 col-lg-8 col-md-12 col-sm-12 layout-spacing">
<div class="section general-info">
<div class="info">
    <div class="form">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif

        <div class="row">
            <form action="{{url('/profile-update')}}" method="POST">
                @csrf
                                    <div class="col-md-3 mb-3">
                    <div class="form-group was-validated">
                        <label>Name</label>
                        <input value="{{Auth::user()->name}}" name="name" type="text" class="form-control" style=""/>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="form-group was-validated">
                        <label>Last Name</label>
                        <input value="{{Auth::user()->lname}}" type="text" name="lname" class="form-control" style=""/>
                    </div>
                </div>


                <div class="col-md-3 mb-3">
                    <div class="form-group was-validated">
                        <label>Email</label>
                        <input value="{{Auth::user()->email}}" type="text" name="email" readonly class="form-control" style=""/>
                    </div>
                </div>



                <div class="col-md-3 mb-3">
                    <div class="form-group was-validated">
                        <label>Phone</label>
                        <input value="{{Auth::user()->phone}}" type="number" name="phone" class="form-control" style=""/>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-group was-validated">
                        <label>Address</label>
                        <input value="{{Auth::user()->address}}" type="text" name="address" class="form-control" style=""/>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-group was-validated">
                        <label>Date of Birth</label>
                        <input value="{{Auth::user()->dob}}" type="date" name="dob" class="form-control" style=""/>
                    </div>
                </div>
              
               
                                            <div class="col-md-12 mt-1">
                        <div class="form-group text-end">
                            <button wire:click="updateProfile()" wire:loading.attr="disabled" wire:target="updateProfile" class="btn btn-primary">
                                <span wire:loading wire:target="updateProfile" class="spinner-border text-warning align-self-center me-2" style="width: 15px; height: 15px;"></span>
                                Save changes
                            </button>

                        </form>
                        </div>
                    </div>
                                                    </div>
    </div>
</div>
</div>
</div>

<!-- Livewire Component wire-end:sj12ZLxDPG6EbDkLlzZT -->                                                    
            </div>
            <div class="text-center" wire:loading.class="mt-5" wire:target="tabControlGeneral">
                <div wire:loading wire:target="tabControlGeneral">
                    <div class="loader">
                        <div class="loader-content">
                            <div class="spinner-border text-warning"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

<!-- Livewire Component wire-end:XEos4e7s0l1xQHirNPFy -->

            
                            </div>
    </div>
</div>
</div>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->





</body>
</html>







@include('dashboard.footer')