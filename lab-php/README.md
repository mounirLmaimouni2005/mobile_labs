# PHP Lab Assignment

## Besoin du projet technique

Ce lab est nécessaire parce qu'un projet PHP réel doit être capable de gérer des situations imprévues, de conserver une organisation claire des classes et d'éviter la duplication du code sans perdre la lisibilité de l'architecture. Le dépôt observé ne contient pas encore d'application PHP fonctionnelle ni de fichiers Composer, donc le besoin est avant tout pédagogique : préparer le projet technique à intégrer ces mécanismes proprement lorsque l'application sera développée ou enrichie.

Le but est de renforcer la robustesse et la maintenabilité du projet technique. En pratique, cela permet :

- de détecter et de traiter les erreurs de données, d'entrées utilisateur ou de traitement sans arrêter brutalement l'ensemble du système ;
- de structurer les classes par domaine ou par responsabilité afin d'éviter les conflits de noms et de faciliter le chargement des fichiers ;
- de réutiliser des comportements communs sans multiplier les héritages inutiles.

L'objectif n'est pas d'inventer une application spécifique dans ce dépôt, mais d'identifier le besoin technique qu'un vrai projet PHP rencontre et de préparer une base de solution fiable, exploitable et explicable.

## Notions et techniques à apprendre

### 1. Gestion des erreurs et des exceptions

Il s'agit d'apprendre à distinguer les erreurs de programmation des situations métier ou d'exécution qui doivent être gérées explicitement. L'objectif est de maîtriser le mécanisme PHP fondamental suivant :

- lever une exception avec `throw` lorsqu'une condition invalide ou anormale est détectée ;
- capturer cette exception avec `try` / `catch` à la frontière du traitement ;
- utiliser `finally` lorsque la ressource ou l'état doit être nettoyé dans tous les cas ;
- produire un message clair et exploitable pour le développeur ou l'utilisateur ;
- choisir le bon niveau d'abstraction pour la gestion de l'erreur, sans masquer les causes réelles.

Les notions à comprendre sont la différence entre une erreur PHP classique, une exception, et le bon placement de la surveillance de l'entrée, du traitement et de la sortie.

### 2. Namespaces

Les namespaces servent à organiser les classes et à éviter les collisions de noms entre composants du projet. L'objectif est de comprendre :

- la nécessité de qualifier les classes selon leur domaine ou leur responsabilité ;
- le rôle de `namespace` pour isoler les symboles ;
- le rôle de `use` pour simplifier l'appel et la lecture du code ;
- la relation avec le chargement automatique des classes (`autoload`) dans une architecture propre ;
- la manière d'éviter les ambiguïtés quand plusieurs modules du projet utilisent des types portant le même nom.

Cette notion doit être maîtrisée comme un outil d'organisation, de séparation et de lisibilité du code.

### 3. Traits

Les traits permettent de réutiliser des méthodes entre plusieurs classes sans créer un héritage artificiel. L'objectif est d'apprendre :

- quand un comportement est réellement partagé entre plusieurs classes ;
- comment définir une méthode commune dans un trait ;
- comment utiliser le trait avec `use` dans une ou plusieurs classes ;
- quand le trait est adapté (partage d'un comportement technique ou de validation) et quand il ne l'est pas (modélisation métier ou hiérarchie logique) ;
- pourquoi il faut éviter d'abuser des traits pour masquer un mauvais design ou une architecture peu claire.

Le but est de comprendre que le trait est un outil de réutilisation, pas une solution systématique pour tous les cas de duplication.

## Réalisation attendue

Le lab est pédagogique : le dépôt ne fournit pas d'application PHP à laquelle raccorder les démonstrations. Les exemples doivent donc rester autonomes. Toute proposition d'intégration doit être présentée comme une piste, jamais comme une description de l'architecture existante.

### Livrables et organisation attendue

Créer trois tutoriels indépendants, un par notion, ainsi que trois exemples PHP correspondants. Chaque tutoriel doit partir du niveau débutant et présenter les définitions, le rôle et l'intérêt de la notion, sa syntaxe, une explication pratique de l'exemple associé, les bonnes pratiques, les erreurs fréquentes et au moins un exercice à réaliser.

Chaque fichier PHP doit être exécutable seul, lisible par un débutant et montrer le concept traité dans le tutoriel correspondant. Les deux livrables d'une même notion doivent employer les mêmes noms, données, commandes et résultats attendus.

La structure attendue est :

```text
lab-php/
├── README.md
├── presentation.md
├── tutorials/
│   ├── 01-error-exception-handling.md
│   ├── 02-namespaces.md
│   └── 03-traits.md
├── examples/
│   ├── 01-error-exception-handling.php
│   ├── 02-namespaces.php
│   └── 03-traits.php
└── docs/
    └── integration-notes.md
```

Cette structure décrit les livrables attendus et ne signifie pas que ces fichiers existent déjà. Ne pas ajouter de dépendances, de framework, d'autoload ni de structure applicative non constatés dans le dépôt.

### Intégration dans le projet technique

Créer également `presentation.md`, une présentation pédagogique au format Marp, et `docs/integration-notes.md`, qui distingue les possibilités d'intégration des faits réellement présents dans le dépôt. La présentation, les tutoriels, les exemples et ce README doivent rester cohérents entre eux.

Les tutoriels doivent expliquer les exemples sans les présenter comme du code applicatif déjà intégré. Les notes d'intégration peuvent recommander où ces notions seraient utiles dans un projet, mais doivent signaler explicitement que l'architecture réelle, les dépendances et l'autoload ne sont pas définis si aucun élément de preuve n'existe dans le dépôt.

### Vérification et résultats à documenter

Vérifier la version de PHP disponible avant de choisir la syntaxe ou d'indiquer une version. Depuis la racine du lab, vérifier la syntaxe puis exécuter chacun des exemples :

```bash
php -l examples/01-error-exception-handling.php
php examples/01-error-exception-handling.php
php -l examples/02-namespaces.php
php examples/02-namespaces.php
php -l examples/03-traits.php
php examples/03-traits.php
```

Documenter dans `docs/integration-notes.md` la version effectivement observée, les commandes réellement exécutées et leurs résultats. Ne jamais annoncer une validation, une sortie, un outil, une dépendance ou une version qui n'a pas été vérifié(e). Si PHP n'est pas disponible, indiquer les commandes qui restent à exécuter sans prétendre que les exemples ont été validés.

### Livrables attendus

Les livrables finaux sont les trois tutoriels, les trois exemples PHP associés, la présentation Marp `presentation.md` et les notes `docs/integration-notes.md`. Des améliorations techniques pertinentes peuvent être proposées si elles restent pédagogiques, compatibles avec l'environnement observé et clairement séparées des faits du projet.
