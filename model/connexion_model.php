<?php
class UserModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getUserByEmail($email) {
        $stmt = $this->db->prepare('SELECT * FROM user WHERE user_mail = :email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function validateUser($email, $password) {
        $user = $this->getUserByEmail($email);
        if ($user && password_verify($password, $user['user_mdp'])) {
            return $user;
        }
        return false;
    }
}
?>
