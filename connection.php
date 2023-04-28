<?php
    include "vendor/autoload.php";
    //include "notebook.php";
    use Kreait\Firebase\Factory;
    //use Kreait\Firebase\ServiceAccount;

    class Connection{
        private $database;

        public function __construct(){
            $factory = (new Factory())
                            ->withServiceAccount("firebase-key.json")
                            ->withDatabaseUri("https://controle-de-notebooks-default-rtdb.firebaseio.com/");

            $this->database = $factory->createDatabase();
        }

        public function createNotebook(){

            $notebook = new Notebook();

            switch(func_num_args()){
                case 0:
                    $notebook->setMarca($this->database->getReference("notebooks/0")->getValue()["marca"]);
                    return $notebook;
                case 1:
                    $notebook->setMarca($this->database->getReference("notebooks/" . func_get_arg(0))->getValue()["marca"]);
                    return $notebook;
                    break;
            }
        }

        public function insertNotebook($notebook){
            $this->database->getReference("notebooks/" . count($this->allNotebooks()))->set($notebook);
        }

        public function allNotebooks(){
            return $this->database->getReference("notebooks")->getSnapshot()->getValue();
        }
    }
?>