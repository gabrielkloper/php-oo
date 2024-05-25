<?php

    interface Crud {
        public function create();
        public function read($id);
        public function update($data, $id);
        public function delete($id);
    }

    class Noticias implements Crud {
        private static $noticias = array(1 => "Noticia 1",2=>"Noticia 2");
        public function __construct() {}
        //Implementando o metodo de criar no CRUD
        public function create(){
            $nova_noticia = func_get_args();
            $ultima_chave = key(self::$noticias);
            self::$noticias[$ultima_chave+1] = $nova_noticia[0];
            return $ultima_chave + 1;
            }
        /*Metodos para ler (ler todos os dados e ler por chave)*/
        public function readAll(){
            return self::$noticias;
        }

        public function readByKey($key){
            if (isset(self::$noticias[$key])){
                return self::$noticias[$key];
            }else{
                echo("A notícia solicitada não existe.");
            }
        }

        public function read($id)
        {
            return $this->readByKey($id);
        }

        public function update($data, $id)
        {
            if (array_key_exists($id, self::$noticias)){
                self::$noticias[$id] = $data;
                return true;
            } else{
                return false;
            }

        }

        public function delete($id){
            if (array_key_exists($id, self::$noticias)) {
                unset(self::$noticias[$id]);
                return true;
            } else {
                return false;
            }
        }

    }