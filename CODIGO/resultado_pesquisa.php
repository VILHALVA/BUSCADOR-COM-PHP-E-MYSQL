<?php 

   if(!empty($resultados_pesquisa)) {
    do{
      echo "
      <div class='resultado'>
          <strong>Nome</strong><p>".$resultados_pesquisa['nome']."</p>
          <strong>Género</strong><p>".$resultados_pesquisa['genero']."</p>
          <strong>Idade</strong><p>".$resultados_pesquisa['idade']."</p>
      </div>
      <hr>
         ";
    } while ($resultados_pesquisa=mysqli_fetch_assoc($resultado_pesquisa));
    }else{
    echo '
              
         <h5>Nenhuma informação encontrada!</h5>
     ';

    }
    
?>