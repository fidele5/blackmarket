<?php
    namespace App\Repositories;
    use App\Articles;

    class ArticlesRepositorie{
        protected $articles;

        public function __construct(Articles $articles) {
            $this->articles = $articles;
        }

        private function save(Articles $articles, Array $inputs)
        {
            $articles->nom = $inputs["nom"];
            $articles->etat = "disponible";
            $articles->photo = $inputs['imageName'];
            $articles->prix = $inputs["prix"];
            $articles->duree  = 15;
            $articles->type_id  = $inputs["type_id"];
            $articles->user_id = $inputs["user_id"];
            $articles->priorite_id = 5;
            $articles->description = $inputs["description"];
            $articles->is_active = true;
            $articles->commune_id = $inputs["commune_id"];

            $articles->save();
        }

        public  function getPaginate($number){
            return $this->articles->paginate($number);
        }

        public function store(Array $inputs){
            $article = new $this->articles;
            $this->save($article, $inputs);

            return $article;
        }

        public function getByid($id){
            return $this->articles->findOrFail($id);
        }

        public function update($id, Array $inputs){
            $this->save($this->getByid($id), $inputs);
        }

        public function destroy($id){
            $this->getByid($id)->delete();
        }
        
    }