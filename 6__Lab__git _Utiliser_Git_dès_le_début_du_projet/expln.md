
# Lab 01 — Initialiser un dépôt Git et le connecter à GitHub

## 1. Objectif

L'objectif de ce Lab est d'initialiser un dépôt Git, de vérifier l'état des fichiers, d'ajouter les premiers fichiers, de créer des commits et de publier le projet sur GitHub.

## 2. Vérifier l'état du dépôt

### `git status`

Cette commande permet de vérifier l'état du dépôt et de connaître les fichiers non suivis, modifiés ou prêts à être commités.

```bash
git status
```

## 3. Initialiser un dépôt Git

### `git init`

Cette commande initialise un nouveau dépôt Git dans le répertoire courant.

```bash
git init
```

**Remarque :** si le projet appartient déjà à un dépôt Git existant, il n'est généralement pas nécessaire d'exécuter cette commande une deuxième fois.

## 4. Ajouter les fichiers

### Ajouter tous les fichiers

La commande `git add .` ajoute les modifications du répertoire courant et de ses sous-répertoires à la Staging Area.

```bash
git add .
```

### Ajouter un seul fichier

Cette commande permet d'ajouter un fichier spécifique à la Staging Area.

```bash
git add index.html
```

### Ajouter plusieurs fichiers spécifiques

```bash
git add index.html style.css expln.md
```

## 5. Vérifier les fichiers ajoutés

Après avoir ajouté les fichiers, on vérifie leur état.

```bash
git status
```

Les fichiers ajoutés apparaissent généralement dans la section `Changes to be committed`.

Cela signifie qu'ils sont prêts à être enregistrés dans un commit.

## 6. Créer un commit

### `git commit -m`

Cette commande enregistre les modifications présentes dans la Staging Area avec un message descriptif.

```bash
git commit -m "Initial commit"
```

Un commit représente un point de sauvegarde dans l'historique du projet.

## 7. Consulter l'historique et les modifications

### Consulter l'historique

La commande `git log --oneline` affiche l'historique des commits sous une forme compacte.

```bash
git log --oneline
```


## 8. Connecter le dépôt local à GitHub

### Étape 1 — Créer un repository sur GitHub

1. Se connecter à GitHub.
2. Cliquer sur **New repository**.
3. Choisir un nom pour le repository.
4. Sélectionner sa visibilité : Public ou Private.
5. Créer le repository.

Pour un projet déjà présent en local, il est préférable de créer un repository distant vide, sans README ni autres fichiers initiaux.

### Étape 2 — Ajouter le repository distant

La commande `git remote add origin` associe le dépôt local à une URL GitHub.

```bash
git remote add origin https://github.com/USERNAME/REPOSITORY.git
```

Remplacer `USERNAME` par le nom du compte GitHub et `REPOSITORY` par le nom du repository.

### Étape 3 — Vérifier le repository distant

```bash
git remote -v
```

Cette commande affiche les URL utilisées pour récupérer et envoyer les modifications.

### Étape 4 — Renommer la branche principale

```bash
git branch -M main
```

Cette commande renomme la branche actuelle en `main`.

### Étape 5 — Publier le projet sur GitHub

```bash
git push -u origin main
```

Cette commande envoie les commits locaux vers la branche `main` du repository distant et configure le suivi entre les deux branches.

## 9. Gérer les branches

### Afficher les branches locales

```bash
git branch
```

Cette commande affiche les branches locales. L'astérisque indique la branche actuelle.

### Créer une branche

```bash
git branch nom-branche
```

Cette commande crée une nouvelle branche sans changer de branche actuelle.

### Changer de branche

```bash
git switch nom-branche
```

Cette commande permet de passer à une branche existante.

### Créer et changer de branche

```bash
git switch -c nom-branche
```

Cette commande crée une nouvelle branche et bascule directement dessus.

### Revenir à la branche principale

```bash
git switch main
```

Cette commande permet de revenir à la branche `main`.

## 10. Synchroniser le projet avec GitHub

### Récupérer les modifications distantes

```bash
git pull
```

Cette commande récupère les modifications distantes et tente de les intégrer à la branche locale actuelle.

Pour préciser le repository et la branche :

```bash
git pull origin main
```

### Envoyer les nouveaux commits

```bash
git push
```

Cette commande envoie les commits locaux vers le repository distant configuré.

### Cloner un repository existant

```bash
git clone https://github.com/USERNAME/REPOSITORY.git
```

Cette commande copie un repository distant sur l'ordinateur local.

## 11. Consulter une version précédente

### Consulter l'historique des commits

```bash
git log --oneline
```

Cette commande affiche les identifiants et les messages des commits.

### Consulter une version précédente

```bash
git checkout ID_DU_COMMIT
```

Cette commande permet de consulter l'état du projet à un commit précédent.

Remplacer `ID_DU_COMMIT` par l'identifiant du commit souhaité.

Pour revenir à la branche principale :

```bash
git switch main
```

**Remarque :** consulter un ancien commit avec `git checkout` place le dépôt en mode `detached HEAD`. Pour reprendre le travail habituel, revenir à une branche.

## 12. Workflow récapitulatif

### Travail local

```bash
git init
git status
git add .
git status
git commit -m "Initial commit"
git log --oneline
```

### Publication initiale sur GitHub

```bash
git remote add origin https://github.com/USERNAME/REPOSITORY.git
git branch -M main
git push -u origin main
```

### Pour les modifications suivantes

```bash
git init
git status
git add .
git commit -m "Description des modifications"
git push
```

## 13. Conclusion

Dans ce Lab, j'ai appris à initialiser un dépôt Git, à vérifier l'état des fichiers, à ajouter des fichiers à la Staging Area, à créer des commits, à consulter l'historique, à gérer les branches et à connecter un dépôt local à GitHub.

Git permet de suivre les modifications et de conserver l'historique du projet, tandis que GitHub permet d'héberger le repository distant et de partager le travail.
