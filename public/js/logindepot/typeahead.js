var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var make_1 = [];
var company = $("span.username").text();
$("input[name='make_1']").on("keypress",function(){
    var make = $(this).val();
    if(make.length > 0){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            "url": "/companies/" + company + "/quotes/make",
            "type": "POST",
            "data": {"make":make},
            "success": function(data){
                console.log(data);
                //for(i in data){
                    //model_1[i] = data[i].name;
                //}
            }   
        });
    }

});


$("input[name='make_1']").typeahead(
{
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'make_1',
  source: substringMatcher(make_1)
});

var model_1 = [];
$("input[name='model_1']").on("keydown",function(){
    var make = $("input[name='make_1']").val();
    if(make != ""){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            "url": "/companies/" + company + "/quotes/model",
            "type": "POST",
            "data": {"make":make},
            "success": function(data){
                for(i in data){
                    model_1[i] = data[i].name;
                }
            }   
        });
    }else{
        alert("Please enter make name");
    }
    
});


$("input[name='model_1']").typeahead(
{
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'model_1',
  source: substringMatcher(model_1)
});

var pickup_city = [];

$("input[name='pickup_city']").on("keydown",function(e){
var pickupCity = $("input[name='pickup_city']").val();
var pickupState = $("select[name='pickup_state']").val();
    if(pickupCity.length > 0){
        if(pickupState !== ""){
            var data = {pickupCity,pickupState};
        }else{
            var data = pickupCity;
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache: false
        });
        $.ajax({
            "url": "/companies/" + company + "/quotes/pickup-city",
            "type": "POST",
            "data": {"data":data},
            "cache": false,
            "success": function(data){
                for(i in data){
                    pickup_city[i] = data[i]["primary_city"] + ", " + data[i]["state"] + ", " + data[i]["zip"];
                    //pickup_city[i] = data[i]["primary_city"] + ", " + data[i]["state"];
                    //console.log(data[i]);
                }
            }   
        });
    }

});
$("body").on("click",".tt-suggestion",function(e){
    var text = $(this).text();
    var result = text.split(",");
    $("input[name='pickup_city']").val(result[0]);
    var a = $("select[name='pickup_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    $("input[name='pickup_zipcode']").val(result[2]);
});

$("body").on("click",".refresh",function(e){
    window.location.reload(true);
});


$("input[name='pickup_city']").typeahead(null,
//{
  //hint: true,
  //highlight: true,
  //minLength: 1
//},
{
  name: 'pickup_city',
  limit: 30,
  source: substringMatcher(pickup_city)
});

//$("input[name='pickup_city']").on("keydown",function(e){
    //if(e.keyCode == 9){
    //$("select[name='pickup_zipcode']").empty();
    //$("select[name='pickup_state']").empty();
        //var pickup_city = $("input[name='pickup_city']").val();
        //$.ajaxSetup({
            //headers: {
                //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //}
        //});

            //$.ajax({
                //"url": "/companies/" + company + "/quotes/pickup-zip-state",
                //"type": "POST",
                //"data": {"pickup_city":pickup_city},
                //"success": function(data){
                        //for(i in data[0]){
                            //$("select[name='pickup_zipcode']").append("<option>" + data[0][i].zip + "</option>");
                        //}
                        //for(i in data[1]){
                            //$("select[name='pickup_state']").append("<option>" + data[1][i].state + "</option>");
                        //}
                    //}
                //})
            //}
    
        //});

//var delivery_city = [];
//$("input[name='delivery_city']").on("keydown",function(e){
    //if(e.keyCode == 9){
        //$.get("/companies/" + company + "/quotes/pickup-city",function(data){
            //for(i in data){
                //delivery_city[i] = data[i].primary_city;
            //}
        //});
    //}
//});


$("input[name='delivery_city']").typeahead(
{
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'delivery_city',
  source: substringMatcher(delivery_city)
});

$("input[name='delivery_city']").on("keydown",function(e){
    if(e.keyCode == 9){
    $("select[name='delivery_zipcode']").empty();
    $("select[name='delivery_state']").empty();
        var delivery_city = $("input[name='delivery_city']").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            $.ajax({
                "url": "/companies/" + company + "/quotes/delivery-zip-state",
                "type": "POST",
                "data": {"delivery_city":delivery_city},
                "success": function(data){
                        for(i in data[0]){
                            $("select[name='delivery_zipcode']").append("<option>" + data[0][i].zip + "</option>");
                        }
                        for(i in data[1]){
                            $("select[name='delivery_state']").append("<option>" + data[1][i].state + "</option>");
                        }
                    }
                })
            }
    
        });

var year_1 = _.range(1995,2015);
$("input[name='year_1']").typeahead(
{
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'year_1',
  source: substringMatcher(year_1)
});
