# Functions

## Small

- Usually less than 20.
- Never more than 100.

## Do one thing

- Should bo one thing.
- Should do it well.

## One level of abstraction

- Out function are all the same level of abstraction.

## The stepdown rule

- Read the function as a recipe

```java
    public function update(Deal $deal)
    {
        $this->updateSigningTime($deal);

        $this->updateInitialMaturityDate($deal);
        $this->updateInitialLiquidity($deal);
        
        $this->updateTae($deal);
        $this->updateAnnualCommitmentFee($deal);
        $this->updateOpeningFeeAmount($deal);
        $this->updateBrokerFeeAmount($deal);
        $this->updateLiabilityAmount($deal);
        $this->updateSuppliedAmount($deal);
        $this->updateDebtPrevisionAmount($deal);
        $this->updateOtherConceptsAmount($deal);

        // ..

        $this->entityManager->persist($deal);

        if ($flush) {
            $this->entityManager->flush();
        }
    }
```

## Descriptive names

// ..

## Function arguments

- monadic
- dyadic
- triads ( are the daemon )
- flags arguments

```php
    // EuriborCommand
    // ¿Qué hace ese parámetro?
    // ¿Qué son $dateFrom y $dateTo?
    list($dateFrom, $dateTo) = $this->calculateDateInTimestampMilliseconds(true);

    // vs

    $from = $this->getStartTimestamp();
    $to = $this->getEndTimestamp();
```

## No side effects

- avoid more entity manager persist

## Command Query Separation

- do something or answer something
