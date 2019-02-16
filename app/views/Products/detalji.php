
<?php require_once 'app/views/_global/beforeContent.php';?>
gggggg
<article>
    <h1><?php echo $DATA['product']->name ; ?></h1>
    <p>    <?php  echo $DATA['product']->description ; ?></p>
    <h2>Cijena<?php  echo $DATA['product']->price ; ?>&euro</h2>
</article>


<?php require_once 'app/views/_global/afterContent.php';?>