<?php
namespace App\GraphQL\Queries;

use App\Articles;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class ArticleQuery extends Query{
    protected $attributes = [
        'name'=>"article"
    ];

    public function type(): Type
    {
        return GraphQL::type('Article');
    }

    public function resolve($root, $args){
        return Articles::findOrFail($args['id']);
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ],
        ];
    }
}