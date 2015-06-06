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



$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
});


var zip = [];

$.get("/companies/" + company + "/quotes/prefetch-zipcode",function(data){
        for(i in data){
            zip[i] = data[i]["primary_city"] + ", " + data[i]["state"] + ", " + data[i]["zip"];
        }
});



$("input[name='pickup_city']").typeahead(null,
{
  name: 'zip',
  limit: 30,
  source: substringMatcher(zip)
}).on("typeahead:selected",function(event,selection){


    var result = selection.split(",");
    $("input[name='pickup_city']").typeahead('val',result[0]);
    $("select[name='pickup_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    $("input[name='pickup_zipcode']").val(result[2]);


        $.ajax({
            "url": "/companies/" + company + "/quotes/post-pickup",
            "type": "POST",
            "data": {"data":result}
        });

});


$("input[name='pickup_zipcode']").typeahead(null,
{
  name: 'zip',
  limit: 30,
  source: substringMatcher(zip)
}).on("typeahead:selected",function(event,selection){


    var result = selection.split(",");
    $("input[name='pickup_city']").val(result[0]);
    $("select[name='pickup_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    $("input[name='pickup_zipcode']").typeahead('val',result[2]);


        $.ajax({
            "url": "/companies/" + company + "/quotes/post-pickup",
            "type": "POST",
            "data": {"data":result}
        });

});

$("input[name='delivery_zipcode']").typeahead(null,
{
  name: 'zip',
  limit: 30,
  source: substringMatcher(zip)
}).on("typeahead:selected",function(event,selection){


    var result = selection.split(",");
    $("input[name='delivery_city']").val(result[0]);
    $("select[name='delivery_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    $("input[name='delivery_zipcode']").typeahead('val',result[2]);


        $.ajax({
            "url": "/companies/" + company + "/quotes/post-pickup",
            "type": "POST",
            "data": {"data":result}
        });

});
$("input[name='delivery_city']").typeahead(null,
{
  name: 'zip',
  limit: 30,
  source: substringMatcher(zip)
}).on("typeahead:selected",function(event,selection){


    var result = selection.split(",");
    $("input[name='delivery_city']").val(result[0]);
    $("select[name='delivery_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    $("input[name='delivery_zipcode']").typeahead('val',result[2]);


        $.ajax({
            "url": "/companies/" + company + "/quotes/post-pickup",
            "type": "POST",
            "data": {"data":result}
        });

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
