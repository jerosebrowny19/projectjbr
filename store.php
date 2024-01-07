<include<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Upload Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Upload Form</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            
            <label for="name">Title:</label>
            <input type="text" name="name" >
          
          
          
            <label for="images" class="drop-container" id="dropcontainer">
            <span class="drop-title">Drop files here</span>
  or
            <input type="file" name="file" accept=".pdf, .doc, .docx, .txt" required>
          </label>
<br><br>


            <button type="submit" name="submit" >Upload Data</button>
</form>

    </div>

    <footer>
<form action="feedback.php">
<button value="submit" class="btn" onclick="redirectToPage()">FEEDBACK</button>
</form>
</footer>
</body>
<style>

footer {
            background-color: #383838;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        } 
.btn{
  background-color:white; 
  color:#111;
  border: 0;
  padding:10px;
  width:20%;
  
}

.file{
padding:20px;
font-size:200px;
width:95%;
border:2px;
border-style:dashed;
border-color:red;

}

.drop-container {
  position: relative;
  display: flex;
  gap: 10px;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 200px;
  padding: 20px;
  border-radius: 10px;
  border: 2px dashed #555;
  color: #444;
  cursor: pointer;
  transition: background .2s ease-in-out, border .2s ease-in-out;
}

.drop-container:hover {
  background: #eee;
  border-color: #111;
}

.drop-container:hover .drop-title {
  color: #222;
}

.drop-title {
  color: #444;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  transition: color .2s ease-in-out;
}

</style>
<script>
    function redirectToPage() {
      // Replace 'target-page.html' with the actual URL of the page you want to redirect to
      window.location.href = 'feedback.html';
    }

    
  </script>
</html>

