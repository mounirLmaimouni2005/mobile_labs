---
name: lab-creator
description: "Créer ou adapter les livrables d'un lab à partir de son README et d'un plan générique. À utiliser pour préparer le contenu d'un lab et son plan de présentation."
---

# Création de lab

Cette skill orchestre la préparation des livrables d'un lab. Pour la mise en forme de la présentation, appliquer aussi la skill `marp`. Pour créer une structure de fichiers ou une skill, appliquer la skill `skill-creator`.

## Règles

- Conserver à l'identique le titre/slug existant du lab, au format `lab-*`. Ne pas le remplacer par un titre reformulé.
- Lire complètement le README du lab et les règles applicables avant de préparer un livrable. Lire entièrement les Skills pertinentes; consulter les autres fichiers existants nécessaires pour confirmer les chemins, l'environnement et les conventions.
- Pour préparer une présentation, rechercher le plan générique du workspace si un fichier `template-plan.md` n'existe pas. Mettre le plan de présentation dans `presentation.md`; ne pas le dupliquer dans le README.
- Rédiger en français et adapter les sections génériques aux objectifs et aux notions réellement présents dans le README.
- Pour le PHP Lab, conserver dans le README les trois sections principales imposées par l'enseignant : « Besoin du projet technique », « Notions et techniques à apprendre » et « Réalisation attendue ». Référencer les trois tutoriels et exemples appariés, `presentation.md` au format Marp et `docs/integration-notes.md`.
- Garder README, tutoriels, exemples, présentation et notes d'intégration cohérents. Le tutoriel explique le code de l'exemple associé; ne pas maintenir des copies divergentes de la même démonstration.
- Pour un lab technique, prévoir un Quick Start et un Hello World uniquement s'ils sont demandés par le livrable et exécutables dans l'environnement confirmé; vérifier toutes les commandes et versions.
- Ne pas inventer d'application, d'architecture, de dépendance, de version, de résultat de test ou de cas vécu. Distinguer une démonstration autonome d'une intégration réellement observée.
- Ne jamais inventer le problème vécu ni la solution choisie par l'étudiant. Avant de rédiger ces sections, lui demander : « Quel problème concret rencontrez-vous ? » et « Quelle solution proposez-vous ? ». Si les réponses manquent, laisser ces contenus à compléter et ne pas les présenter comme des faits.
- Créer ou modifier uniquement les livrables demandés; ne pas commencer les tutoriels, exemples ou la présentation si la demande les exclut.
- Ne pas ajouter de diapositive de conclusion ou de remerciements.
- Ne pas exécuter de commande Git si l'utilisateur l'interdit.

