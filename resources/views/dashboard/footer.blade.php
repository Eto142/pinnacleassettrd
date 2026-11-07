<script src="theme/plugins/src/global/vendors.min.js"></script>
<script src="theme/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="theme/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="theme/layouts/vertical-dark-menu/app.js"></script>

<script src="theme/assets/js/custom.js"></script>


<script src="theme/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>

<script src="theme/plugins/src/notification/snackbar/snackbar.min.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->

<script>
    </script>

<script src="/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = '6IrW6JxuXafWB7o1nM2xwczRIFbCCCQL8RxdTNCz';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>

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

        <script src = "theme/plugins/drag-and-drop/dragula/dragula.min.js"></script>
        <script>
            $(document).ready(function() {
                            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                window.livewire.on('config-showModal', Msg => {
                    $('#widgetModal').modal('show')
                });

                window.livewire.on('config-hideModal', Msg => {
                    $('#widgetModal').modal('hide')
                });
            });

            let updateOrder = [];
            dragula([$('#order1')[0],]).on('drop', function(e, target, source) {
                $(target).children().each(function(k,v) {
                    updateOrder[k] = $(v).attr('item_id');
                });
            });

            function saveConfigLoad(){
                Livewire.emit('saveConfig', updateOrder);
            }
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
    </body>
</html>
