<?php
    namespace App\GraphQL\Types;

    use App\Articles;
    use GraphQL\Type\Definition\Type;
    use Rebing\GraphQL\Support\Type as GraphQLType;

    class ArticleType extends GraphQLType
    {
        protected $attribute = [
            'name'=>"Article",
            "description"=>"Details sur un article",
            "model"=>Articles::class
        ];

        public function fields():array
        {
            return [
                'id'=>[
                    'type'=>Type::nonNull(Type::int()),
                    'description'=>"Id de l'article"
                ],
                'nom'=>[
                    'type'=>Type::nonNull(Type::string()),
                    'description'=>"Nom de l'article",
                ],
                'etat'=>[
                    'type'=>Type::nonNull(Type::string()),
                    'description'=>"l'Etat de l'article"
                ],
                'photo'=>[
                    'type'=>Type::nonNull(Type::string()),
                    'description'=>"L'image de l'article",
                ],
                'prix'=>[
                    'type'=>Type::nonNull(Type::float()),
                    'description'=>"prix de l'article"
                ],
                'duree'=>[
                    'type'=>Type::nonNull(Type::int()),
                    'description'=>"Durée de l'article",
                ],
                'types_id'=>[
                    'type'=>Type::nonNull(Type::int()),
                    'description'=>"Catégorie de l'article",
                ],
                'user_id'=>[
                    'type'=>Type::nonNull(Type::int()),
                    'description'=>"Proprio de l'article",
                ],
                'priorite_id'=>[
                    'type'=>Type::nonNull(Type::int()),
                    'description'=>"priorité de l'article",
                ],
                'description'=>[
                    'type'=>Type::nonNull(Type::string()),
                    'description'=>"La description de l'article",
                ],
                'is_active'=>[
                    'type'=>Type::nonNull(Type::boolean()),
                    'description'=>"l'etat de l'article",
                ],
                'commune_id'=>[
                    'type'=>Type::nonNull(Type::int()),
                    'description'=>"la commune du vendeur",
                ],
                'created at'=>[
                    'type'=>Type::nonNull(Type::string()),
                    'description'=>"Date de création",
                ],
                'updated_at'=>[
                    'type'=>Type::nonNull(Type::string()),
                    'description'=>"Date de création",
                ],
            ];
        }
    }
    