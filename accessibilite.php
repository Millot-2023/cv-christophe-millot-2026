<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christophe Millot - Infographie & PAO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>

    <?php 
    include 'includes/header.php'; 
    ?>

<main>
    <?php 
    /* ADAPTATION : On force la variable $page à 'infographie' pour charger includes/main-infographie.php */
    $page = 'accessibilite';
    
    $file = 'includes/main-' . $page . '.php';
    
    if (file_exists($file)) {
        include $file;
    } else {
        echo "<section>
                <h1>Erreur 404</h1>
                <p>Le fichier <strong>$file</strong> est introuvable dans le dossier includes.</p>
              </section>";
    }
    ?>
</main>
    <?php 
    include 'includes/footer.php'; 
    ?>

    <script src="assets/js/menu.js"></script>
</body>
</html>