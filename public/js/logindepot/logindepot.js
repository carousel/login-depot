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

    $(clone).find("i").remove();
    //$(".input-wrap").append($(clone).append("<i class='fa fa-minus-circle'></i>"));
    //clone.insertAfter($(this).parent()).append("<i class='fa fa-minus-circle'></i>");
    var len = $(".input-wrap").children().length;
    $(clone).children()[1].name = "year_" + (len + 1);
    $(clone).children()[3].children[0].name = "make_" + (len + 1);
    $(clone).children()[5].name = "model_" + (len + 1);
    $(clone).children()[7].name = "type_" + (len + 1);
    $(clone).children()[9].name = "condition_" + (len + 1);
    $(clone).children()[12].name = "quantity_" + (len + 1);
    $(clone).insertAfter($(".input-wrap").children()[0]).append("<i class='fa fa-minus-circle'></i>");

    //var first = $(".input-wrap").children().first();
    //var len = $(".input-wrap").children().length;

        //var form = $("form");
        //var len = form.children().length + 1;
        //var clone = $(".year_1").clone(true,true).first();
        //clone.find("span.x").remove();
        //$(clone).append("<span class='minus'>-</span>");
        //$(clone).children()[0].name = "year_" + len;
        //$(clone).insertAfter($("form").children()[0]);

});

//remove cloned form
$("body").on("click","i.fa-minus-circle",function(e){ 


    $(this).parent().remove();
    var len = $(".input-wrap").children().length;
    console.log(len);
    $(".input-wrap").children()[0].children[1].name = "year_1";
    $(".input-wrap").children()[1].children[1].name = "year_" + len;
    $(".input-wrap").children()[2].children[1].name = "year_" + (len - 1);
    $(".input-wrap").children()[3].children[1].name = "year_" + (len - 2);
    $(".input-wrap").children()[4].children[1].name = "year_" + (len - 3);
    $(".input-wrap").children()[5].children[1].name = "year_" + (len - 4);
    $(".input-wrap").children()[6].children[1].name = "year_" + (len - 5);
    $(".input-wrap").children()[7].children[1].name = "year_" + (len - 6);
    $(".input-wrap").children()[8].children[1].name = "year_" + (len - 7);
    $(".input-wrap").children()[9].children[1].name = "year_" + (len - 9);
    $(".input-wrap").children()[10].children[1].name = "year_" + (len - 10);

});



$(".uship").on("click",function(){

    $(".price").val("");

    var pickup_zipcode = $(".pickup_zipcode").val();
    var delivery_zipcode = $(".delivery_zipcode").val();
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
            var result = "$" + result;
            $(".price").val(result);
        }
    
    });
});

