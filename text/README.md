# Rapport final

## Introduction
J'ai décidé de faire une analyse sur un sujet spécifique qui est la consommation et la production d'électricité pour chaque région de France. Ainsi, je vais pouvoir répondre à plusieurs questions tels que :
- Chaque région peut-elle est autonome au niveau de l'électricité ?
- Les régions qui produisent le plus sont-elles également celles qui consomment le plus ?
- La production d'électricité vient-elle en majorité d'une même source d'énergie ?

Ce sujet est intéressant car on peut voir sur un pays entier quelle région est plutôt productrice ou consommatrice.

## Données
Mes jeux de données ont été récupérés sur la plateforme Open Data de RTE. L'opérateur du **R**eseau de **T**ransport d'**É**lectricité est une entreprise de service qui gère le réseau public de transport d'électricité haute tension en France.

Cet opérateur est engagé dans le monde de l'open data et fourni donc beaucoup de jeux de données très intéressants, complets dans le domaine de l'électricité.

## Résultats
#### La consommation et la production totale en GWh des régions de France
![Graphique 1](https://github.com/gollgot/BI1-project/blob/master/figures/final/conso_prod-tot.png "Consommation et Production des régions de France")

Ce graphique est trié de la région qui consomme le plus d'électricité à celle qui en consomme le moins.

On peut rapidement voir que toutes les régions ne peuvent pas être autonome en électricité. Seulement 6 régions produisent plus que ce qu'elles consomment et 4 d'entre-elles produisent beaucoup plus que ce dont elles ont besoin. Nous pouvons donc en déduire que ces 4 régions (Auvergne-Rhône-Alpes, Grand-Est, Normandie, Centre-Val de Loire) exportent sûrement leur électricité aux autres régions.

De plus, ce ne sont pas les régions qui consomment le plus qui en produisent également le plus. Prenons l'exemple des régions Ile-de-France et Centre-Val de Loire : La première consomme énormément et ne produit que très très peut d'électricité, à l'inverse, la 2ème région de cet exemple consomme très peu mais elle produit énormément.

#### La consommation, production totale et nucléaire en GWh des régions de France
![Graphique 2](https://github.com/gollgot/BI1-project/blob/master/figures/final/conso_prod-tot_prod-nucl.png "Consommation¨, production totale et nucléaire des régions de France")
Les colonnes de consommation et de production totale de ce graphique sont les mêmes que sur le précédent. En plus, la part de production nucléaire vient s'y ajouter.

Ce graphique est très intéressant car il montre que toutes les régions qui produisent beaucoup d'électricité, utilisent l'énergie nucléaire. Nous pouvons donc en déduire que le réseau électrique Français est énormément lié à ce type d'énergie.

## Conclusion
En conclusion, nous avons pu voir que chaque région de France