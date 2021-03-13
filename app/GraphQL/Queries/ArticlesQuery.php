<?php
    namespace App\GraphQL\Queries;

    use App\Articles;
    use GraphQL;
    use GraphQL\Type\Definition\Type;
    use Rebing\GraphQL\Support\Query;

    class ArticlesQuery extends Query{
        protected $attributes = [
            'name'=>"articles"
        ];

        public function type(): Type
        {
            return Type::listOf(GraphQL::type('Article'));
        }

        public function resolve($root, $args)
        {
            return Articles::all();
        }
    }