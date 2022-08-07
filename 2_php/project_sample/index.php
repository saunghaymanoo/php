<?php include "template/header.php"; ?>
    <h1>This is index page <?php echo "of {$info["name"]}" ?></h1>
    <pre>
        <?php 
            echo "http://{$_SERVER['HTTP_HOST']}/2_php/project_sample/";
            print_r($_SERVER);
        ?>
    </pre>
<?php include "template/footer.php"; ?>