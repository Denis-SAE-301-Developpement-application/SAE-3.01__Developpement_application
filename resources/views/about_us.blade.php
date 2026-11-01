<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoodAligner</title>
    
    <sript src="https://unpkg.com/lucide@latest"></script> <!-- Pour les icons  -->
     <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Pour la typographie  -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Pour la typographie  -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <!-- Liaison des fichier depuis Vite -->
    @vite(['resources/css/style_about.css', 'resources/js/script_about.js'])
    
</head>
<body>

    <div id="header">
      <div class="container">

        <div class="premier_message">
          <p>Hello World</p> 
          <h1>Cette Page est A propos de Nous !!!!</>
        </div>

        <div class="presentation">
            <h1>Bienvenue sur notre site : MoodAligner</h1> 
            <h3>L'équipe se compose de :</h3>

            <ol class="equipe">
                <li>Anass Fathi</li>
                <li>Hamza</li>
                <li>Anas</li>
                <li>Adrien</li>
                <li>Hocine</li>
                <li>Ahmed</li>
            </ol>
            <a href="./index"> <i data-lucide="link"></i> </a>  
        </div>

      </div>
    </div>

</body>
</html>
