var events = {}, eventAnnotations;
var defaultEvent = "PersonX puts PersonX's trust in PersonY";
var beautifyRelations = {
  Xintent: "PersonX's intent",
  Xemotion: "PersonX's reaction",
  Otheremotion: "Other people's reaction"
};

jQuery.get( "https://homes.cs.washington.edu/~msap/debug/event2mind/docs/data/event_noAnnots.php", function( data ) {
  var arr;
  $.each(data.split("\n"),function(i,line){
    arr = line.split(",",2);
    events[arr[1]] = arr[0];
  });
  updateSelector();  
});


function updateSelector(){
  $.each(events,function(k,v){
    $("#eventSelector").append('<option class="'+v+'"value="'+k+'" data-toggle="'+k+'">'+k+'</option>');
  });
  loadEvent(defaultEvent);
  
  $("#eventSelector").prop("value",defaultEvent).selectpicker("refresh");
  //$("#eventSelecter").prop("value",defaultEventID).selectpicker("refresh");
}

function loadEvent(event) {
  $("#annotations").empty();
  $.get("https://homes.cs.washington.edu/~msap/debug/event2mind/docs/data/getEventAnnots.php?event="+event, function(data) {
    console.log(data);
    eventAnnotations = JSON.parse(data);
    $.each(eventAnnotations,function(k,d){
      $("#annotations").append("<p><strong>"+beautifyRelations[k]+"</strong>:&nbsp;"+d+"</p>");
    });
  });
}