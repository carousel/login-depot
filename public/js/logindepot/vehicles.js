var vehicles = [];
var company = $("span.username").text();

//$.get("/companies/" + company + "/quotes/vehicles",function(data){
    //console.log(data);
    //for(i in data){
        //vehicles[i] = data[i]["year"] + ", " + data[i]["make"] + ", " + data[i]["name"];
    //}
//});

//$.ajaxSetup({
    //headers: {
        //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //},
//});

//var substringMatcher = function(pickup) {
  //return function findMatches(q, cb) {
    //var state = $("select.pickup-state").val();
    //var matches, substringRegex,prematch;

    //an array that will be populated with substring matches
    //matches = [];
    //prematch = [];

    //regex used to determine if a string contains the substring `q`
    //substrRegex = new RegExp(q, 'i');
    //stateRegex = new RegExp(state);

    //if(state.length == 0){
        //$.each(pickup, function(i, str) {
            //if (substrRegex.test(str)) {
                //matches.push(str);
            //}
        //});
    //}else if(state.length > 0){
        //$.each(pickup, function(i, str) {
            //if (substrRegex.test(str)) {
                //prematch.push(str);
            //}
        //});
        //$.each(prematch, function(key, val) {
            //if (stateRegex.test(val)) {
                //matches.push(val);
            //}
        //});
        
        
    //}
    //iterate through the pool of strings and for any string that
    //contains the substring `q`, add it to the `matches` array

    //cb(matches);
  //};
//};

//$("input[name='pickup_city']").typeahead(null,
//{
  //name: 'pickup',
  //limit: 30,
  //source: substringMatcher(pickup)
//}).on("typeahead:selected",function(event,selection){


    //var result = selection.split(",");
    //$("input[name='pickup_city']").typeahead('val',result[0]);
    //$("select[name='pickup_state']").find($("option[value="  + result[1] + "]")).attr("selected",result[1]);
    //$("input[name='pickup_zipcode']").val(result[2]);


        //$.ajax({
            //"url": "/companies/" + company + "/quotes/post-pickup",
            //"type": "POST",
            //"data": {"data":result}
        //});

//});

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
