# SAE-3.01__Developpement_application

## MoodAligner

Application web de suivi et d'alignement des humeurs/émotions par recommandation de contenu ,  pour l'équipe.
---
### Prérequis
- PHP 8.2+
- Composer
- Node.js & npm
- PostgreSQL
---
### Guide Étapes d’installation

#### Cloner le depot github
git clone https://github.com/Denis-SAE-301-Developpement-application/SAE-3.01__Developpement_application.git
cd SAE-3.01__Developpement_application

#### Étape 2 : Ce mettre sur la bonne branche (a chaque fois)

git checkout develop

#### Étape 3 : Installer les dépendances (PHP et JavaScript)

##### Pour le backend (PHP/Laravel)
composer install 

##### Pour le frontend (Node.js/Vite)
npm install

#### Étape 4 : Conifguration de votre fichier .env 

##### Copier le fichier .env.example et le renommer .env (OBLIGATOIR) 
cp .env.example .env

##### OUVRER le fichier .env et modifier pour mettre votre mot de passe (ne changer rien d'autre)
DB_PASSWORD=votre_mot_de_passe_ou_vide

#### Étape 5 : Génération de la clée de l'application 
php artisan key:generate

#### Étape 6 : Créer la base de données dans PostgreSQL
createdb -U postgres moodaligner
ps : si pas deja connecter : sudo -su postgres 

#### Étape 7 : Faire les migrations
php artisan migrate

#### Étape 8 : Lancer l'application
Ouvrer deux autre terminal ,

    Terminal 2 (Serveur web Laravel) :
        php artisan serve

    Terminal 3 (Compilateur d'assets frontend) :
        npm run dev

le premier terminal servira au différente commande sur le systeme .
 
#### Étape 9 : Final lancement
    Ouvrer un navigateur web est lancer : http://127.0.0.1:8000
    si cela se lance bien et vous voyer l'interface Laravel , enregister vous (register)

---

### Conventions pour notre travail d'équipe :

- **Branches** : `feature/nom-court` 
- **Casse (Linux)** : Respecter strictement la casse attendue par Laravel (Classes en PascalCase au début, vues en minuscules).

### Fichier important du projet 

Pour les icons : https://lucide.dev/icons/

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


