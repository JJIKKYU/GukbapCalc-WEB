<?php
$conn = mysqli_connect(
  'localhost',
  'jjikkyu',
  'wjdwlsrbs9^',
  'jjikkyu');

  mysqli_query($conn, "set session character_set_connection=utf8mb4;");
	mysqli_query($conn, "set session character_set_results=utf8mb4;");
	mysqli_query($conn, "set session character_set_client=utf8mb4;");
$sql = "
  INSERT INTO rank_db
    (name, score)
    VALUES(
      '{$_POST['name']}',
      '{$_POST['score']}'
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo 'fail';
  error_log(mysqli_error($conn));
} else {
  header('Location: /9567/jjikkyu.php');
}
?>
<!-- //'{$_POST['name']}' -->