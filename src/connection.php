<?php
    include "../vendor/autoload.php";
    use Kreait\Firebase\Factory;

    class Connection{
        private $database;

        //Quando o objeto é criado já é feita a conexão com o Realtime Database usando a chave
        public function __construct(){
            $factory = (new Factory())
                            ->withServiceAccount("../firebase-key.json")
                            ->withDatabaseUri("https://controle-de-notebooks-default-rtdb.firebaseio.com/");

            $this->database = $factory->createDatabase();
        }

        public function getNotebook(){
            switch(func_num_args()){
                case 0: //Pega todos os notebooks
                    return $this->database->getReference("notebooks")->getValue();
                case 1: //Pega um notebook específico
                    return $this->database->getReference("notebooks/" . func_get_arg(0))->getValue();
                    break;
            }
        }

        /* Com o outro método o campo ID nem é mais necessário
        public function insertNotebook($notebook){
            $list = $this->getNotebook();
            if($list != null)
                $this->database->getReference("notebooks/" . count($list))->set($notebook);
            else
                $this->database->getReference("notebooks/0")->set($notebook);
        }*/

        public function insertNotebook($notebook, $key){
            $this->database->getReference("notebooks/" . $key)->set($notebook);
        }

        public function deleteNotebook($key){
            $this->database->getReference("notebooks/" . $key)->remove();
        }
    }
?>