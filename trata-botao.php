<?php include("cabecalho.php"); 
 include("conecta.php"); 
 include("BD-produto.php");



 $id = $_POST['id']; 

?> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  <div class="modal-dialog modal-md tela" ></br>

    <div class="modal-content">
      <div class="modal-body">
          <?php
        $produtos =buscaProduto($conexao, $id);


        ?>    
            <p> Deseja realmente excluir esse Produto: <?= $id?>?</p>
          </div>
          <div class="modal-footer">

            <div  class="modal-footer"></br>


                <input  type="hidden"  name="id" value="<?= $id['id']?>">

                <a href="remove-produto.php" method="POST" type="button" class="btn btn-danger" >Excluir</a>

                <a href="produto-formulario.php" method="POST" type="button" class="btn btn-info" >Cancelar</a>
              </div>  

            <?php echo $id;  ?>

      </div>
    </div>

  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>