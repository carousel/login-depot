var delivery = [];

var company = $("span.username").text();
$.get("/companies/" + company + "/quotes/prefetch-zipcode",function(data){
    for(i in data){
        delivery[i] = data[i]["primary_city"] + ", " + data[i]["state"] + ", " + data[i]["zip"];
    }
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
});

var substringMatcher = function(zip) {
  return function findMatches(q, cb) {
    var state = $("select.delivery-state").val();
    var matches, substringRegex,prematch;

    // an array that will be populated with substring matches
    matches = [];
    prematch = [];
    submatch = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
    stateRegex = new RegExp(state);

    if(state.length == 0){
        $.each(delivery, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
            //matches[0] = prematch[0];
        });
    }else if(state.length > 0){
        $.each(delivery, function(i, str) {
            if (substrRegex.test(str)) {
                prematch.push(str);
            }
        });
        $.each(prematch, function(key, val) {
            if (stateRegex.test(val)) {
                matches.push(val);
            }
            //matches[0] = submatch[0];
        });
        
        
    }
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array

    cb(matches);
  };
};

$("input[name='delivery_city']").typeahead(
{
    hint: false
},
{
  name: 'delivery',
  limit: 30,
  source: substringMatcher(delivery)
}).on("typeahead:selected",function(event,selection){


    var result = selection.split(",");
    $("input[name='delivery_city']").typeahead('val',result[0]);
    $("select[name='delivery_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    $("input[name='delivery_zipcode']").val(result[2]);


        //$.ajax({
            //"url": "/companies/" + company + "/quotes/post-delivery",
            //"type": "POST",
            //"data": {"data":result}
        //});

});

$("input[name='delivery_zipcode']").typeahead(
{
    hint: false
},
{
  name: 'delivery',
  limit: 30,
  source: substringMatcher(delivery)
}).on("typeahead:selected",function(event,selection){


    var result = selection.split(",");
    $("input[name='delivery_city']").val(result[0]);
    $("select[name='delivery_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    $("input[name='delivery_zipcode']").typeahead('val',result[2]);


        //$.ajax({
            //"url": "/companies/" + company + "/quotes/post-delivery",
            //"type": "POST",
            //"data": {"data":result}
        //});

});

$("input[name='delivery_city']").typeahead(
{
    hint: false        
},
{
  name: 'delivery',
  limit: 30,
  source: substringMatcher(delivery)
}).on("typeahead:selected",function(event,selection){


    var result = selection.split(",");
    $("input[name='delivery_city']").typeahead('val',result[0]);
    $("select[name='delivery_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    $("input[name='delivery_zipcode']").val(result[2]);


        //$.ajax({
            //"url": "/companies/" + company + "/quotes/post-delivery",
            //"type": "POST",
            //"data": {"data":result}
        //});

});
