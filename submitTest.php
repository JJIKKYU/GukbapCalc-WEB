<?$conn = mysqli_connect(
  'localhost',
  'jjikkyu',
  'wjdwlsrbs9^',
  'jjikkyu');

	mysqli_query($conn, "set session character_set_connection=utf8;");
	mysqli_query($conn, "set session character_set_results=utf8;");
	mysqli_query($conn, "set session character_set_client=utf8;");
	?>

<html>
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
    <form name="comment_form" id="jjikkyu" action="" method="post">
    <input type="hidden" name="score" id="score" value="123123">
      <input type="hidden" name="name" id="name" value="123123">
        <a  class="primary-btn primary_btn" id="submit_POST" onclick="formSubmit();">submit</a>
</form>
    </body>
    <script src="js/jquery-2.1.3.min.js"></script>

    <script type="text/javascript">
function formSubmit() {
  var params = jQuery("#jjikkyu").serialize();
    jQuery.ajax({
        url: 'jjikkyu_comment_process.php',
        type: 'POST',
        data: params,
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        dataType: 'html',
        success: function(data) {
        //   document.getElementById('description_form').innerHTML='';
        //   document.getElementById('description_form').value = '';
        //   list();
        console.log("ss");
          // swal("스크롤을 위로 올린 뒤에, 오른쪽 상단의 친구추가 버튼을 눌러서 이벤트에 응모하세요!");
        }
  });
}
</script>
</html>



