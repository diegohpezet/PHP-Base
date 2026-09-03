<?php
require_once __DIR__ . '/../../config/bootstrap.php';

// Paso clave #1: Validar tipo de solicitud ----------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {  // Si la solicitud no es POST, volves al register
  header('Location: /src/views/auth/login.php');
  exit;
}

// Paso clave #2: Tomar datos -----------------------------------
$data = [
  'email'           => trim($_POST['email'] ?? ''), // trim(str) saca los espacios al inicio y al final
  'password'        => $_POST['password'] ?? '',
];

try {
// Paso 3: Validar que el usuario existe en la DB

// Paso 4: Verificar la contraseña

// Paso 5: Dar acceso
} catch (PDOException $e) {
  exit;
}