# ADV | Symfony - Validation
## Skillset
- https://my.skilldisplay.eu/en/skillset/122
- https://github.com/user-story-based-exercises/cms-vt-adv-symfony-validation

## Voraussetzungen
Um Formulareingaben in Symfony Flex zu validieren, bedarf es diesen Command, um die Validierung zu installieren:
```
composer require symfony/validator
```

## Validierung eines Properties
Um ein Property in beispielsweise im Entity `Movie.php` zu validieren, werden "Asserts" aus dem zuvor installierten Package unter `Validator\Constraints` verwendet. Daher wird folgender Namespace verwendet: 

```php
use Symfony\Component\Validator\Constraints as Assert;
```

### Validerung der Länge
Um beispielsweise den Namen eines Films so zu validieren, dass eine Mindestlänge von 3 vorhanden sein muss, kann ein sogenanntes Attribut zur Anwendung kommen:
```php
#[Assert\Length(min: 3, minMessage: 'Der Name muss mindestens {{ limit }} Zeichen lang sein.')]
private ?string $name = null;
```
Man verwendet hier die php Klasse `Length.php` und kann in den Klammern den Wert unter `min: 3` angeben. Die darauf folgende Nachricht dient hierbei als Felermeldung, die der Benutzer im Formular bei Falscheingabe angezeigt bekommt. `{{ limit }}` wird bei der Ausgabe durch die Mindestlänge ersetzt.

Weiters kann auch die Maximallänge validiert werden:
```php
#[Assert\Length(max: 80, maxMessage: 'Der Name kann nicht länger als {{ limit }} Zeichen lang sein.')]
```

### Validierung des Datetimes
Ein Property des Typs Datetime kann man beispielsweise darauf überprüfen, dass der eingegebene Tag in der Verangenheit liegt:
```php
#[Assert\LessThan("today", message: "Der Geburtstag muss früher als heute sein.")]
private ?\DateTimeInterface $birthday = null;
```

### Validierung einer Nummer
```php
#[Assert\Positive(message: 'Das Erscheinungsjahr muss eine positive ganze Zahl sein')]
private ?int $release_year = null;
```

### Validierung auf Vorhandensein
#### Validierung der Nummer auf Vorhandensein
```php
#[Assert\NotNull(message: 'Bitte geben Sie ein Erscheinungsjahr ein')]
```

#### Vorhandensein eines Strings auf Vorhandensein
```php
#[Assert\NotBlank(message: 'Bitte geben Sie einen Namen ein')]
```
