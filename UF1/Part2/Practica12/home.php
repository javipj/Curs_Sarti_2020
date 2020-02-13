<?php 

include("privado.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header>

        <h1>Hola, <?=$_SESSION["username"]?></h1>

    </header>

 
 

    <section>
    <a href="add_new.php">[Añadir noticia]</a>
    <ul>
        <li>
            <h2>Noticia1</h2><a href="edit_new.php?id=1">[Editar]</a><a href="delete_new.php?id=1">[Eliminar]</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, optio laudantium nesciunt dignissimos ab itaque temporibus aliquid aut veniam voluptates reprehenderit magni explicabo natus corrupti, eius quidem praesentium, suscipit odio!</p>
            <img src="https://img.imagenescool.com/ic/frases/frases_123.jpg" alt="">
            <p>7 comentarios 8 likes</p>
        </li>

        <li>
            <h2>Noticia2</h2><a href="edit_new.php?id=2">[Editar]</a><a href="delete_new.php?id=2">[Eliminar]</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, optio laudantium nesciunt dignissimos ab itaque temporibus aliquid aut veniam voluptates reprehenderit magni explicabo natus corrupti, eius quidem praesentium, suscipit odio!</p>
            <img src="https://img.imagenescool.com/ic/frases/frases_124.jpg" alt="">
            <p>71 comentarios 28 likes</p>

        </li>

        <li>
            <h2>Noticia3</h2><a href="edit_new.php?id=3">[Editar]</a><a href="delete_new.php?id=3">[Eliminar]</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, optio laudantium nesciunt dignissimos ab itaque temporibus aliquid aut veniam voluptates reprehenderit magni explicabo natus corrupti, eius quidem praesentium, suscipit odio!</p>
            <img src="https://img.imagenescool.com/ic/frases/frases_125.jpg" alt="">
            <p>37 comentarios 38 likes</p>

        </li>
    </ul>
    
    
    
    </section>

    <footer></footer>
</body>
</html>