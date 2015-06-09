var vehicle_make = [];
//var vehicle_name = [];
var company = $("span.username").text();

$.get("/companies/" + company + "/quotes/vehicle-make",function(data){
    for(i in data){
        vehicle_make[i] = data[i]["make"];
    }
});

var substringMatcher = function(vehicle_make) {
  return function findMatches(q, cb) {
    var matches, substringRegex,prematch;

    matches = [];

    substrRegex = new RegExp(q, 'i');

        $.each(vehicle_make, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });

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

function make_2(){
var make_2_matcher = function(vehicle_make) {
  return function findMatches(q, cb) {
    var matches, substringRegex,prematch;

    matches = [];

    substrRegex = new RegExp(q, 'i');

        $.each(vehicle_make, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });

    cb(matches);
  };
};

    $("input[name='make_2']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_make',
    limit: 30,
    source: make_2_matcher(vehicle_make)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}

function make_3(){
var make_3_matcher = function(vehicle_make) {
  return function findMatches(q, cb) {
    var matches, substringRegex,prematch;

    matches = [];

    substrRegex = new RegExp(q, 'i');

        $.each(vehicle_make, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });

    cb(matches);
  };
};

    $("input[name='make_3']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_make',
    limit: 30,
    source: make_3_matcher(vehicle_make)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}
function make_4(){
var make_4_matcher = function(vehicle_make) {
  return function findMatches(q, cb) {
    var matches, substringRegex,prematch;

    matches = [];

    substrRegex = new RegExp(q, 'i');

        $.each(vehicle_make, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });

    cb(matches);
  };
};

    $("input[name='make_4']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_make',
    limit: 30,
    source: make_4_matcher(vehicle_make)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}
function make_5(){
var make_5_matcher = function(vehicle_make) {
  return function findMatches(q, cb) {
    var matches, substringRegex,prematch;

    matches = [];

    substrRegex = new RegExp(q, 'i');

        $.each(vehicle_make, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });

    cb(matches);
  };
};

    $("input[name='make_5']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_make',
    limit: 30,
    source: make_5_matcher(vehicle_make)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}
function make_6(){
var make_6_matcher = function(vehicle_make) {
  return function findMatches(q, cb) {
    var matches, substringRegex,prematch;

    matches = [];

    substrRegex = new RegExp(q, 'i');

        $.each(vehicle_make, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });

    cb(matches);
  };
};

    $("input[name='make_6']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_make',
    limit: 30,
    source: make_6_matcher(vehicle_make)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}

$("body").find(".add-vehicles:first").find("i").on("click",function(){
    make_2();
    make_3();
    make_4();
    make_5();
    make_6();
});


