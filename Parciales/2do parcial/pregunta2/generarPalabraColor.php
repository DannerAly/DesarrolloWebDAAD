<?php

$texto = $_POST['texto'];

$colorFondo = $_POST['colorFondo'];

$colorMargen = $_POST['colorMargen'];
?>
<style>
    .ej2{
        background-color: <?php echo $colorFondo ?>;
        border: 2px solid <?php echo $colorMargen ?>;
        color: <?php echo $colorMargen ?>;
        padding: 10px;
        height: 30px;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>
<div class="ej2">
<?php echo $texto ?>
</div>