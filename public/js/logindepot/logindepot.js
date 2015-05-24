//confirm customer deletion
$(".delete-button").on("click",function(e){
    var confirmation = confirm("Are you sure you want to delete this customer?");
    if(confirmation == true){
        return true;
    }else{
        return false;
    }
});
$("i.fa-plus-circle").on("click",function(e){ 
    var i = 0;
    var clone = $("body").find(".add-vehicles:first").clone(true,true);

   //console.log(original.children()) ;
   //
    clone.children()[1].name = "year" + Math.floor((Math.random() * 999) + 1);
    clone.children()[3].name = "make" + Math.floor((Math.random() * 999) + 1);
    clone.children()[5].name = "model" + Math.floor((Math.random() * 999) + 1);
    clone.children()[7].name = "vehicle_type" + Math.floor((Math.random() * 999) + 1);

    clone.insertAfter($(this).parent()).append("<i class='fa fa-minus-circle'></i>");
});

$("body").on("click","i.fa-minus-circle",function(e){ 
    $(this).parent().remove();
});


$("form.quote-form").on("submit",function(e){  
    e.preventDefault();
    var company = $("span.username").text();
    var data = $(this).serializeArray();
     $.ajaxSetup({
        headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
    $.ajax({
        "url":"/companies/" + company + "/quotes/create-quote",
        "method": "POST",
        "data": data,
        "dataType": "JSON",
        "success": function(result){
            console.log(result);
        }
    });


});

