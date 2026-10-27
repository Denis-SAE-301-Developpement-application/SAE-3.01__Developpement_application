# SAE-3.01__Developpement_application

## MoodAligner

Application web de suivi et d'alignement des humeurs/émotions par recommandation de contenu ,  pour l'équipe.

### Prérequis
- PHP 8.2+
- Composer
- Node.js & npm
- PostgreSQL

### Étapes d’installation

*(Instructions pas à pas à remplir lors des tests)*
*(metter bien a jour tout comme dit svp)*

### Conventions pour notre travail d'équipe :

- **Branches** : `feature/nom-court` 
- **Casse (Linux)** : Respecter strictement la casse attendue par Laravel (Classes en PascalCase au début, vues en minuscules).

### Fichier important du projet 

moodaligner/vite.config.js    /*ajoute des fichier css et js a l'intérieur*/

    /* Partie Index de l'utilisateur */
    
moodaligner/app/Http/Controllers/IndexController     /*fichier avec les route +initialisation de la route index*/
moodaligner/resources/js/script_index.js    /*fichier Javascript (celui a modifier pour la page index )*/
moodaligner/resources/css/style_index.js    /*fichier CSS (celui a modifier pour la page index )*/
moodaligner/resources/views/index.blade.php    /*fichier HTML (celui a modifier pour la page index )*/

    /* Partie Page About Us */
    
moodaligner/app/Http/Controllers/AboutController     /*fichier avec les route +initialisation de la route about*/
moodaligner/resources/js/script_about.js    /*fichier Javascript (celui a modifier pour la page about )*/
moodaligner/resources/css/style_about.js    /*fichier CSS (celui a modifier pour la page about )*/
moodaligner/resources/views/about_us.blade.php    /*fichier HTML (celui a modifier pour la page about us )*/

    /* Autre Partie*/
    
    - Connexion/Inscription/Dashbord
        ==> deja initialiser par Laravel dans les meme reertoire que les page about et index

### License Framework :
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


