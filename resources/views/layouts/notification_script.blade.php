<script>
    $("#notification-bell-toggle").click(function () {
        $("#notification-panel").toggle();
    });

function onPageLoadCallNotification(){
 axios.get('{{route('user.myNotification.get.data')}}')
            .then((response) => {
                let notification_count = response.data.notification_count;
                let notification_data = response.data.notification;
                // let noNotification = response.data.notification;
                show_notification_html(notification_count,notification_data)
            }).catch((e) =>{
                //    toastr.error("opps..!! server error something went wrong refresh page try again..");
            });
}

window.titleReadSelectedNotitfication = (selectedValue) => {

    
    const data = {
        id : selectedValue
    }
          axios.post("{{route('user.myNotification.title_unread')}}",data)
          .then((response) => {
              let notification_count = response.data.notification_count
              if(notification_count > 0 ){
                  $('.bell-count').text(notification_count);
                    $("#notification-bell-toggle").addClass('bell-animation');
                }
                if(notification_count == 0){
                     $('.bell-count').text("");
                    $("#notification-bell-toggle").removeClass('bell-animation');
                }
              
              if(response.data.status == true ){
                // toastr.success('Notification Mark As Read...');
              }
          })
          .catch((e) => {
                // toastr.error("opps..!! server error something went wrong refresh page try again..");
          });
}

window.readSelectedNotitfication = (selectedValue) => {

    const data = {
        id : selectedValue
    }
          axios.post("{{route('user.myNotification.set.read')}}",data)
          .then((response) => {
              if(response.data.status == true ){
                // toastr.success('Notification Mark As Read...');
                onPageLoadCallNotification();
              }
              if(response.data.status == false ){
                // toastr.success(response.data.message);
                onPageLoadCallNotification();
              }
          })
          .catch((e) => {
                // toastr.error("opps..!! server error something went wrong refresh page try again..");

          })
}

$(document).ready(function () {
   onPageLoadCallNotification();
});

function markAllRead(){
          axios.post("{{route('user.myNotification.set.read_all')}}",)
          .then((response) => {
              onPageLoadCallNotification();
          })
          .catch((e) => {
            //   toastr.error("opps..!! server error something went wrong refresh page try again..");
          });
}

function show_notification_html(notification_count,notification_data) {
                
                $("#notification-panel-show").empty('');

                if(notification_count > 0 ){
                    $('.bell-count').text(notification_count);
                    $("#notification-bell-toggle").addClass('bell-animation');
                }
                if(notification_count == 0){
                    $('.bell-count').text("");
                    $("#notification-bell-toggle").removeClass('bell-animation');
                }
                if(notification_data == "No Notification"){
                    $('.bell-count').text("");
                    $('#notification-panel-show').append(
                        `<p class="text-center" >{{ucwords(" Don't have any notifications as of now. Stay tuned with Myglit.")}}</p>`
                    );
                    return true;
                }
                  $.each(notification_data, function (indexInArray, valueOfElement) {
                     $('#notification-panel-show').append(
                    `
                    <div id="accordionExample" class="accordion">
                        <div class="px-3 py-2">
                            <div class="col-12 px-0">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-10">
                                        <a class="nav-link py-0 px-0">

                                            <span>
                                                ${valueOfElement.time}
                                            </span>
                                            <span style="display:${valueOfElement.display_class} "  class="badge badge-danger badge-pill ml-1">NEW</span></a>
                                    </div>
                                    <div onclick ="readSelectedNotitfication('${valueOfElement.id}')" class="col-2 text-right">
                                        <i class="mdi mdi-close-circle-outline text-danger cursor-pointer mdi-16px"></i>
                                    </div>
                                </div>
                            </div>
                            <a class="nav-link cursor-pointer py-0 px-0"><span data-toggle="collapse" onclick="titleReadSelectedNotitfication('${valueOfElement.id}')" data-target="#collapse1${indexInArray}" class="font-weight-bold">
                                    ${valueOfElement.title_trimed}
                                </span></a>
                            <div id="collapse1${indexInArray}" data-parent="#accordionExample" class="nav-link py-0 px-0 collapse">
                                <span  class="cursor-pointer" >${valueOfElement.title}</span> 
                                <br>
                                <span class="cursor-pointer">${valueOfElement.description}</span>

                            </div>
                        </div>
                        <hr class="my-0">
                    </div>
                    `
                    );
                });
}
</script>
