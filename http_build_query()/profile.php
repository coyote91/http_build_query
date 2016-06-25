<?php 

$data = array( 
               'id'  => @$_GET['id']
               
               );


$datados = array( 
               'id'  => @$_GET['id'],
               'sk'  => @$_GET['sk']
               );

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	
	<link rel="stylesheet" href="estilo.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	
</head>
<body>

<a  href="buscador.php?">Buscador</a>
<br>
<br>
<br>

   <section> 

        <article>
        <?php echo '<li><a class="uno" href="profile.php?'.http_build_query($data).'&sk=wall">Biografia</a></li>'; ?>
        </article>   

         <article>
           <?php echo '<li><a class="dos"  href="profile.php?'.http_build_query($data).'&sk=info">Informacion</a></li>'; ?>
          </article>  

           <article>
          <?php echo '<li><a class="tres" href="profile.php?'.http_build_query($data).'&sk=friends">Amigos</a></li>'; ?>
          </article>

           <article>
          <?php echo '<li><a class="cuatro" href="profile.php?'.http_build_query($data).'&sk=photo">Fotos</a></li>'; ?>
             </article>         

   </section>
 

<?php

   if( @$_GET['sk'] == "wall") 
  {
       
       echo "aqui va el muro";
  }
  
    if( @$_GET['sk'] == "friends") 
  {
       
       echo "aqui va la lista de amigos";
  }
  
    if( @$_GET['sk'] == "photo") 
  {
       
       echo "aqui va los albums del usuario";
  }
  
 
 
 
?>


<!--   
    SUBMENU DE LA SECCION INFORMACION

-->

 <?php 
  if( @$_GET['sk'] == "info") 
  {
    echo '<li><a href="profile.php?'.http_build_query($datados).'&section=overview">Informacion general</a></li><br>';
    echo '<li><a href="profile.php?'.http_build_query($datados).'&section=education">Trabajo y formacion academica</a></li><br>';
    echo '<li><a href="profile.php?'.http_build_query($datados).'&section=living">Lugares en los que has vivido</a></li><br>';
    echo '<li><a href="profile.php?'.http_build_query($datados).'&section=contact-info">Informacion basica y de contacto</a></li><br>';
    echo '<li><a href="profile.php?'.http_build_query($datados).'&section=relationship">Familia y relaciones</a></li><br>';
    echo '<li><a href="profile.php?'.http_build_query($datados).'&section=bio">Detalles sobre ti</a></li><br>';
      echo '<li><a href="profile.php?'.http_build_query($datados).'&section=year-overviews">Acontecimientos importantes</a></li><br>';
  }
  
  

  ?>



</body>










