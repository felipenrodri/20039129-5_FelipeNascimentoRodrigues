<?php include_once('../dados/dados.php');?>
<?php include('./header.php');?>

  <section class="pagina-produto container">
    <div class="img-produto">
      <img src="<?=$produtos[$_GET['id'] - 1]['imagem']?>" alt="">
    </div>
    <div class="info-produto">
      <h1 class="info-titulo-produto"><?=$produtos[$_GET['id'] - 1]['nome']?></h1>
      <p class="info-descricao-produto"><?=$produtos[$_GET['id'] - 1]['descricao']?></p>
      <p class="info-preco-produto">R$ <?=$produtos[$_GET['id'] - 1]['preco']?></p>
      <h4 class="info-ingredientes">Ingredientes:</h4>
      <ul class="lista-ingredientes">
        <?php foreach ($produtos[$_GET['id'] - 1]['ingredientes'] as $ingrediente): ?>
          <li> <?=$ingrediente?></li>
        <?php endforeach?>
      </ul>
    </div>
  </section>

<?php include('./footer.php');?>