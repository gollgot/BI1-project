# Chiffres

## Chiffres exploratoires

#### figures.pbix
Vous pouvez retrouver le fichier `figures.pbix` (Power BI) qui a servi à générer les différents graphiques.

#### bad_figure.png
Le graphique `bad_figure.png` permet de se rendre compte de l'utilisation d'un mauvais type de graphique. Si on ouvre l'image et qu'on regarde les chiffres consernant la région "Auvergne-Rhône-Alpes", que l'on prend le point le plus haut de la courbe de production, on observe un chiffre d'environ **60'000 GWh**. Faisons de même pour sa production totale, le point le plus haut atteint environ **170'000 GWh**.

Ce second chiffre est malheureusement totalement faux, car en réalité il faut soustraire la consommation. Ce qui veut dire que nous avons 170'000 - 60'000 = **110'000 GWh**. Donc le point 0 de la production se situe au point culminant de la consommation. Ceci est dû au fait que les données sont empilées pour donner un total de 100% (production + consommation = 170'000)

Cette visualisation est, pour moi, très difficile à comprendre, par rapport à un graphique en histogrammes où la comparaison se fait en un clin d'oeil.

## Chiffres finaux
Le graphique `conso_prod-tot.png` est un graphique en histogramme accolé final qui montre la consommation et la production (totale) électrique en GWh par région de France, le tout trié par la consommation de manière descendante.

Le graphique `conso_prod-tot_prod-nucl.png.png` est le même graphique que le précédent avec en plus, la production d'énergie nucléaire.
