<?php  
 $connect = mysqli_connect("localhost", "root", "", "prueba_tecnica");  
  
  $term = filter_input(INPUT_POST, "query");
  $provincia = filter_input(INPUT_POST, "country");
 
      $output = '';  
      $query = "Select NombreProvincia  From Provincias  Where NombreProvincia like '".$term."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["NombreProvincia"].'</li>'; 
                
           }  
      }  
      else  
      {  
           $output .= '<li>Provincia no encontrada</li>';  
      }  
      $output .= '</ul>';  
      echo $output;
   
 ?>  
