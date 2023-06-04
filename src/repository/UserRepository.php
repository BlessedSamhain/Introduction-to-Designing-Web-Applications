<?php

class UserRepository {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getUserByEmail($email, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
        $stmt->execute([$email, $password]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser(User $user) {
        $stmt = $this->pdo->prepare("INSERT INTO user (first_name, last_name, email, login, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $user->getFirstName(),
            $user->getLastName(),
            $user->getEmail(),
            $user->getLogin(),
            $user->getPassword()
        ]);

        return $this->pdo->lastInsertId();
    }

    public function updateUserPassword($userId, $password) {
        $stmt = $this->pdo->prepare("UPDATE user SET password = ? WHERE id = ?");
        $stmt->execute([$password, $userId]);
    }
}
