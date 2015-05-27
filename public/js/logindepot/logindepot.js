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
        case "year_1":
            clone.children()[1].name = "year_2";
            clone.children()[1].value = "";
            clone.children()[3].name = "make_2";
            clone.children()[3].value = "";
            clone.children()[5].name = "model_2";
            clone.children()[5].value = "";
            clone.children()[7].name = "type_2";
            clone.children()[7].value = "";
            clone.children()[9].name = "condition_2";
            clone.children()[9].value = "";
            clone.children()[12].name = "quantity_2";
            clone.children()[12].value = "";
            break;
        case "year_2":
            clone.children()[1].name = "year_3";
            clone.children()[1].value = "";
            clone.children()[3].name = "make_3";
            clone.children()[3].value = "";
            clone.children()[5].name = "model_3";
            clone.children()[5].value = "";
            clone.children()[7].name = "type_3";
            clone.children()[7].value = "";
            clone.children()[9].name = "condition_3";
            clone.children()[9].value = "";
            clone.children()[12].name = "quantity_3";
            clone.children()[12].value = "";
            break;
        case "year_3":
            clone.children()[1].name = "year_4";
            clone.children()[1].value = "";
            clone.children()[3].name = "make_4";
            clone.children()[3].value = "";
            clone.children()[5].name = "model_4";
            clone.children()[5].value = "";
            clone.children()[7].name = "type_4";
            clone.children()[7].value = "";
            clone.children()[9].name = "Condition_4";
            clone.children()[9].value = "";
            clone.children()[12].name = "quantity_4";
            clone.children()[12].value = "";
            break;
        case "year_4":
            clone.children()[1].name = "year_5";
            clone.children()[1].value = "";
            clone.children()[3].name = "make_5";
            clone.children()[3].value = "";
            clone.children()[5].name = "model_5";
            clone.children()[5].value = "";
            clone.children()[7].name = "type_5";
            clone.children()[7].value = "";
            clone.children()[9].name = "condition_5";
            clone.children()[9].value = "";
            clone.children()[12].name = "quantity_5";
            clone.children()[12].value = "";
            break;
        case "year_5":
            clone.children()[1].name = "year_6";
            clone.children()[1].value = "";
            clone.children()[3].name = "make_6";
            clone.children()[3].value = "";
            clone.children()[5].name = "model_6";
            clone.children()[5].value = "";
            clone.children()[7].name = "type_6";
            clone.children()[7].value = "";
            clone.children()[9].name = "condition_6";
            clone.children()[9].value = "";
            clone.children()[12].name = "quantity_6";
            clone.children()[12].value = "";
            break;
        case "year_6":
            clone.children()[1].name = "year_7";
            clone.children()[1].value = "";
            clone.children()[3].name = "make_7";
            clone.children()[3].value = "";
            clone.children()[5].name = "model_7";
            clone.children()[5].value = "";
            clone.children()[7].name = "type_7";
            clone.children()[7].value = "";
            clone.children()[9].name = "condition_7";
            clone.children()[9].value = "";
            clone.children()[12].name = "quantity_7";
            clone.children()[12].value = "";
            break;
        case "year_7":
            clone.children()[1].name = "year_8";
            clone.children()[1].value = "";
            clone.children()[3].name = "make_8";
            clone.children()[3].value = "";
            clone.children()[5].name = "model_8";
            clone.children()[5].value = "";
            clone.children()[7].name = "type_8";
            clone.children()[7].value = "";
            clone.children()[9].name = "condition_8";
            clone.children()[9].value = "";
            clone.children()[12].name = "quantity_8";
            clone.children()[12].value = "";
            break;
        case "year_8":
            clone.children()[1].name = "year_9";
            clone.children()[1].value = "";
            clone.children()[3].name = "make_9";
            clone.children()[3].value = "";
            clone.children()[5].name = "model_9";
            clone.children()[5].value = "";
            clone.children()[7].name = "type_9";
            clone.children()[7].value = "";
            clone.children()[9].name = "condition_9";
            clone.children()[9].value = "";
            clone.children()[12].name = "quantity_9";
            clone.children()[12].value = "";
            break;
        case "year_9":
            clone.children()[1].name = "year_10";
            clone.children()[1].value = "";
            clone.children()[3].name = "make_10";
            clone.children()[3].value = "";
            clone.children()[5].name = "model_10";
            clone.children()[5].value = "";
            clone.children()[7].name = "type_10";
            clone.children()[7].value = "";
            clone.children()[9].name = "condition_10";
            clone.children()[9].value = "";
            clone.children()[12].name = "quantity_10";
            clone.children()[12].value = "";
            break;    
    }


    clone.insertAfter($(this).parent()).append("<i class='fa fa-minus-circle'></i>");
});

//remove cloned form
$("body").on("click","i.fa-minus-circle",function(e){ 
    $(this).parent().remove();
});


