<?php

namespace App\GraphQL\Queries;

final class Hello
{
    public function __invoke($_, array $args)
    {
      // Return the name or ‘World is the name is
      // not set
      return ($args['name'] ?? 'World') . '! ';
    }
}
