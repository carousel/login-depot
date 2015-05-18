//confirm customer deletion
$(".delete-button").on("click",function(e){
    var confirmation = confirm("Are you sure you want to delete this customer?");
    if(confirmation == true){
        return true;
    }else{
        return false;
    }
});

$(".share-event-button").on("click",function(e){
    var worker = $("select.subscriber").val();
    $("input[name='worker']").val(worker);
    if(!worker){
        e.preventDefault();
        alert("Please create  a worker to share event");
    }else{
        return true;
    }
});
