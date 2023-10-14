<?php
    class MensajesModel{

        private $idMensaje;
        private $emailMensaje;
        private $telMensaje;
        private $comenMensaje;

        public function __construct(){}

        public function INSERTAR($con){

            $data = array();
            $data['emailMensaje']  = $_POST['txtEmail'];
            $data['telMensaje']    = $_POST['txtTelefono'];
            $data['comentMensaje'] = $_POST['txtComentarios'];
            $con->autoExecute('tblMensajes',$data,'INSERT');
        }
        public function ACTUALIZAR(){}
        public function ELIMINAR(){}
        public function GETMENSAJES(){}
        
    }
?>