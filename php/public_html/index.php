<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>LAMP Docker Enviroment</title>

  <style>
    html, body{
      padding: 0; 
      margin: 0;
      font-family: sans-serif;
      background-color: #f1f1f1;
    }
    header{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 300px;
      background: rgb(233,233,233);
      background: radial-gradient(circle, rgba(233,233,233,1) 0%, rgba(185,185,185,1) 100%);
    }
    header h1{
      font-size: 3em;
      padding: 0 10px;
      margin: 0;
      color: #222;
      text-shadow: 1px 1px 2px #000;
    }
    header p{
      font-weight: bolder;
      font-size: 14px;
      text-transform: uppercase;
      color: #222;
      text-decoration: underline;
    }
    ul{
      display: block;
      margin: 0 auto;
    }
    ul li{
      display: inline-block;
      background-color: #333;
      color: #fff;
      margin: 2px;
      padding: 2px;
    }
    .code{
      background-color: #090b2b;
      color: #faffa2;
      margin: 0;
      padding: 0;
      padding: 2px 0 2px 10px;
    }
  </style>
<body>
  <header>
    <h1>Php Docker Enviroment</h1>
    <p>(L) | (A) Apache | (M) MySql | (P) Php - Docker default Setup</p>
  </header>
  <section style="max-width:80%;margin: 0 auto; padding-bottom:30px;">
    <p><strong>Defaults:</strong></p>
    <ul>
        <li>PHP 7.4</li>
        <li>PDO Enabled</li>
        <li>Apache</li>
        <li>MySql 8.0</li>
    </ul>
    <p>PHP:</p><?php
    echo "<p class=\"code\">PHP Version: ".PHP_VERSION."</p>";
    echo "<p class=\"code\">PHP OS: ".PHP_OS."</p>";
    echo "<p class=\"code\">Script Path: ".__DIR__."</p>";
    echo "<p class=\"code\">file_uploads: ".ini_get('file_uploads')."</p>";
    echo "<p class=\"code\">upload_max_filesize: ".ini_get('upload_max_filesize')."</p>";
    echo "<p class=\"code\">post_max_size: ".ini_get('post_max_size')."</p>";
    echo "<p class=\"code\">max_execution_time: ".ini_get('max_execution_time')."</p>";
    ?>
    <p>Checking PDO Extension:</p>
    <?php
    echo '<p class="code">';
    $pdo =  (extension_loaded('pdo')) ? true : false;
    echo ($pdo) ? "PDO Enabled!" : "PDO Disabled!";
    echo "</p>\n";
    ?>
    <p>Testing PDO Connection...</p>
    <p class="code"><?php
    $servername = 'db-server';
    $username = "databaseuser";
    $password = "databasepass";
    $dbname = "application-database";
    if($pdo){
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully with 'PDO'!";
        $conn=null;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }?></p>
    <p>Testing mysqli Connection</p>
    <p class="code"><?php
    mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
    try {
      $conn = new mysqli($servername, $username, $password);
      echo "Connected successfully with 'mysqli'!";
      mysqli_close($conn);
    } catch (mysqli_sql_exception $e) {
        echo "<strong>Connection refused: </strong><br />".$e;
    }?></p>
    <p>Apache:</p>
    <p class="code">Apache Version: <?php echo apache_get_version() ?>
  </section>
</body>
</html>
