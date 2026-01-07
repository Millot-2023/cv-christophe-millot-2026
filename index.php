<?php
// On pourra ajouter ici la logique PHP plus tard (système de routage par exemple)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christophe Millot - Portfolio 2026</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>

    <?php 
    // 1. Inclusion du Header (Contient le logo et le menu burger)
    include 'includes/header.php'; 
    ?>

<main>
    <?php 
    // On définit la page
    $page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
    
    // On construit le chemin
    $file = 'includes/main-' . $page . '.php';
    
    // On vérifie si le fichier existe PHYSIQUEMENT
    if (file_exists($file)) {
        include $file;
    } else {
        // Si ça affiche ça, c'est que le chemin $file est faux pour PHP
        echo "<section>
                <h1>Erreur 404</h1>
                <p>Le fichier <strong>$file</strong> est introuvable dans le dossier includes.</p>
              </section>";
    }
    ?>
</main>
    <?php 
    // 3. Inclusion du Footer
    include 'includes/footer.php'; 
    ?>

    <script src="assets/js/menu.js"></script>
</body>
</html>