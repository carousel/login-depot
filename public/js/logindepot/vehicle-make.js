var vehicle_make = [];
//var vehicle_name = [];
var company = $("span.username").text();

$.get("/companies/" + company + "/quotes/vehicle-make",function(data){
    for(i in data){
        vehicle_make[i] = data[i]["make"];
    }
});
//$.get("/companies/" + company + "/quotes/vehicle-name",function(data){
    //for(i in data){
        //vehicle_name[i] = data[i]["name"];
    //}
//});

//$.ajaxSetup({
    //headers: {
        //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //},
//});

var substringMatcher = function(vehicle_make) {
  return function findMatches(q, cb) {
    var matches, substringRegex,prematch;

    //an array that will be populated with substring matches
    matches = [];

    //regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

        $.each(vehicle_make, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });
    //iterate through the pool of strings and for any string that
    //contains the substring `q`, add it to the `matches` array

    cb(matches);
  };
};

$("input[name='make_1']").typeahead(
{
    hint: false
},
{
  name: 'vehicle_make',
  limit: 30,
  source: substringMatcher(vehicle_make)
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

