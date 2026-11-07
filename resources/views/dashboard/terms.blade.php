@include('dashboard.header')

<div id="content" class="main-content">
  <div class="layout-px-spacing">
    <div class="middle-content p-0">

      <!-- Livewire Legal Component Wrapper -->
      <div wire:id="eASecawnnEq3Z2Ecekfy" 
           wire:initial-data='{
              "fingerprint": {
                "id": "eASecawnnEq3Z2Ecekfy",
                "name": "common.legal-component",
                "locale": "en",
                "path": "legal",
                "method": "GET",
                "v": "acj"
              },
              "effects": {"listeners":[]},
              "serverMemo": {
                "children": [],
                "errors": [],
                "htmlHash": "ecb6de1b",
                "data": {
                  "docName": null,
                  "docDescription": null,
                  "legal": [],
                  "tab": 1
                },
                "dataMeta": {
                  "modelCollections": {
                    "legal": {
                      "class": "App\\Models\\LegalDoc",
                      "id": [1,3],
                      "relations": [],
                      "connection": "mysql",
                      "collectionClass": null
                    }
                  }
                }
              },
              "checksum": "fe9e5c11bc41e738c15d00ef5afa35a95d6e63245aef88ae70ee2dbbedaf8e1c"
            }'>

        <!-- Legal Content Section -->
        <div class="row layout-top-spacing flex-wrap">
          <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-7 col-12 layout-spacing">
            <div class="tab-content" id="animateLineContent-4">
              <div wire:ignore.self class="tab-pane fade show active" id="permtab1" role="tabpanel" aria-labelledby="permtab1-tab">

                <!-- Terms Widget -->
                <div class="statbox widget box box-shadow">
                  <div class="widget-header d-flex justify-content-between flex-wrap">
                    <h6 class="m-0 p-3 text-center">Terms</h6>
                    <div class="toolbar align-self-center"></div>
                  </div>

                  <div class="widget-content widget-content-area py-3">
                    <div class="card-body p-0">
                      <div class="ql-container" style="white-space: inherit;">
                        <div class="ql-editor" style="white-space: inherit;">
                          <p class="ql-align-justify">
                            <strong>Management Fee for Bot Users</strong><br>
                            All users who engage with our automated trading systems ("bot users") are required to pay a management fee equivalent to <strong>5%</strong> of their total withdrawal amount. This fee must be settled prior to the processing and completion of any withdrawal request.<br><br>
                            The management fee covers system maintenance, algorithm updates, and continuous performance monitoring of the trading bots.<br><br>
                            Failure to remit the required fee may result in delays or denial of withdrawal requests until the obligation is fulfilled. By using our automated trading services, users acknowledge and agree to this fee structure as part of the platform's operational terms.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- End Widget -->

              </div>
            </div>
          </div>
        </div>

        <!-- Document Info Modal -->
        <div wire:ignore.self class="modal animated fadeInRight" id="docInfo" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

              <div class="modal-body">
                <div class="row mb-4">
                  <div class="col-sm-12">
                    <input wire:model="docName" type="text" class="form-control" placeholder="Document Title">
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
                <button class="btn btn-secondary" wire:click="resetDocInfo()" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary me-3" onclick="saveChange()">Save</button>
              </div>

            </div>
          </div>
        </div>

        <!-- Global Loader -->
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

      </div> <!-- Livewire Component End -->

    </div>
  </div>
</div>



                
    @include('dashboard.footer')