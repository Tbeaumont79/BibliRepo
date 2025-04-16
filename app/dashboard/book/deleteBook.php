<?php
if (isset($_POST['delete']) && isset($_POST['book_id'])) {
    $books = [];
    deleteBook($connect);
    $books = loadBook($connect);
  }
  
  
  function deleteBook($connect)
  {
    $id = intval($_POST['book_id']);
    $stmt = $connect->prepare("DELETE FROM book WHERE id = ?");
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();
    if (!$result) {
      throw new Exception("Error deleting book in databases: " . $connect->error);
    }
    $stmt->close();
  }
?>