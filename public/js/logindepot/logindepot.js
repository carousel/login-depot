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
    var clone = $("body").find(".add-vehicles:first").clone(true,true);

    var type_1 = $(clone).find("select[name='type_1']");
    type_1.val($(original).find("select[name='type_1']").val());
    var condition_1 = $(clone).find("select[name='condition_1']");
    condition_1.val($(original).find("select[name='condition_1']").val());

    $(original).find("input[name='year_1']").val("");
    $(original).find("input[name='make_1']").val("");
    $(original).find("input[name='model_1']").val("");
    $(original).find("select[name='type_1']").val("Car");
    $(original).find("select[name='condition_1']").val("Yes");

    clone.find("i").remove();
    //$(".input-wrap").append($(clone).append("<i class='fa fa-minus-circle'></i>"));
    clone.insertAfter($(this).parent()).append("<i class='fa fa-minus-circle'></i>");

    var last = $(".input-wrap").children().last();
    var len = $(".input-wrap").children().length;


    switch(len){
        case 1:
            //$(last)[0].children[1].name = "year_" + 1;
            break;
        case 2:
            $(last)[0].children[1].name = "year_" + 2;
            break;
        case 3:
            $(last)[0].children[1].name = "year_" + 3;
            break;
        case 4:
            $(last)[0].children[1].name = "year_" + 4;
            break;
        case 5:
            $(last)[0].children[1].name = "year_" + 5;
            break;
        case 6:
            $(last)[0].children[1].name = "year_" + 6;
            break;
        case 7:
            $(last)[0].children[1].name = "year_" + 7;
            break;
        case 8:
            $(last)[0].children[1].name = "year_" + 8;
            break;    
        case 9:
            $(last)[0].children[1].name = "year_" + 9;
            break;    
        case 10:
            $(last)[0].children[1].name = "year_" + 10;
            break;    
    }


});

//remove cloned form
$("body").on("click","i.fa-minus-circle",function(e){ 


    //var last = $(".input-wrap").children().last();
    $(this).parent().remove();
    var len = $(".input-wrap").children().length;


    switch(len){
        case 1:
            //$(last)[0].children[1].name = "year_" + 1;
            break;
        case 2:
            $(last)[0].children[1].name = "year_" + 2;
            break;
        case 3:
            $(last)[0].children[1].name = "year_" + 3;
            break;
        case 4:
            $(last)[0].children[1].name = "year_" + 4;
            break;
        case 5:
            $(last)[0].children[1].name = "year_" + 5;
            break;
        case 6:
            $(last)[0].children[1].name = "year_" + 6;
            break;
        case 7:
            $(last)[0].children[1].name = "year_" + 7;
            break;
        case 8:
            $(last)[0].children[1].name = "year_" + 8;
            break;    
        case 9:
            $(last)[0].children[1].name = "year_" + 9;
            break;    
        case 10:
            $(last)[0].children[1].name = "year_" + 10;
            break;    
    }



});



$(".uship").on("click",function(){

    $(".price").val("");

    var pickup_zipcode = $(".pickup_zipcode").val();
    var delivery_zipcode = $(".delivery_zipcode").val();
    var vehicle_type = $(".select_vehicle_type").val();
    var vehicle_condition = $(".select_condition").val();
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
            var result = "$" + result;
            $(".price").val(result);
        }
    
    });
});

