<!DOCTYPE html>
<!--
PRUEBA TECNICA IVAN MARTIN ALONSO
-->
<html>
    <head>
        <title>Prueba Tecnica</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <style>  
           ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:12px;  
           }  
           </style>  
    </head>
    
    <body>
        <form action="resultados.php" autocomplete="on" method="POST">
       <div class="container" style="width:500px;">  
                <h3 align="center">PRUEBA TECNICA IVAN MARTIN ALONSO</h3><br />  
                <label>Introduce una provincia</label>  
                <input type="text" name="country" id="country" class="form-control" placeholder="Buscador de provincias" />  
                <div id="countryList"></div>  
           </div>  
        <p></p>
        <center>
            
                <input type="submit" value="Buscar" name="boton">
            </form>
        </center>
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




