<?php
// Clase Usuario
class Usuario {
    private $id;
    private $usuario;
    private $password;
    private $nombre;
    private $email;
    private $edad;

    // Métodos getter
    public function getId() {
        return $this->id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getEdad() {
        return $this->edad;
    }

    // Métodos setter

    public function setUsuario($usuario) {
        return $this->usuario = $usuario;
    }

    public function setPassword($password) {
        return $this->password = $password;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setEdad($edad) {
        return $this->edad = $edad;
    }
}

// // Crear un nuevo Usuario
// $usuario = new Usuario(1, 'John Doe', 'johndoe@example.com');

?>