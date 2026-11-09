---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background: #f5f7fb;
    color: #17243a;
    font-family: "Aptos", "Segoe UI", sans-serif;
    padding: 42px 54px;
  }
  h1, h2 { color: #174a7e; }
  h1 { font-size: 1.65em; }
  h2 { font-size: 1.25em; }
  code { color: #0c6380; }
  pre { font-size: 0.72em; line-height: 1.25; }
  section.lead {
    background: linear-gradient(135deg, #10243b, #174a7e);
    color: #f4f8fc;
  }
  section.lead h1, section.lead strong { color: #ffffff; }
  section.light { background: #ffffff; }
  section small { color: #53647a; }
---
<!-- _class: lead -->

# PHP Lab Assignment

## Erreurs & exceptions · Namespaces · Traits

**Étudiant·e :** [à compléter]  
**Encadrant·e :** [à compléter]

*Exemples illustratifs — intégration projet à confirmer*

<!--
Présenter le sujet officiel du README. Les informations d’identification et l’intégration restent à compléter.
-->

---

## Objectifs & parcours

**Objectif du lab**  
Comprendre trois mécanismes PHP et préparer un exemple pratique pour chacun, puis vérifier leur intégration dans l’architecture réelle.

1. **Introduction & stack technique** — état vérifié du dossier
2. **Définitions** — exceptions, namespaces et traits
3. **Problème** — [cas réel à documenter; non présent dans les sources]
4. **Solution** — démonstrations autonomes et pistes d’intégration
5. **Vérification & conclusion**

<!--
Le README demande recherche, exemples pratiques et vérification. Aucun problème vécu n’est documenté.
-->

---

## Périmètre observé & démarrage

```text
lab-php/
├── README.md
└── .agents/
    ├── rules/
    └── skills/
```

- Aucun code PHP, `composer.json` ou framework trouvé dans `lab-php`.
- Version du projet et autoload : **non définis dans les fichiers observés**.
- PHP CLI installé localement : **8.5.10** (environnement de cette vérification).

**Quick Start local**

```bash
php -v
php -r "echo 'Bonjour PHP', PHP_EOL;"
```

<!--
Le dossier contient le brief et ses consignes, pas l’application. La commande Hello World a été exécutée localement; elle ne valide pas un projet applicatif.
-->

---

## Erreurs & exceptions

Une exception signale une situation que le flux normal ne peut pas traiter.  
`throw` la déclenche; `try/catch` la traite à une frontière appropriée.

```php
<?php
function prixValide(float $prix): float
{
    if ($prix < 0) {
        throw new InvalidArgumentException('Prix négatif');
    }
    return $prix;
}

try {
    echo prixValide(-1), PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo 'Entrée refusée : ', $e->getMessage(), PHP_EOL;
}
```

**Démo illustrative :** la validation échoue et le `catch` rend l’erreur observable.

<!--
Insister sur la séparation entre détection de l’entrée invalide et gestion de l’exception par l’appelant.
-->

---

## Namespaces

Un namespace qualifie les noms de classes et évite les collisions. `use` fournit un alias lisible.

```php
<?php
namespace Demo\Catalogue;

final class Produit
{
    public function nom(): string
    {
        return 'Stylo';
    }
}

namespace Demo\Application;

use Demo\Catalogue\Produit;

echo (new Produit())->nom(), PHP_EOL;
```

**Sortie de la démo :** `Stylo`  
Les noms `Demo\...` sont fictifs; ils ne décrivent pas l’autoload du projet.

<!--
Expliquer que l’organisation et le chargement effectifs dépendront de l’architecture et de l’autoload à découvrir.
-->

---

## Traits

Un trait réutilise des méthodes entre classes sans créer une relation d’héritage.

```php
<?php
trait AvecCode
{
    public function formater(string $code): string
    {
        return 'REF-' . $code;
    }
}

class FactureDemo { use AvecCode; }
class ColisDemo { use AvecCode; }

echo (new FactureDemo())->formater('F-01'), PHP_EOL;
echo (new ColisDemo())->formater('C-02'), PHP_EOL;
```

**Sortie :** `REF-F-01` puis `REF-C-02`  
Les classes sont des supports pédagogiques, pas des classes du projet.

<!--
Un trait convient à un comportement partagé et cohérent; éviter d’en faire un substitut à une abstraction métier.
-->

---

## Démonstrations : ce qu’elles montrent

| Notion | Action | Résultat observable |
|:--|:--|:--|
| Exception | Appeler `prixValide(-1)` | Le message est capturé à l’appel |
| Namespace | Importer `Demo\Catalogue\Produit` | L’appel résout la classe qualifiée |
| Trait | Réutiliser `AvecCode` | Deux classes formatent un code de la même façon |

**Ces trois extraits sont autonomes et illustratifs.** Ils ne sont ni reliés à des classes métier existantes ni présentés comme une intégration réalisée.

<!--
Résumer les résultats attendus, puis distinguer explicitement ces petites démos d’une fonctionnalité intégrée.
-->

---

## Intégration & vérification

**À raccorder après découverte du code réel**

```text
[point d’entrée à identifier]
          ↓
[classes / namespaces à confirmer]
          ↓
[dépendances et autoload à confirmer]
```

- Placer la gestion d’exception à la frontière pertinente; choisir les namespaces selon l’autoload réel.
- Ajouter un trait seulement si plusieurs classes du projet partagent réellement le comportement.
- Après avoir enregistré chaque extrait sous un fichier temporaire `demo-*.php` :

```bash
php -l demo-exception.php
php demo-exception.php
```

Même contrôle pour les démos namespace et trait. Le lint et l’exécution des extraits ont été vérifiés avec PHP CLI 8.5.10; aucun test du projet n’est possible sans implémentation.

<!--
Remplacer les éléments entre crochets seulement après inspection du code et de sa configuration. Les noms demo-* sont des fichiers temporaires suggérés, pas des fichiers existants.
-->

---

<!-- _class: light -->

## Conclusion

- Les exceptions rendent les erreurs récupérables explicites.
- Les namespaces structurent les noms; les traits partagent des comportements ciblés.
- Les exemples illustrent les trois notions, mais **ne constituent pas une intégration au projet**.

**Prochaine étape :** compléter l’architecture, l’autoload, le cas pratique et les résultats de vérification à partir du code réel.

<!--
Conclure sur les notions et la limite principale : le dépôt ne fournit pas encore d’implémentation à relier.
-->
