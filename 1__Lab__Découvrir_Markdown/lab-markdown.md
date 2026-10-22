---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background: #111827;
    color: #f3f4f6;
    font-family: Inter, system-ui, sans-serif;
    padding: 46px 64px;
  }
  section.light {
    background: #f8fafc;
    color: #172033;
  }
  h1, h2, h3 {
    font-family: Anton, Impact, sans-serif;
    color: #38bdf8;
  }
  section.light h1, section.light h2, section.light h3 {
    color: #0369a1;
  }
  p, li, td, th {
    font-size: 0.88em;
    line-height: 1.35;
  }
  pre {
    font-size: 0.68em;
    line-height: 1.25;
    background: #1f2937;
    border-radius: 8px;
    padding: 14px 18px;
  }
  section.light pre {
    background: #e2e8f0;
  }
  code {
    font-size: 0.9em;
  }
  a {
    color: #38bdf8;
  }
  section.light a {
    color: #0369a1;
  }
  table {
    width: 100%;
    font-size: 0.82em;
  }
---

# Découvrir la syntaxe Markdown

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

Markdown est un langage de balisage léger : quelques caractères transforment du texte brut en document lisible et structuré.

**Objectif du laboratoire :** rédiger un document clair, facile à relire et à publier sur GitHub.

- Structurer avec des titres et des paragraphes
- Mettre en forme du texte et créer des listes
- Ajouter des liens, des images, des tableaux et du code
- Prévisualiser puis vérifier le rendu

---

<!-- _class: light -->

## Problems Encountered

- Un titre sans espace après `#` ne suit pas la syntaxe attendue : `#Titre` au lieu de `# Titre`.
- Des listes imbriquées mal indentées perdent leur hiérarchie.
- Un lien ou une image avec une URL incorrecte ne s’affiche pas.
- Un bloc de code sans clôture peut absorber le reste du document.
- Certains éléments, comme les cases à cocher, dépendent de la prise en charge GitHub Flavored Markdown (GFM).

---

## Solutions Implemented

- Mettre un espace après les marqueurs de titre et respecter l’ordre des niveaux.
- Séparer les paragraphes et les blocs par une ligne vide.
- Indenter les sous-listes de façon régulière.
- Vérifier les URL, le texte alternatif et les chemins relatifs des images.
- Ouvrir et fermer chaque bloc de code avec trois accents graves; préciser son langage.
- Prévisualiser le fichier et contrôler le résultat sur la plateforme de publication.

---

<!-- _class: light -->

## Titres et paragraphes

Le nombre de `#` indique le niveau du titre. Dans un document, gardez une hiérarchie logique et ne sautez pas de niveau sans raison.

```markdown
# Titre du document
## Grande partie
### Sous-partie

Voici un premier paragraphe.

Voici un deuxième paragraphe, séparé par une ligne vide.

Texte **important**, texte *mis en valeur* et `code en ligne`.
```

**À retenir :** un retour à la ligne simple ne crée pas toujours un nouveau paragraphe; laissez une ligne vide entre deux paragraphes.

---

## Listes

### Liste à puces

```markdown
- Préparer le document
- Ajouter les exemples
  - Vérifier les liens
  - Relire le rendu
```

### Liste numérotée

```markdown
1. Créer le fichier
2. Écrire le contenu
3. Prévisualiser le résultat
```

Les marqueurs `-`, `*` et `+` créent des puces. Indentez les éléments enfants pour conserver leur niveau.

---

<!-- _class: light -->

## Liens et images

Un lien associe un libellé à une destination. Une image suit presque la même syntaxe, précédée de `!` et munie d’un texte alternatif.

```markdown
[Documentation Markdown](https://www.markdownguide.org/)

![Illustration : aperçu Markdown](https://placehold.co/600x240/png?text=Image+Markdown)
```

[Consulter le guide Markdown](https://www.markdownguide.org/)

![Illustration : aperçu Markdown](https://placehold.co/600x240/png?text=Image+Markdown)

Pour une image du projet, remplacez l’URL par un chemin relatif, par exemple `![Capture de l’application](images/capture.png)`.

---

## Tableaux

Les tirets séparent l’en-tête du contenu. Les deux-points alignent les colonnes : à gauche, au centre ou à droite.

```markdown
| Élément       | Syntaxe          | Résultat      |
|:--------------|:----------------:|--------------:|
| Titre         | `## Texte`       | Grande partie |
| Gras          | `**texte**`      | **texte**     |
| Code en ligne | `` `code` ``     | `code`        |
```

| Élément       | Syntaxe          | Résultat      |
|:--------------|:----------------:|--------------:|
| Titre         | `## Texte`       | Grande partie |
| Gras          | `**texte**`      | **texte**     |
| Code en ligne | `` `code` ``     | `code`        |

---

<!-- _class: light -->

## Blocs de code

Entourez le code de trois accents graves. Ajoutez le nom du langage pour obtenir une coloration syntaxique adaptée.

````markdown
```javascript
const message = "Bonjour, Markdown !";
console.log(message);
```
````

Le bloc ci-dessus illustre le code Markdown à écrire; voici son rendu :

```javascript
const message = "Bonjour, Markdown !";
console.log(message);
```

Pour un extrait court dans une phrase, utilisez des accents graves simples : `npm run dev`.

---

## Exemple pratique : une fiche de projet

```markdown
# Mon mini-projet

Une petite application pour **apprendre en pratiquant**.

## Fonctionnalités

- Ajouter une tâche
- Consulter la liste
- Suivre sa progression

## Étapes

1. Décrire le besoin
2. Écrire le code
3. Tester le résultat

## Ressource

[Guide Markdown](https://www.markdownguide.org/)

![Illustration du projet](https://placehold.co/600x240/png?text=Mon+mini-projet)

## Technologies

| Technologie | Utilisation |
|:------------|:------------|
| HTML        | Structure   |
| CSS         | Présentation|

## Extrait

```javascript
console.log("Mon projet est prêt !");
```
```

---

<!-- _class: light -->

## Exercice et vérification

Rédigez une courte fiche sur un projet de votre choix en reprenant les éléments de l’exemple précédent.

- [ ] Le document possède un titre principal et des sous-titres ordonnés.
- [ ] Les paragraphes sont séparés par des lignes vides.
- [ ] Il contient au moins une liste, un lien et une image avec un texte alternatif.
- [ ] Le tableau comporte un en-tête et des séparateurs corrects.
- [ ] Le bloc de code est fermé et indique le langage.
- [ ] Le rendu a été prévisualisé et les liens ont été vérifiés.

**Markdown transforme du texte simple en contenu structuré, partageable et facile à maintenir.**
