  <!DOCTYPE html>

	<html lang="en">

	<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OWO</title>
  </head>

  <body>
    <?php
        $numero = rand(1,4);
        $color = ["#0013FF","#FF0000","#36FF00","#A30FC1"];
        $numcolor = rand(0,3);
        echo"Numero generado =" . $numero   . "<br>";
        echo"<div style= 'color".$color[$numcolor]."'>Color generado</div>";
        if($numero == 1){
     ?>  
     
     <h1 style="color: <?php echo $color[$numcolor]; ?>">Título 1 de la pagina</h1>      
        <video width="800" height="600" controls>
      <source src="gato arabe.mp4" type="video/mp4">
       Your browser does not support the video tag.
       </video>
        <?php } elseif($numero == 2) {?>
        <h2 style="color: <?php echo $color[$numcolor]; ?>">Título 2 de la pagina</h2>
	<video width="620" height="440" controls>
      <source src="480p-2.mp4" type="video/mp4">
     Your browser does not support the video tag.
     </video>
       <?php } elseif($numero == 3) {?>
        
        <h3 style="color: <?php echo $color[$numcolor]; ?>">Título 3 de la pagina</h3>
	<img src="gato.jpeg">

       <?php }else{        ?>
        <h4 style="color: <?php echo $color[$numcolor]; ?>">Título 4 de la pagina</h4>
	<img src="gato.png"> 
       <?php }     ?>
       <h2>Amador Barraza Angel Isaias</h2>
</body>
</html>