<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Comentarios</title>

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/es.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Comentario section-->
        <form method="POST" action="./php/enviarcomentario.php">
            <section id="contact">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <h2>Comentarios</h2>
                            <br>
                            
                                <br>
    
                                <div class="col-xs-12">
                                    <h3>Deixe seu comentário abaixo!</h3>

                                    <br>
                                <div class="form-group">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input class="form-control" name="nome" type="text" id="nome" placeholder="Escreva seu nome" required >
                                    </div>
                            
                                    
                            <br>
                                    <div class="form-group">
                                    <label for="comentario" class="form-label">Comentario:</label>
                                    <textarea class="form-control" name="comentario" cols="30" rows="5" type="text" id="comentario" 
                                    placeholder="Escreva seu comentário..."></textarea>
                                    </div>
                            <br>
                            <input class="btn btn-primary" type="submit"  value="Enviar Comentario">
                            <br>
                            <br>
                            <br>
                            
                                </form>
                                    <?php

$conexion=mysqli_connect("localhost","root","","meuteste");
$resultado= mysqli_query($conexion, 'SELECT * FROM comentarios');

while($comentario = mysqli_fetch_object($resultado)){

    ?>

    

<b><?php echo($comentario->nome);  ?></b> (<?php echo ($comentario->data_envio); ?>) comentou: 
<br />
<?php echo ($comentario->comentario);?>
<br />
<form method="POST" action="php/excluircomentario.php">
    <input type="hidden" name="comentario_id" value="<?php echo ($comentario->id); ?>">
    <input type="submit" class="btn btn-danger" value="Excluir Comentário">
</form>

<hr />




    <?php
    
}

                                    ?>
                          
                </div>
                
            </section>

     


    </body>
</html>
