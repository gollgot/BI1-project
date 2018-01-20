# Scripts

## consommation.php
Ce script va récupérer le JSON en provenance de l'API. Une fois celui-ci récupéré, je boucle à travers les 13 entrées et écrit dans un fichier CSV le nom de la région (string) et sa consommation (float).

Le traitement effectué sur ce jeu de données est plutôt de la mise en forme que du nettoyage. J'aurai pu récupérer un fichier CSV depuis le site d'open-data mais beaucoup de données entièrement inutiles (comme des milliers de points géocode) étaient présentes. C'est pour cela que j'ai décidé de refaire une mise en forme.

## production.php
Ce script va récupérer le JSON en provenance de l'API. Une fois celui-ci récupéré, je boucle à travers les 13 entrées et écrit dans un fichier CSV le nom de la région (string) ainsi que la production (float).

Le traitement effectué en plus sur ce jeu de données est le calcul d'une production totale (float), donc toutes énergies confonduent. De plus je vais remplacer les valeurs vides par un chiffre (0) pour maintenir l'unicité des valeurs.