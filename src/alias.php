<?php

$aliases = [
    MB\Support\Arr::class => "\\Illuminate\\Support\\Arr",
    MB\Support\Collection::class => "\\Illuminate\\Support\\Collection",
    MB\Support\Enumerable::class => "\\Illuminate\\Support\\Enumerable",
    MB\Support\HigherOrderCollectionProxy::class => "\\Illuminate\\Support\\HigherOrderCollectionProxy",
    MB\Support\LazyCollection::class => "\\Illuminate\\Support\\LazyCollection",
    MB\Support\Traits\EnumeratesValues::class => "\\Illuminate\\Support\\Traits\\EnumeratesValues",
    MB\Support\Traits\Conditionable::class => "\\Illuminate\\Support\\Traits\\Conditionable",
];

foreach ($aliases as $mb => $illuminate) {
    if (!class_exists($illuminate) && !interface_exists($illuminate) && !trait_exists($illuminate)) {
        class_alias($mb, $illuminate);
    }
}
