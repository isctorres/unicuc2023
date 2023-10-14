<?php
class Conexion{
    private $DBType = 'mysqli';
    private $DBServer = '127.0.0.1'; // server name or IP address
    private $DBUser = 'admincuc';
    private $DBPass = '1234';
    private $DBName = 'unicuc';

    public function __construct(){}
    
    public function conectar(){
        $con = adoNewConnection($this->DBType);
        $con->debug = true;
        $con->connect($this->DBServer,$this->DBUser,$this->DBPass,$this->DBName);
        return $con;
    }
}


/*CREATE TABLE tblMensajes(
    idMensaje int auto_increment,
    emailMensaje varchar(40),
    telMensaje varchar(25),
    comentMensaje text,
    CONSTRAINT pk_msj PRIMARY KEY(idMensaje)
)*/
?>

