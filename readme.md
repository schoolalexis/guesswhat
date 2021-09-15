# GuessWhat



Le projet 'GuessWhat' est un projet donné dans le cadre d'un cours sur la notion de POO (ou Programmation Orientée Objet) en PHP.



/!\ **Attention** : _Le readme, sert de rapport de projet mais ne traitera uniquement que les challenges réussis et les challenges en cours_ /!\\



## Objectif :



L'objectif du projet est simple. Créer une logique de jeu (jeu de cartes) en PHP en mettant en oeuvre la conception objet et des tests unitaires (avec PHPUnit).



## Challenges :



### Challenge n°1 "Prise en main" :



> Le challenge n°1 consistait en la vérification des pré-requis pour l'environnement de dev du projet et du "bon" fonctionnement du projet.
> **Prérequis** :
> - PHP (7 >= version)
> - Composer







Dans le cas de mon système d'exploitation (Windows et/ou Linux) l'installation des prérequis demandés était assurés par un script 'fresh install' (powershell ou bash).







Pour ce qui est du bon fonctionnement du projet 'guesswhat', les dépendances et composants déclarés dans le fichier `composer.json`, celles-ci se sont déroulés sans accros (de l'installation, a aux mises à jour).







### Challenge n°2 "Implémentation des TODOs de `CardTest` :



> Le challenge n°2 consistait en la réalisation des tests unitaires de `CardTest`.







L'ensemble des tests unitaires ont été réalisés. Hormis quelques petites imcompréhension sur le fonction magique `__toString()` , qui ont été vite résolut grâce à de la documentation (site officiel de PHP). Ce challenge ayant démandé la modification des fichiers `CardTest.php` et `Card.php` ainsi que `CardGame32.php`.







### Challenge n°3 "Conception des tests unitaires pour `CardGame32` :



> La challenge n°3 consistait en la réalisation des tests unitaires de `CardGame32` en respectant la logique de nommage.







L'ensemble de ce challenge n'a pas été réalisé, seul la création du deck de cartes a été faite.











## Envie de vérifier ?



### Prérequis :



**Prérequis sur votre système d'exploitation** :



- PHP (7.4>=)



- Composer (2.1.6)







### Installation :


Cloner le repo :



```bash
git clone <user>@<host>:schoolalexis/guesswhat.git
```
Installer les dépendances et composants et mettez les à jours :
```bash
composer install && composer update
```
### Lancez les tests :
Mettez-vous à la racine du projet :
```bash
./bin/phpunit #--filter= dans le cas où vous souhaitez un méthode et non l'ensemble
```

Maintenant bon courage !