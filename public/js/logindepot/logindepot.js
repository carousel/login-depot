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
    
    
    var original = $("body").find(".add-vehicles:first");;
    var year_1 = $(original).find("input[name='year_1']").val();
    var make_1 = $(original).find("input[name='make_1']").val();
    var model_1 = $(original).find("input[name='model_1']").val();

    if(year_1 == ""){
        alert("Please select vehicle year");
        return false;
    }
    if(make_1 == ""){
        alert("Please select vehicle make");
        return false;
    }
    if(model_1 == ""){
        alert("Please select vehicle make");
        return false;
    }
    var clone = $("body").find(".add-vehicles:first").clone(true,true);

    var type_1 = $(clone).find("select[name='type_1']");
    type_1.val($(original).find("select[name='type_1']").val());
    var condition_1 = $(clone).find("select[name='condition_1']");
    condition_1.val($(original).find("select[name='condition_1']").val());
    var quantity_1 = $(clone).find("select[name='quantity_1']");
    quantity_1.val($(original).find("select[name='quantity_1']").val());

    $(original).find("input[name='year_1']").val("");
    $(original).find("input[name='make_1']").val("");
    $(original).find("input[name='model_1']").val("");
    $(original).find("select[name='type_1']").val("Car");
    $(original).find("select[name='condition_1']").val("Yes");

    $(clone).find("i").remove();
    var len = $(".input-wrap").children().length;
    $(clone).children()[1].children[1].name = "year_" + (len + 1);
    $(clone).children()[3].children[1].name = "make_" + (len + 1);
    $(clone).children()[5].children[1].name = "model_" + (len + 1);
    $(clone).children()[7].name = "type_" + (len + 1);
    $(clone).children()[9].name = "condition_" + (len + 1);
    $(clone).children()[12].name = "quantity_" + (len + 1);
    $(clone).insertAfter($(".input-wrap").children()[0]).append("<i class='fa fa-minus-circle'></i>");

});

