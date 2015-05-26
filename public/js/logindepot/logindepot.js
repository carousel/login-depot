//confirm customer deletion
$(".delete-button").on("click",function(e){
    var confirmation = confirm("Are you sure you want to delete this customer?");
    if(confirmation == true){
        return true;
    }else{
        return false;
    }
});


//clone add vehicle form
$("i.fa-plus-circle").on("click",function(e){ 
    var i = 0;
    var clone = $("body").find(".add-vehicles:first").clone(true,true);

    clone.children()[1].name = "Year_" + Math.floor((Math.random() * 9999) + 1);
    clone.children()[1].value = "";
    clone.children()[3].name = "Make_" + Math.floor((Math.random() * 9999) + 1);
    clone.children()[3].value = "";
    clone.children()[5].name = "Model_" + Math.floor((Math.random() * 9999) + 1);
    clone.children()[5].value = "";
    clone.children()[7].name = "Type_" + Math.floor((Math.random() * 9999) + 1);
    clone.children()[7].value = "";
    clone.children()[9].name = "Condition_" + Math.floor((Math.random() * 9999) + 1);
    clone.children()[9].value = "";

    clone.insertAfter($(this).parent()).append("<i class='fa fa-minus-circle'></i>");
});

//remove cloned form
$("body").on("click","i.fa-minus-circle",function(e){ 
    $(this).parent().remove();
});


//send form content
//$("form.quote-form").on("submit",function(e){  
    //e.preventDefault();
    //var company = $("span.username").text();
    //var data = $(this).serializeArray();
     //$.ajaxSetup({
        //headers: {
           //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //}
         //});
    //$.ajax({
        //"url":"/companies/" + company + "/quotes/create-quote",
        //"method": "POST",
        //"data": data,
        //"dataType": "JSON",
        //"success": function(result){
            //console.log(result);
        //}
    //});


//});

