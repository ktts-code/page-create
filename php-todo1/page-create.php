<?php include './header.php' ?>

<!-- action -> here? method -> GET  -->
<form>
  <div class="form-group">
    <input type="text" name="title" value="" placeholder="enter task title..." class="form-control input-lg">
  </div>
  <div class="form-group">
    <input type="text" name="time" value="" placeholder="time..." class="form-control input-lg">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg btn-block">SAVE</button>
  </div>

</form>
<?php
  //1) Проверяем приходят ли данные в GET
  if (isset($_GET['title']) ) {
    // $title = $_GET['title'];
    if ( strlen($_GET['title']) > 3 ) {
      if ( strtotime($_GET['time']) ) {
        if ( strtotime($_GET['time']) > time() ) {
          file_put_contents( './data/' . time() . '.json', json_encode( $_GET ) );
          // перенаправляем на страницу тасков
          header('location: /page-list.php');
        } else {
          print "<h2>This time is out!!!<h2>";
        }

      } else {
        print "<h2>Time format is WRONG!!!<h2>";
      }

    } else {
      print "<h2>Title must be more then 3 symbols!!!<h2>";
    }
  }


 ?>
<?php include './footer.php' ?>

<!--
дз  валидация
//validation
//1 title > 3 symbols
//2 time '2018-01-01' << format
//3 time > today
 -->

 <!-- $page = isset($_GET['page'])? $_GET['page']:'';
 new compact 7+
 $page = $_GET['page']??''; -->
