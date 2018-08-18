<?php
$titleErr = $authorErr = $contentErr =  "";
$title = $author = $content =  "";


    if ($_SERVER ["REQUEST_METHOD"] == "POST") {         
        if (empty($_POST["title"])){  //this if statement checks wheather required fields ar filled in.
            $titleErr = "Title is required";
        } else{
            $title=isset($_POST["title"])? $_POST['title']:'';
        }

        if (empty($_POST ["author"])){
            $authorErr = "Author is required";
        } else {
            $author=isset($_POST['author'])? $_POST['author']:'';
        }

        if (empty($_POST["content"])){
            $contentErr = "Content is required";
        } else{
            $content=isset($_POST['content'])? $_POST['content']:'';
        } 
    }

    if( strlen($title && $author && $content) !==0) {    

        $conn = new mysqli('localhost','root','root','blog'); // creating connection
        if ($conn->connect_error) { //checking connection 
            die("Connection failed: " . $conn->connect_error); 
        }      
        
        //inserting data into "blogpost" table and confirmation/error about posting
        $sql = "INSERT INTO blogpost (title, author, content) 
        VALUES ('$title', '$author', '$content') ";

        if ($conn->query($sql)=== TRUE) {
            echo "Thank you for a blogpost";
        }else{
            echo "Error while posting". $sql . "<br>" . $conn->error;
        }
        
        // after insert, connection closing.
        $conn-> close();
    }

    
?>



<!doctype html>
<html>

<head>
  <title>Blog</title>
</head>

<body>    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <p>Title: <input type="text" name="title" value="<?php echo $title ?>"/> *
          <span class="error"><?php echo $titleErr;?></span>
        </p>  <!--span prints out the error if needed via php script-->
        
        <p>Author: <input type="text" name="author" value="<?php echo $author ?>" /> *
          <span class="error"><?php echo $authorErr;?></span>  
        </p> 

        <p>Content: <textarea name="content"><?php echo $content ?></textarea> *
          <span class="error"><?php echo $contentErr;?></span>   
        </p>

        <p><input type="submit" value="Submit"></p>
    </form>
</body>

</html>