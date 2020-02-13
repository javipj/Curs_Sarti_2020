<?php



function listarArchivos( $path ){     
    // Abrimos la carpeta que nos pasan como parámetro     
    $dir = opendir($path);     
    while ($elemento = readdir($dir)){    // Leo todos los ficheros de la carpeta   
    // Tratamos los elementos . y .. que tienen todas las carpetas       
        if( $elemento != "." && $elemento != ".."){  
            if( is_dir($path.$elemento) ){   
            // Si es una carpeta                 
            // Muestro la carpeta                 
                echo "<p><strong>CARPETA: ". $elemento."</strong></p>";  


            } else {           // Si es un fichero                   
                
                
                echo "<img src='$path$elemento'><br>";
            }         
        }   
    }
} 


listarArchivos("uploads/");




?>