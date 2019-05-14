<?php 
    include("Includes/Header.php");
    include("Class/ClassCrud.php")
?>
    <div id="interface">
        <section id="corpo">
            <article id="noticias">
                
                <!-- Estrutura de loop -->
                <?php
                    $crud = new ClassCrud();
                    $BFetch=$crud->selectDB(
                        "id, titulo, datapub, conteudo",
                        "artigos",
                        "",
                        array()
                    );

                    while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <header id='cabnoticias'>
                        <h1><a href='detalhes.php?d=<?php echo $Fetch['id']?>'><?php echo $Fetch['titulo']; ?></a></h1>";
                        <h3><?php echo $Fetch['datapub']; ?></h3></header>
                        <!-- Codigo responsavel pela limitacao do texto(mb_strmwidth) e exclusao das tags HTML(strip_tags) -->
                        <p> <?php echo mb_strimwidth(strip_tags($Fetch['titulo']), 0, 400, "<br/><a href='detalhes.php?d={$Fetch['id']}' id='lin'>Continue lendo</a>"); ?></p>
                    <?php } ?>
            </article>
        </section>
    </div>
<?php
    include("Includes/Footer.php");
?>