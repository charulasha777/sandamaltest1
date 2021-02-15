<!DOCTYPE html>
<html lang="en">
<head>
  <title>Work Together</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  


<div class="container-fluid p-3  bg-dark text-white">
  <h1 class="text-center">Work Together</h1>
  <p class="text-center">By Charulasha Gunawardana.</p>
</div>



<div class="container">
  <h2>Work together main menu</h2>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link " href="#" data-toggle="modal" data-target="#myModal">Add Project</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a></div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</div>

<p id="demo"></p>

<div class="toast" data-autohide="false">
    <div class="toast-header">
      <strong class="mr-auto text-primary">Project Name</strong>
      <small class="text-muted">5 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <!-- <div class="toast-body">
      Some text inside the toast body
    </div> -->
  </div>
</div>


<div class="jumbotron ">
  <h1 class="text-center">My First Bootstrap Page 2</h1>
  <p class="text-center">This part is inside a .container class.</p> 
  <p class="text-center">The .container class provides a responsive fixed width container.</p>
  <p class="text-center">Resize the browser window to see that its width (max-width) will change at different breakpoints.</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
</div>

</body>
</html>


<?php
echo "My first PHP script!";
?>

<script>
  $(document).ready(function(){
    console.log("works");

    $(document).on('click','.addproject',function(){

      $('[data-toggle="popover"]').popover(); 

      $('.toast').toast('show');

      

    });

    $.getJSON( "projectjson.json", function( data ) {
  var items = [];
  $.each( data, function( key, val ) {
    items.push( "<li id='" + key + "'>" + val + "</li>" );
  });
 
  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( "body" );
});

var obj = {
    name: 'Dhayalan',
    score: 100
};

localStorage.setItem('gameStorage', JSON.stringify(obj));
var obj = JSON.parse(localStorage.getItem('gameStorage'));
console.log(obj);


function download(filename, text) {
  var element = document.createElement('a');
  element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
  element.setAttribute('download', filename);


  element.style.display = 'none';
  document.body.appendChild(element);

  element.click();

  document.body.removeChild(element);
}

$("#lesen").click(function() {
        $.ajax({
            url : "projectjson.json",
            dataType: "text",
            success : function (data) {
                $(".text").html(data);
            }
        });
    });

});

// Start file download.
/* var myJSON = JSON.stringify(obj); 
download("gameStorage.json",myJSON);

var text = myJSON
    blob = new Blob([text], { type: 'text/plain' }),
    anchor = document.createElement('a');

anchor.save = "hello.json";
anchor.href = (window.webkitURL || window.URL).createObjectURL(blob);
anchor.dataset.downloadurl = ['text/plain', anchor.download, anchor.href].join(':');
anchor.click(); */




    // json 

/*     var text = '{"employees":[' +
'{"firstName":"John","lastName":"Doe" },' +
'{"firstName":"Anna","lastName":"Smith" },' +
'{"firstName":"Peter","lastName":"Jones" }]}';

obj = JSON.parse(text);
document.getElementById("demo").innerHTML =
obj.employees[1].firstName + " " + obj.employees[1].lastName; */

//json 2



</script>


<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Project Main Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <input type="text" class="form-control form-control" >
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-primary addproject" data-toggle="popover" title="Project Name" data-content="Please add Project name" data-placement="bottom" data-trigger="focus">Add</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

        </div>
        </div>
  </div>

  

