<!-- <script>
function list() {
    $.ajax({
      type: 'post',
      url: 'list.php',
      dataType: 'html',
      success: function(data) {
        $("#comment_container").html(data);
      }
    });
}
</script> -->
<colgroup>
  <col width="20%">
  <col widtdh="60%">
  <col width="20%" />
</colgroup>
<table align=center id="rankTable">

<?
 $rec_num = 10;
 if(empty($_GET['start'])){
   $page_n = 0;
 }else{
   $page_n = $_GET['start']*5;
 }
// mysql connect는 mysql를 php에서 연결하는 방법이며, or로 실패했을 경우를 넘겨줄수 있다.
 $connect = mysqli_connect(
  'localhost',
  'jjikkyu',
  'wjdwlsrbs9^',
  'jjikkyu');

 $conn = mysqli_connect(
   'localhost',
   'jjikkyu',
   'wjdwlsrbs9^',
   'jjikkyu');

 mysqli_query($conn, "set session character_set_connection=utf8mb4;");
 mysqli_query($conn, "set session character_set_results=utf8mb4;");
 mysqli_query($conn, "set session character_set_client=utf8mb4;");


 //mysql에서는 db를 반드시 선택해야한다.
 mysqli_select_db($conn, "jjikkyu") or die("can't find db");
 //폰트에 대한 초기 세팅 모두 euckr로 바꿔준다.
 mysqli_query($conn ,"set names utf8mb4");
 // DB에서 가져올 때 하는 명령어는 select이다.
 // Select 필드명(테이블에 있는 모든 필드를 가져올때는*) from 테이블명

 $query = "select * from rank_db order by score desc";
 $result = mysqli_query($conn, $query);
//  $data_num = mysqli_fetch_array($result);
 // $total = count($data_num);
//  $result_2 = mysqli_query($conn, $query);
//  $total = mysqli_num_rows($result_2);
//desc는 올림차순 asc는 내림차순
//limit [시작번호],5 시작번호부터 몇개 까지만 보여주겠다.


 // 쿼리하나를 생성해서 mysql를 통해 해당 db에 호출해주는 부분이다.
 // insert의 경우에는 넣는 것으로 끝나지만, select의 경우에는 가져온 값을 뿌려줘야 하므로
 // 리턴값을 활용해야 한다.
//  $result = mysqli_query($connect, $query);

 //db, table안에 있는 제일 첫번째 배열을 가져온다.
 // row는 record를 의미한다. field는 col에 있다.
//  mysqli_fetch_array($result);

 while($ary = mysqli_fetch_array($result)){
 //fetch_row 함수는 첫번째 행을 전체 다 가져오는 함수이다.
 // row와 array의 차이점은 array는 필드값으로도 값을 가져올 수 있다. 또한 성능면에서도 array가 우수하다.
 // while($ary = mysql_fetch_row($result)){

?>
 <tr>
 <th class="first_tr" colspan="1"><span class="comment_name" ><?=htmlentities($ary['kind'])?></span>
 <th class="first_tr" colspan="1"><span class="comment_name" ><?=htmlentities($ary['name'])?></span>
 <th class="score" colspan="1"><?=$ary['score']?></th>
</tr>

<?
 }
?>
</table>

<?
 mysqli_close($conn);
?>

