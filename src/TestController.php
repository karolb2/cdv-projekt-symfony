<?php

declare(strict_types=1);

#[Attribute]
class ExampleAttribute {

    protected string $value;

    public function __construct(string $value) {
        $this ->value = $value;
    }

    public function getValue() : string {
        return $this ->value;
    }

    function foo(?string $a=null, ?string $b=null, ?string $c=null) : void
    {

    }

}
