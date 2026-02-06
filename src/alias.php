<?php

$aliases = [
    MB\Support\Arr::class => Illuminate\Support\Arr::class,
    MB\Support\Collection::class => Illuminate\Support\Collection::class,
    MB\Support\Enumerable::class => Illuminate\Support\Enumerable::class,
    MB\Support\HigherOrderCollectionProxy::class => Illuminate\Support\HigherOrderCollectionProxy::class,
    MB\Support\LazyCollection::class => Illuminate\Support\LazyCollection::class,
    MB\Support\Traits\EnumeratesValues::class => Illuminate\Support\Traits\EnumeratesValues::class,
];

# echo "\n\n-- Aliasing....\n---------------------------------------------\n\n";

foreach ($aliases as $mb => $illuminate) {
    if (! class_exists($illuminate) && ! interface_exists($illuminate) && ! trait_exists($illuminate)) {
        # echo "Aliasing {$tighten} to {$illuminate}.\n";
        class_alias($mb, $illuminate);
    }
}
