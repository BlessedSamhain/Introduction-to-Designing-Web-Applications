<?php

class SecurityController extends AppController {
    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        parent::__construct();
        $this->userRepository = $userRepository;
    }

    public function login() {
        $messages = [];

        if ($this->isPost()) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->userRepository->getUserByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                // User authenticated successfully
                // Perform any necessary actions

                // For example, set user session or redirect to a dashboard
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header('Location: dashboard.php');
                exit();
            } else {
                // Invalid credentials
                $messages[] = 'Invalid email or password';
            }
        }

        $this->render('login', ['messages' => $messages]);
    }

    public function register() {
        $messages = [];

        if ($this->isPost()) {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $password = $_POST['password'];

            // Check if email or login already exists in the database
            $existingUser = $this->userRepository->getUserByEmail($email);

            if ($existingUser) {
                // User with the provided email already exists
                $messages[] = 'User with this email already exists';
            } else {
                // Create a new User instance
                $user = new User(null, $firstName, $lastName, $email, $login, password_hash($password, PASSWORD_BCRYPT));

                // Save the user to the database
                $newUserId = $this->userRepository->createUser($user);

                // User registration successful
                $messages[] = 'User registered successfully';
            }
        }

        $this->render('register', ['messages' => $messages]);
    }

    public function changePassword() {
        $messages = [];

        if ($this->isPost()) {
            $userId = $_POST['user_id'];
            $newPassword = $_POST['new_password'];

            // Update the user's password in the database
            $this->userRepository->updateUserPassword($userId, password_hash($newPassword, PASSWORD_BCRYPT));

            // Password change successful
            $messages[] = 'Password changed successfully';
        }

        $this->render('change_password', ['messages' => $messages]);
    }
}

?>
