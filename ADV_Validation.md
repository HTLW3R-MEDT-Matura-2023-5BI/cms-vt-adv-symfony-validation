# ADV | Symfony - Validation
## Skillset
- https://my.skilldisplay.eu/en/skillset/122
- https://github.com/user-story-based-exercises/cms-vt-adv-symfony-validation

## Validierung
Die Validierung von Formularen ist ein unverzichtbarer Schritt sowohl aus der Perspektive des Benutzers als auch des Betreibers einer Website oder Anwendung. Für den Benutzer trägt die Validierung dazu bei, Fehler oder Unvollständigkeiten in den eingegebenen Daten schnell zu erkennen, wodurch eine bessere Benutzererfahrung und erhöhte Zufriedenheit entsteht. Für den Betreiber ermöglicht die Validierung von Formularen die Sicherstellung der Integrität und Qualität der gesammelten Daten. Dies minimiert die Wahrscheinlichkeit von Fehlern oder Missverständnissen, die durch falsche oder unvollständige Daten entstehen können. Gleichzeitig trägt die Validierung zur Verbesserung der Sicherheit bei, indem sie das Risiko von böswilligen Angriffen, wie beispielsweise SQL-Injection, verringert. Insgesamt stellt die Validierung von Formularen sicher, dass sowohl Benutzer als auch Betreiber von einem effizienten und sicheren Datenaustausch profitieren.

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

## Validierung via Custom Validator
Möchte man Felder speziell validieren für die es keine bereitgestellte Klasse gibt, ist es möglich, einen eigenen Validator zu implementieren.

1. Erstellen der Validator Klasse, zB: `Gender.php` unter `src\Validator`
2. Erben von der Symfony `Constraint.php` Klasse
```php
use Symfony\Component\Validator\Constraint;

class Gender extends Constraint {
...
}
```
3. Um den erstellten Validator auch in anderen Klassen verwenden zu können, muss man folgendes Attribut, über die eben erstellte Klasse schreiben
```php
use Symfony\Component\Validator\Constraint;

#[\Attribute]
class Gender extends Constraint {
...
}
```
4. Hinzufügen einer Fehlermeldung
```php
use Symfony\Component\Validator\Constraint;

#[\Attribute]
class Gender extends Constraint
{
    public string $message = 'Der Wert: "{{ value }}" ist ungültig.';
}
```
5. Erstellen des eigentlichen Validators.
```php
use Symfony\Component\Validator\ConstraintValidator;

class GenderValidator extends ConstraintValidator
{
...
}
```
Symfony sucht beim Validieren automatisch nach einer Klasse, welche gleich wie die eben erstellte Klasse heißt, jedoch mit "Validator" am Ende. Beispielsweise: `GenderValidator.php`

6. Validieren
```php
public function validate($value, Constraint $constraint)
    {

        if (null === $value || '' === $value) {
            return;
        }

        // Check if the value is one of the allowed options
        $allowedOptions = ['m', 'f'];
        if (!in_array($value, $allowedOptions)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
```
Symfony verwendet zum Validieren die Funktion `validate()` aus dem eben erstellen Validator.

7. Verwenden des Custom Validators bei Properties
```php
#[Gender]
private ?string $gender = null;
