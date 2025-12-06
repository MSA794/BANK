<?php
// register.php - receives POST request and returns JSON
header('Content-Type: application/json; charset=utf-8');

// allow CORS for testing (remove or restrict in production)
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Methods: POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
}
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

require_once 'db.php';

// get input - support JSON or form-data
$input = null;
$contentType = isset($_SERVER['CONTENT_TYPE']) ? trim($_SERVER['CONTENT_TYPE']) : '';

if (strpos($contentType, 'application/json') !== false) {
    $raw = file_get_contents('php://input');
    $input = json_decode($raw, true);
} else {
    // fallback to regular POST
    $input = $_POST;
}

$fullname = isset($input['fullname']) ? trim($input['fullname']) : '';
$email = isset($input['email']) ? trim($input['email']) : '';
$password = isset($input['password']) ? $input['password'] : '';

// basic validation
if (empty($fullname) || empty($email) || empty($password)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide fullname, email and password.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

// check existing email
$stmt = $mysqli->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    http_response_code(409);
    echo json_encode(['success' => false, 'message' => 'Email already registered.']);
    exit;
}
$stmt->close();

// hash password
$hash = password_hash($password, PASSWORD_DEFAULT);

// insert user
$insert = $mysqli->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
$insert->bind_param('sss', $fullname, $email, $hash);
if ($insert->execute()) {
    echo json_encode(['success' => true, 'message' => 'Account created successfully.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server error while creating account.']);
}
?>