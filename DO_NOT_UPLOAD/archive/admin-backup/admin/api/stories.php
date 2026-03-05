<?php
require_once '../config.php';

$method = $_SERVER['REQUEST_METHOD'];
$pdo = getDBConnection();

switch($method) {
    case 'GET':
        // Get all stories
        try {
            $stmt = $pdo->prepare("SELECT * FROM stories ORDER BY created_date DESC");
            $stmt->execute();
            $stories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(['success' => true, 'data' => $stories]);
        } catch(PDOException $e) {
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
        break;
        
    case 'POST':
        // Create new story
        try {
            $data = json_decode(file_get_contents('php://input'), true);
            
            $stmt = $pdo->prepare("INSERT INTO stories (title, description, author, image_url, visible) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([
                $data['title'],
                $data['description'],
                $data['author'],
                $data['image_url'] ?? '',
                $data['visible'] ? 1 : 0
            ]);
            
            $storyId = $pdo->lastInsertId();
            echo json_encode(['success' => true, 'id' => $storyId, 'message' => 'Story created successfully']);
        } catch(PDOException $e) {
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
        break;
        
    case 'PUT':
        // Update story
        try {
            $data = json_decode(file_get_contents('php://input'), true);
            $id = $data['id'];
            
            $stmt = $pdo->prepare("UPDATE stories SET title = ?, description = ?, author = ?, image_url = ?, visible = ? WHERE id = ?");
            $stmt->execute([
                $data['title'],
                $data['description'],
                $data['author'],
                $data['image_url'] ?? '',
                $data['visible'] ? 1 : 0,
                $id
            ]);
            
            echo json_encode(['success' => true, 'message' => 'Story updated successfully']);
        } catch(PDOException $e) {
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
        break;
        
    case 'DELETE':
        // Delete story
        try {
            $id = $_GET['id'] ?? null;
            if (!$id) {
                throw new Exception('Story ID is required');
            }
            
            $stmt = $pdo->prepare("DELETE FROM stories WHERE id = ?");
            $stmt->execute([$id]);
            
            echo json_encode(['success' => true, 'message' => 'Story deleted successfully']);
        } catch(Exception $e) {
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
        break;
        
    default:
        echo json_encode(['success' => false, 'error' => 'Method not allowed']);
        break;
}
?> 