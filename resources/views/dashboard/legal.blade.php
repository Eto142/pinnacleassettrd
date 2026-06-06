@include('dashboard.header')

      
        
<div id="content" class="main-content">
  <div class="layout-px-spacing">
      <div class="middle-content p-0">
              <div wire:id="eASecawnnEq3Z2Ecekfy" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;eASecawnnEq3Z2Ecekfy&quot;,&quot;name&quot;:&quot;common.legal-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;legal&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;ecb6de1b&quot;,&quot;data&quot;:{&quot;docName&quot;:null,&quot;docDescription&quot;:null,&quot;legal&quot;:[],&quot;tab&quot;:1},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;legal&quot;:{&quot;class&quot;:&quot;App\\Models\\LegalDoc&quot;,&quot;id&quot;:[1,3],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;fe9e5c11bc41e738c15d00ef5afa35a95d6e63245aef88ae70ee2dbbedaf8e1c&quot;}}">
<div class="row layout-top-spacing flex-wrap">

<div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-7 col-12 layout-spacing">
<div class="tab-content" id="animateLineContent-4">
          <div wire:ignore.self class="tab-pane fade  show active " id="permtab1" role="tabpanel" aria-labelledby="permtab1-tab">
      <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="d-flex justify-content-between flex-wrap">
                  <h6 class="m-0 p-3 text-center">
                    Terms
                  </h6>
                  <div class="toolbar align-self-center">
                                                      
                  </div>
              </div>
          </div>
          <div class="widget-content widget-content-area py-3">
              <div class="card-body p-0">
                  <div class="ql-container" style="white-space: inherit;">
                      <div class="ql-editor" style="white-space: inherit;">
                          <p class="ql-align-justify"><strong></strong> Prior to opening a trading account, please ensure that you have read and understood our Account Terms and other disclosure documents as applicable</p><p><br></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>




  <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-7 col-12 layout-spacing">
    <div class="tab-content" id="animateLineContent-4">
              <div wire:ignore.self class="tab-pane fade  show active " id="permtab1" role="tabpanel" aria-labelledby="permtab1-tab">
          <div class="statbox widget box box-shadow">
              <div class="widget-header">
                  <div class="d-flex justify-content-between flex-wrap">
                      <div class="toolbar align-self-center">
                                                          
                      </div>
                  </div>
              </div>
              <div class="widget-content widget-content-area py-3">
                  <div class="card-body p-0">
                      <div class="ql-container" style="white-space: inherit;">
                          <div class="ql-editor" style="white-space: inherit;">
                              <p class="ql-align-justify"><strong></strong> <a href="terms&conditions.pdf" > Terms & Conditions</a></p><p><br></p>
                          </div>

                          <div class="ql-editor" style="white-space: inherit;">
                            <p class="ql-align-justify"><strong></strong><a href="Risk_Disclosure.pdf" > Risk Disclosure Notice</a></p><p><br></p>
                        </div>

                        <div class="ql-editor" style="white-space: inherit;">
                            <p class="ql-align-justify"><strong></strong> <a href="Order_Execution_Policy.pdf">Order Execution Policy</a> </p><p><br></p>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
          <div wire:ignore.self class="tab-pane fade " id="permtab3" role="tabpanel" aria-labelledby="permtab3-tab">
      <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="d-flex justify-content-between flex-wrap">
                 
                  <div class="toolbar align-self-center">
                                                      
                  </div>
              </div>
          </div>
          <div class="widget-content widget-content-area py-3">
              <div class="card-body p-0">
                  <div class="ql-container" style="white-space: inherit;">
                      <div class="ql-editor" style="white-space: inherit;">
                        
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
</div>

</div>

<div wire:ignore.self class="modal animated fadeInRight" id="docInfo" tabindex="-1" data-bs-backdrop="static"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
  <div class="modal-body">
      <div class="row mb-4">
          <div class="col-sm-12">
              <input wire:model="docName" type="text" class="form-control">
                                  </div>
      </div>
      <div class="row">
          <div class="col-12">
              <div wire:ignore>
                  <div class="legalDoc"></div>
              </div>
              
          </div>
      </div>
  </div>
  <div class="modal-footer">
      <button class="btn" wire:click="resetDocInfo()" data-bs-dismiss="modal">Cancel</button>
      <button type="button" onclick="saveChange()" class="btn btn-primary me-3">Save</button>
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

<!-- Livewire Component wire-end:eASecawnnEq3Z2Ecekfy -->

          
                          </div>
  </div>
</div>
</div>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->


                
    @include('dashboard.footer')