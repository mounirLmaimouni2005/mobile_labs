---
name: php-examples
description: Creates, adapts, and validates PHP examples with a step-by-step tutorial for each topic, following the project's PHP version and architecture. Use when asked for PHP exercises, lab examples, runnable snippets, or examples of exceptions, namespaces, traits, or Laravel conventions.
---

# PHP Example Creator

## Rôle

Créer des exemples PHP courts, compréhensibles, exécutables et adaptés au projet réel de l'utilisateur.

## Quand utiliser cette skill

Utilise-la pour créer ou adapter des exercices PHP, des exemples de notions du langage, des démonstrations Laravel ou du contenu pratique pour un lab. Ne l'utilise pas pour réécrire une application complète sans demande explicite.

## Entrées et contexte

- Lis le README complet, les règles applicables et les fichiers voisins de la destination demandée.
- Examine `composer.json`, les instructions applicables et le code pertinent pour identifier la version PHP, le framework, l'autoload et les conventions réelles.
- Repère si l'exemple peut utiliser des classes ou services existants. N'invente pas de modèles, de dépendances, de versions ou de problèmes vécus.
- Si un détail manque mais qu'une hypothèse simple permet d'avancer, choisis un exemple autonome et signale clairement ce qui est simulé. Demande une précision seulement si le choix change sensiblement le résultat.

## Procédure

1. Reformule le livrable attendu et choisis le chemin demandé. Préserve les fichiers existants; ne les remplace pas sans examiner leur contenu.
2. Déduis la version PHP et les dépendances à partir des fichiers du projet. N'utilise que des fonctions, syntaxes et commandes compatibles.
3. Respecte les chemins et noms définis par le README. Pour le PHP Lab, crée un fichier par exemple sous `examples/` et un tutoriel séparé sous `tutorials/`, appariés par numéro et notion. N'invente pas de dossiers par concept lorsque le README définit une structure différente.
4. Écris chaque tutoriel pour un public débutant. Pour chaque notion, présente les définitions, son utilité, la syntaxe essentielle, une explication ordonnée des blocs de l'exemple associé, les bonnes pratiques, les erreurs fréquentes, une commande d'exécution depuis la racine du projet, le résultat attendu et un exercice.
5. Fais correspondre exactement le tutoriel et son exemple : noms, entrées, commandes, comportement et sortie. Un exemple doit être exécutable seul et ne doit pas nécessiter de dépendances non disponibles. Distingue clairement démonstration autonome, scénario fictif pédagogique et code réellement intégré.
6. Garde le code court, pédagogique et techniquement exact : entrées explicites, noms descriptifs, types adaptés au niveau et sorties observables. Traite les exceptions à une frontière appropriée; emploie les namespaces uniquement selon les conventions/autoload observés ou explique le caractère autonome de la démonstration; n'emploie un trait que pour un comportement partagé pertinent.
7. N'invente ni architecture applicative, ni dépendance, ni version, ni cas vécu. Toute recommandation d'intégration doit être explicitement présentée comme une possibilité lorsque le dépôt ne l'établit pas.
8. Valide chaque fichier PHP avec `php -l` et exécute chaque exemple si PHP est disponible. Vérifie que le résultat observé correspond au tutoriel. Lance les tests ciblés existants si le projet en possède. Si un outil manque, consigne la validation non effectuée sans la présenter comme réussie.
9. Ne modifie le README parent que si la demande le requiert. Ne crée ni ne modifie la présentation Marp en travaillant uniquement sur les exemples.
10. Résume les fichiers concernés, les commandes exécutées, leurs résultats et les limites éventuelles.

## Règles

- Réponds dans la langue de la demande, en préservant la langue et le style des fichiers existants.
- N'intègre pas une démonstration au framework si elle peut être plus clairement exécutée seule; si elle dépend de Laravel, respecte ses conventions plutôt que de simuler ses APIs.
- N'expose pas de secrets et ne modifie jamais `.env`.
- Évite les dépendances supplémentaires pour de simples exemples du langage.
- Ne présente pas une donnée fictive comme une donnée réelle, ni un exercice autonome comme du code déjà intégré.
- Limite les modifications aux fichiers demandés et aux documents d'exécution nécessaires.

## Exemples de demandes

- « Crée un exemple PHP d'exception pour le formulaire de création d'article. »
- « Prépare trois exercices exécutables sur les namespaces, les traits et les exceptions. »
- « Adapte cet exemple PHP à la version et à l'autoload Composer de mon projet. »

## Vérification finale

- Chaque notion demandée possède un tutoriel distinct et un exemple PHP correspondant aux chemins définis par le README.
- Chaque tutoriel est accessible à un débutant et contient définitions, rôle, syntaxe, explication de l'exemple, bonnes pratiques, erreurs fréquentes et exercice.
- Chaque exemple est autonome et son résultat réel correspond aux instructions du tutoriel.
- Les exemples respectent la version et les conventions constatées.
- Le statut des vérifications est rapporté sans exagération.