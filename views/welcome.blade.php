<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src=//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js></script>
  </head>
  <body >
    <div >
      <a href="javascript:;" id="getData" >Get Data</a>
      <div >
        <div >
          <h1 id="title"></h1>
          <p id="description"></p>
        </h1>
        <div ></div>
      </div>
    </div>
    <table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Qty</th>
      <th scope="col">Discount</th>
      <th scope="col">Total</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody id="product-info">
 
    
  </tbody>
</table>
    <script
    src=//code.jquery.com/jquery-3.5.1.min.js
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin=anonymous></script>
    <script type=text/javascript>
      $(document).ready(function() {
      //  $("#getData").click(function() {
          
          $.get("{{URL::to ('prolist') }}",function(data){
           $('#product-info').empty().html(data);
          //   console.log(data)
            $.each(data,function(i,value){
              //alert(value.name);
              var tr=$("<tr/>");
              tr.append($("<td/>",{
                text:value.id
              })).append($("<td/>",{
                text:value.name
              })).append($("<td/>",{
                text:value.price
              })).append($("<td/>",{
                text:value.desc
              })).append($("<td/>",{
                text:value.qty
              })).append($("<td/>",{
                text:value.discount
              })).append($("<td/>",{
                text:value.total
              })).append($("<td/>",{
                html:"<a href='#'>Edit</a>"
              })).append($("<td/>",{
                html:"<a href='#'>Delete</a>"
              }))
              $('#product-info').append(tr);
            });
            
          });
     //   });
      });
      
       // $.ajax({  //create an ajax request to display.php
          // type: "GET",
          // url: "prolist",       
          // success: function (data) {
            
            //window.location.href="list"
           
              
            // $("#title").html(data.title);
            // $("#description").html(data.description);
         // }
    //    });
    
      </script>


  </body>
</html>