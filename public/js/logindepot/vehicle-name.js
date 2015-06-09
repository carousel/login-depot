var vehicle_name = [];
var company = $("span.username").text();

$.get("/companies/" + company + "/quotes/vehicle-name",function(data){
    for(i in data){
        vehicle_name[i] = data[i]["make"] + ", " + data[i]["name"];
    }
});


var substringMatcher = function(vehicle_name) {
  return function findMatches(q, cb) {
    var make = $("input[name='make_1']").val();
    var matches, substringRegex,prematch;

    //an array that will be populated with substring matches
    prematch = [];
    matches = [];
    postmatch = [];

    //regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
    makeRegex = new RegExp(make);

        $.each(vehicle_name, function(i, str) {
            if (substrRegex.test(str)) {
                prematch.push(str);
            }
        });
        $.each(prematch, function(key, val) {
            if (makeRegex.test(val)) {
                postmatch.push(val);
            }
        });
        for(i in postmatch){
            var real = postmatch[i].split(",");
            matches.push(real[1]);
        }
    //iterate through the pool of strings and for any string that
    //contains the substring `q`, add it to the `matches` array

    cb(matches);
  };
};

$("input[name='model_1']").typeahead(
{
    hint: false       
},
{
  name: 'vehicle_name',
  limit: 30,
  source: substringMatcher(vehicle_name)
}).on("typeahead:selected",function(event,selection){
    $(this).val(selection);
});

//$("input[name='pickup_zipcode']").typeahead(null,
//{
  //name: 'pickup',
  //limit: 30,
  //source: substringMatcher(pickup)
//}).on("typeahead:selected",function(event,selection){


    //var result = selection.split(",");
    //$("input[name='pickup_city']").val(result[0]);
    //$("select[name='pickup_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    //$("input[name='pickup_zipcode']").typeahead('val',result[2]);


        //$.ajax({
            //"url": "/companies/" + company + "/quotes/post-pickup",
            //"type": "POST",
            //"data": {"data":result}
        //});

//});

