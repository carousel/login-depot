//$(".ui-draggable").on("drag",function(e,ui){
    //alert(ui.position);
//});
$(".ui-draggable").on("dblclick",function(e,ui){
    //alert($(this));
    var that = this;
    var eventName = prompt("Enter event name");
    if(eventName == null){
        return;
    };
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        "url": "/calendars/store/",
        "method": "POST",
        "data": {data: eventName},
        "success": function(data){
            $(that).html(data);
        }
    
    });
});
$(".ui-draggable").on("mouseover",function(e,ui){
    $(this).attr("title","Double click to add event");
});

