<?php
    include "connect.php";


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userInput = trim($_POST['userInput']);
    
        $searchTerm = "%" . $userInput . "%";
        // Query the database for a matching response
        $stmt = $conn->prepare("SELECT reply FROM chat_responses WHERE text LIKE ?");
        $stmt->bind_param("s", $searchTerm);
        $stmt->execute();
        $stmt->bind_result($reply);
        $stmt->fetch();
    
        if ($reply) {
            echo $reply;
        } else {
            echo "I'm not sure I can help with that.";
        }
    
        $stmt->close();
    }
    
    $conn->close();
    

?>