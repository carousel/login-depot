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
    var name = $(this).parent().children()[1].name;
    if($(this).parent().next(".add-vehicles").length == 1){
        return;
    }

    switch(name){
        case "Year_1":
            clone.children()[1].name = "Year_2";
            clone.children()[1].value = "";
            clone.children()[3].name = "Make_2";
            clone.children()[3].value = "";
            clone.children()[5].name = "Model_2";
            clone.children()[5].value = "";
            clone.children()[7].name = "Type_2";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_2";
            clone.children()[9].value = "";
            clone.children()[12].name = "Quantity_2";
            clone.children()[12].value = "";
            break;
        case "Year_2":
            clone.children()[1].name = "Year_3";
            clone.children()[1].value = "";
            clone.children()[3].name = "Make_3";
            clone.children()[3].value = "";
            clone.children()[5].name = "Model_3";
            clone.children()[5].value = "";
            clone.children()[7].name = "Type_3";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_3";
            clone.children()[9].value = "";
            clone.children()[12].name = "Quantity_3";
            clone.children()[12].value = "";
            break;
        case "Year_3":
            clone.children()[1].name = "Year_4";
            clone.children()[1].value = "";
            clone.children()[3].name = "Make_4";
            clone.children()[3].value = "";
            clone.children()[5].name = "Model_4";
            clone.children()[5].value = "";
            clone.children()[7].name = "Type_4";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_4";
            clone.children()[9].value = "";
            clone.children()[12].name = "Quantity_4";
            clone.children()[12].value = "";
            break;
        case "Year_4":
            clone.children()[1].name = "Year_5";
            clone.children()[1].value = "";
            clone.children()[3].name = "Make_5";
            clone.children()[3].value = "";
            clone.children()[5].name = "Model_5";
            clone.children()[5].value = "";
            clone.children()[7].name = "Type_5";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_5";
            clone.children()[9].value = "";
            clone.children()[12].name = "Quantity_5";
            clone.children()[12].value = "";
            break;
        case "Year_5":
            clone.children()[1].name = "Year_6";
            clone.children()[1].value = "";
            clone.children()[3].name = "Make_6";
            clone.children()[3].value = "";
            clone.children()[5].name = "Model_6";
            clone.children()[5].value = "";
            clone.children()[7].name = "Type_6";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_6";
            clone.children()[9].value = "";
            clone.children()[12].name = "Quantity_6";
            clone.children()[12].value = "";
            break;
        case "Year_6":
            clone.children()[1].name = "Year_7";
            clone.children()[1].value = "";
            clone.children()[3].name = "Make_7";
            clone.children()[3].value = "";
            clone.children()[5].name = "Model_7";
            clone.children()[5].value = "";
            clone.children()[7].name = "Type_7";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_7";
            clone.children()[9].value = "";
            clone.children()[12].name = "Quantity_7";
            clone.children()[12].value = "";
            break;
        case "Year_7":
            clone.children()[1].name = "Year_8";
            clone.children()[1].value = "";
            clone.children()[3].name = "Make_8";
            clone.children()[3].value = "";
            clone.children()[5].name = "Model_8";
            clone.children()[5].value = "";
            clone.children()[7].name = "Type_8";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_8";
            clone.children()[9].value = "";
            clone.children()[12].name = "Quantity_8";
            clone.children()[12].value = "";
            break;
        case "Year_8":
            clone.children()[1].name = "Year_9";
            clone.children()[1].value = "";
            clone.children()[3].name = "Make_9";
            clone.children()[3].value = "";
            clone.children()[5].name = "Model_9";
            clone.children()[5].value = "";
            clone.children()[7].name = "Type_9";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_9";
            clone.children()[9].value = "";
            clone.children()[12].name = "Quantity_9";
            clone.children()[12].value = "";
            break;
        case "Year_9":
            clone.children()[1].name = "Year_10";
            clone.children()[1].value = "";
            clone.children()[3].name = "Make_10";
            clone.children()[3].value = "";
            clone.children()[5].name = "Model_10";
            clone.children()[5].value = "";
            clone.children()[7].name = "Type_10";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_10";
            clone.children()[9].value = "";
            clone.children()[12].name = "Quantity_10";
            clone.children()[12].value = "";
            break;    
    }


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