//remove cloned form
$("body").on("click","i.fa-minus-circle",function(e){ 


    $(this).parent().remove();
    var len = $(".input-wrap").children().length;


    $(".input-wrap").children()[0].children[1].name = "year_1";
    $(".input-wrap").children()[0].children[3].children[1].name = 'make_1';
    $(".input-wrap").children()[0].children[5].name = 'model_1';
    $(".input-wrap").children()[0].children[7].name = 'type_1';
    $(".input-wrap").children()[0].children[9].name = 'condition_1';
    $(".input-wrap").children()[0].children[11].name = 'quantity_1';

    $(".input-wrap").children()[1].children[1].name = "year_" + len;
    $(".input-wrap").children()[1].children[3].children[1].name = 'make_' + len;
    $(".input-wrap").children()[1].children[5].name = 'model_' + len;
    $(".input-wrap").children()[1].children[7].name = 'type_' + len;
    $(".input-wrap").children()[1].children[9].name = 'condition_' + len;
    $(".input-wrap").children()[1].children[11].name = 'quantity_' + len;

    $(".input-wrap").children()[2].children[1].name = "year_" + (len - 1);
    $(".input-wrap").children()[2].children[3].children[1].name = 'make_' + (len -1);
    $(".input-wrap").children()[2].children[5].name = 'model_' + (len - 1);
    $(".input-wrap").children()[2].children[7].name = 'type_' + (len - 1);
    $(".input-wrap").children()[2].children[9].name = 'condition_' + (len - 1);
    $(".input-wrap").children()[2].children[11].name = 'quantity_' + (len - 1);

    $(".input-wrap").children()[3].children[1].name = "year_" + (len - 2);
    $(".input-wrap").children()[3].children[3].children[1].name = 'make_' + (len -2);
    $(".input-wrap").children()[3].children[5].name = 'model_' + (len - 2);
    $(".input-wrap").children()[3].children[7].name = 'type_' + (len - 2);
    $(".input-wrap").children()[3].children[9].name = 'condition_' + (len - 2);
    $(".input-wrap").children()[3].children[11].name = 'quantity_' + (len - 2);

    $(".input-wrap").children()[4].children[1].name = "year_" + (len - 3);
    $(".input-wrap").children()[4].children[3].children[1].name = 'make_' + (len -3);
    $(".input-wrap").children()[4].children[5].name = 'model_' + (len - 3);
    $(".input-wrap").children()[4].children[7].name = 'type_' + (len - 3);
    $(".input-wrap").children()[4].children[9].name = 'condition_' + (len - 3);
    $(".input-wrap").children()[4].children[11].name = 'quantity_' + (len - 3);

    $(".input-wrap").children()[5].children[1].name = "year_" + (len - 4);
    $(".input-wrap").children()[5].children[3].children[1].name = 'make_' + (len -4);
    $(".input-wrap").children()[5].children[5].name = 'model_' + (len - 4);
    $(".input-wrap").children()[5].children[7].name = 'type_' + (len - 4);
    $(".input-wrap").children()[5].children[9].name = 'condition_' + (len - 4);
    $(".input-wrap").children()[5].children[11].name = 'quantity_' + (len - 4);

    $(".input-wrap").children()[6].children[1].name = "year_" + (len - 5);
    $(".input-wrap").children()[6].children[3].children[1].name = 'make_' + (len -5);
    $(".input-wrap").children()[6].children[5].name = 'model_' + (len - 5);
    $(".input-wrap").children()[6].children[7].name = 'type_' + (len - 5);
    $(".input-wrap").children()[6].children[9].name = 'condition_' + (len - 5);
    $(".input-wrap").children()[6].children[11].name = 'quantity_' + (len - 5);

    $(".input-wrap").children()[7].children[1].name = "year_" + (len - 6);
    $(".input-wrap").children()[7].children[3].children[1].name = 'make_' + (len -6);
    $(".input-wrap").children()[7].children[5].name = 'model_' + (len - 6);
    $(".input-wrap").children()[7].children[7].name = 'type_' + (len - 6);
    $(".input-wrap").children()[7].children[9].name = 'condition_' + (len - 6);
    $(".input-wrap").children()[7].children[11].name = 'quantity_' + (len - 6);

    $(".input-wrap").children()[8].children[1].name = "year_" + (len - 7);
    $(".input-wrap").children()[8].children[3].children[1].name = 'make_' + (len -7);
    $(".input-wrap").children()[8].children[5].name = 'model_' + (len - 7);
    $(".input-wrap").children()[8].children[7].name = 'type_' + (len - 7);
    $(".input-wrap").children()[8].children[9].name = 'condition_' + (len - 7);
    $(".input-wrap").children()[8].children[11].name = 'quantity_' + (len - 7);

    $(".input-wrap").children()[9].children[1].name = "year_" + (len - 8);
    $(".input-wrap").children()[9].children[3].children[1].name = 'make_' + (len -8);
    $(".input-wrap").children()[9].children[5].name = 'model_' + (len - 8);
    $(".input-wrap").children()[9].children[7].name = 'type_' + (len - 8);
    $(".input-wrap").children()[9].children[9].name = 'condition_' + (len - 8);
    $(".input-wrap").children()[9].children[11].name = 'quantity_' + (len - 8);

    $(".input-wrap").children()[10].children[1].name = "year_" + (len - 9);
    $(".input-wrap").children()[10].children[3].children[1].name = 'make_' + (len -9);
    $(".input-wrap").children()[10].children[5].name = 'model_' + (len - 9);
    $(".input-wrap").children()[10].children[7].name = 'type_' + (len - 9);
    $(".input-wrap").children()[10].children[9].name = 'condition_' + (len - 9);
    $(".input-wrap").children()[10].children[11].name = 'quantity_' + (len - 9);

});



$(".uship").on("click",function(){

    $(".price").val("");

    var pickup_zipcode = $(".pickup-zipcode").val();
    var delivery_zipcode = $(".delivery-zipcode").val();
    var vehicle_type = $(".vehicle_type").val();
    var vehicle_condition = $(".condition").val();
    var carrier_type = $(".select_carrier_type").val();

    var username = $("span.username").text();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        "url": "/companies/" + username + "/quotes/uship",
        "method": "POST",
        "data" : {
            "pickupZipcode": pickup_zipcode,
            "deliveryZipcode": delivery_zipcode,
            "vehicleType": vehicle_type,
            "vehicleCondition": vehicle_condition,
            "carrierType": carrier_type,
        },
        "success": function(result){
            $(".price").val(result);
        }
    
    });
});

$(".timestamp").click(function(){
    var timestamp = "Update: " + new Date($.now());
    $(".customer-notes-textarea").val(timestamp);
});
$("body").on("mouseover",".tt-selectable",function(e){
    $(this).css("color","#000");
    $(this).css("background","#fff");
});
$("body").on("mouseout",".tt-selectable",function(e){
    $(this).css("color","#fff");
    $(this).css("background","#000");
});

