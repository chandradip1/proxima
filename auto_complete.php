<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Autocomplete textbox using jQuery, PHP and MySQL</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
           <style> 
           table{
            margin:auto;
            margin-top:30px;
            } 
        .list-unstyled ul{  
                 
                cursor:pointer;  
           }  
      .list-unstyled li{ 
           -webkit-transition:all 0.3s ease-in-out;
             -moz-transition:all 0.3s ease-in-out;
          background-color:#eee;
          border-top:1px solid #ccc;
          
                            padding:12px;
                
           }  

         .list-unstyled li:hover{
             -webkit-transition:all 0.3s ease-in-out;
             -moz-transition:all 0.3s ease-in-out;
           background-color:#0099ff;
           color:#fff;
           cursor:pointer;


         }  
           </style>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;li ">  
               <table>
               <tr>
                <td><input type="text" name="country" id="country" class="form-control" id="ex3" placeholder="Enter Country Name" /></td>
               <td><button type="button" class="btn btn-danger">Primary</button></td>
               </tr>
               </table>
               
                <div id="countryList"></div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script>  
