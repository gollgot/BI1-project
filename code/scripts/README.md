# Scripts

## À quoi servent-ils ?
Les deux scripts servent à récupérer les données sur la consommation et la production d'électricité, directement depuis une API, pour les nettoyer et créer un fichier .csv en sortie.

J'ai décidé d'utiliser l'API et de générer mes propres .csv au lieu d'utiliser les fichiers proposés par le site source (voir readme principal). Car d'une part dans le fichier source il y avait une quantité astronomique de point géocode et d'autre part j'ai dû manipuler certaine données pour qu'elle affiche par exemple un 0 au lieu d'une chaîne vide, etc. J'ai donc pu nettoyer ces données pour ne garder que l'essentiel.

Les liens vers les APIs ainsi que leurs paramètres sont disponible dans chacun des codes sources.

## Utilisation
le plus simple est de sauvegarder l'entier du repository (projet BI1 disponible [ici](https://github.com/gollgot/BI1-project)) dans un serveur WEB, et de lancer les scripts PHP depuis votre serveur. Si vous avez gardé la même arborescence, vous allez retrouver vos données traitées dans le dossier `/data/processed/`.

Si vous voulez importer que les scripts et ne pas garder tout les autres dossier, il vous faudra changer l'emplacement du fichier de sortie dans les codes sources.