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
    $.get("/companies/" + company + "/quotes/make/",function(data){
        for(i in data){
            make_1[i] = data[i].make;
        }
    });
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

var make_2 = [];
$("body").on("keypress","input[name='make_2']",function(){
    $.get("/companies/" + company + "/quotes/make/",function(data){
        for(i in data){
            make_2[i] = data[i].make;
        }
    });
});


$("input[name='make_2']").typeahead(
{
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'make_2',
  source: substringMatcher(make_2)
});




var make_3 = [];
var company = $("span.username").text();
$("body").on("keypress","input[name='make_3']",function(){
    $.get("/companies/" + company + "/quotes/make/",function(data){
        for(i in data){
            make_3[i] = data[i].make;
        }
    });
});


$("input[name='make_3']").typeahead(
{
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'make_3',
  source: substringMatcher(make_3)
});
