<?php
    // function execute select statement
  function run_query($sql)
  {
      // $con = mysqli_connect('sql12.freemysqlhosting.net', 'sql12351578', 'bP4Ek227RE', 'sql12351578');
      $con = mysqli_connect('localhost', 'root', '', 'awesome_shop');
      $result = mysqli_query($con, $sql);
      mysqli_close($con);
      return $result;
  }

?>
