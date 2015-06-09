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

function model_2(){
var model_2_matcher = function(vehicle_name) {
  return function findMatches(q, cb) {
    var make = $("input[name='make_2']").val();
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

    $("input[name='model_2']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_name',
    limit: 30,
    source: model_2_matcher(vehicle_name)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}

function model_3(){
var model_3_matcher = function(vehicle_name) {
  return function findMatches(q, cb) {
    var make = $("input[name='make_3']").val();
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

    $("input[name='model_3']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_name',
    limit: 30,
    source: model_3_matcher(vehicle_name)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}
function model_4(){
var model_4_matcher = function(vehicle_name) {
  return function findMatches(q, cb) {
    var make = $("input[name='make_4']").val();
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

    $("input[name='model_4']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_name',
    limit: 30,
    source: model_4_matcher(vehicle_name)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}
function model_5(){
var model_5_matcher = function(vehicle_name) {
  return function findMatches(q, cb) {
    var make = $("input[name='make_5']").val();
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

    $("input[name='model_5']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_name',
    limit: 30,
    source: model_5_matcher(vehicle_name)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}
function model_6(){
var model_6_matcher = function(vehicle_name) {
  return function findMatches(q, cb) {
    var make = $("input[name='make_6']").val();
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

    $("input[name='model_6']").typeahead(
    {
        hint: false
    },
    {
    name: 'vehicle_name',
    limit: 30,
    source: model_6_matcher(vehicle_name)
    }).on("typeahead:selected",function(event,selection){

        $(this).val(selection);

    });
}

$("body").find(".add-vehicles:first").find("i").on("click",function(){
    model_2();
    model_3();
    model_4();
    model_5();
    model_6();
});

