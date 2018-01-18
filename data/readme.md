# Données

## Données bruts
Mes données bruts viennent d'une API (voir ci-dessous). J'ai décider de les récupérées via l'API fourni par le site qui fourni les données plutôt que leur fichier .csv. Car d'une part dans le fichier source il y avait une quantité astronomique de point géocode et d'autre part j'ai dû manipuler certaine données pour qu'elle affiche par exemple un 0 au lieu d'une chaîne vide, etc. J'ai donc pu nettoyer ces données pour ne garder que l'essentiel et sous un bon format.

### Liens
#### Consommation
 - Tableau des données relatives à la consommation annuelle régionale d'électricité en 2016 -> [ici](https://rte-opendata.opendatasoft.com/explore/dataset/conso_nette_regionale/table/?flg=fr&disjunctive.code_insee&disjunctive.regions_nouvelles&refine.annee=2016&sort=-annee)
 - API des données relatives à la consommation annuelle régionale d'électricité en 2016 -> [ici](https://rte-opendata.opendatasoft.com/api/records/1.0/search/?dataset=conso_nette_regionale&rows=13&sort=regions_nouvelles&facet=annee&facet=code_insee&facet=regions_nouvelles&refine.annee=2016)

#### Production
 - Tableau des données relatives à la production annuelle régionale d'électricité en 2016 -> [ici](https://rte-opendata.opendatasoft.com/explore/dataset/prod_region_filiere/table/?disjunctive.regions_nouvelles&sort=-annee&refine.annee=2016)
 - API des données relatives à la production annuelle régionale d'électricité en 2016 -> [ici](https://rte-opendata.opendatasoft.com/api/records/1.0/search/?dataset=prod_region_filiere&rows=13&sort=regions_nouvelles&facet=annee&facet=regions_nouvelles&refine.annee=2016)

## Données traitées
Les fichiers de données traitées `consommation.csv` et `production.csv` correspondent chacuns au script de même nom disponible dans le dossier `/code/scripts/`. Toutes les données de ces deux fichiers sont entièrement traitées, conforme au type dont nous avons besoin pour l'analyse et retournant des valeurs correcte et lisible.

## Types de données
Les données ont deux types principaux. Une chaîne de caractères en ce qui concerne le nom des régions, et des valeurs flottantes pour les chiffre (consommation / production) en GWh.

## Instructions à suivre
Voici les instructions à suivre pour passer des données bruts aux données traitées :
 - Sauvez l'entier du repository * (projet BI1 disponible [ici](https://github.com/gollgot/BI1-project)) dans un serveur WEB.
 - Lancez les scripts PHP (disponible dans le dossier : `/code/scripts/`) depuis votre serveur.
 - Attendez que l'éxécution des scripts se termine, puis allez dans le dossier `/data/processed/` et vous trouverez les deux fichiers contenant les données traitées sous le format .csv

\* *Il est possible de sauver que les scripts dans votre serveur web et non l'entier du repository, ou même de lancer les scripts sur un invite de commande. Si vous choisissez une de ces options il faudra changer dans les scripts le chemin de génération du fichier de sortie .csv*
