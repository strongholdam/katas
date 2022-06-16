# Meaningful names

## Use intention revealing names

```java
    int d; // elapsed time in days

    int elapsedTimeInDays;
```

## Avoid disinformation


## Beware of using names which vary in small ways

```java
     XYZControllerForEfficientHandlingOfStrings abd XYZControllerForEfficientStorageOfStrings
```

## Use pronounceable names

```java
    private Date $modymdhms;

    private Date $modificationTimestamp;
```

## Use searchable names, avoid mental mapping.

```java
    for (int j = 0; j < 34{;} j++) {
        s += (t[j] * 4) / 5;
    }
```

```java
    int realDaysPerIdealDay = 4;
    const int NUMBER_OF_TASKS = 3;
    const int WORK_DAYS_PER_WEEK = 5;
    int sum = 0;
    for (int = 0; j < NUMBER_OF_TASKS; j++) {
        int realTaskDays = taskEstimate[j] * realDaysPerIdealDay;
        int realTaskWeeks = (realdays / WORK_DAYS_PER_WEEK);
        sum += realTaskWeeks;
    }
```

## Class names

Classes and objects should have noun or noun phrase names like Customer, WikiPage, Account, and AddressParser. Avoid words like Manager, Processor, Data, or Info in the name of a class. A class name
should not be a verb.

## Method Names

Methods should have verb or verb phrase names like postPayment, deletePage, or save.

## Solution Domain Names

Queue

# Dani

Utiliza el contexto.

```php
    SageService::getSageValues();
    SageService::getValues();

    // ??
    Sage\State::PENDING;
    if(State::PENDING = $sage->getState()){
    }

    Loan->getState();
    Loan->isStatePending();
```

```java
     XYZController\Efficient\Strings\Handler
     XYZController\Efficient\Strings\Storage
```

Sé consistente.

```php
    // se realizan operaciones y devuelve el resultado.
    Service::calculate();

    // se realizan operaciones y actualiza los valores.
    Service::update();

    // recupera información de la entidad, colaboradores directos.
    Service::get();

    // busca un elemento colaborador.
    Service::find();
```

Explicito, mejor que implícito.

```php
    Service::get($date);

    Service::getOrdinaryInterestAt($date);
```
