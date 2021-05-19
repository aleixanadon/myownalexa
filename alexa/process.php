<div id="clock"></div>

<?php
     $question = $_POST["question"];

     switch ($question) {
          case 'Hora':
               echo '
                    <script type="text/javascript">

                    function showTime() {

                         var today = new Date();

                         var h = today.getHours();
                         var m = today.getMinutes();
                         var s = today.getSeconds();

                         if (h < 10) {

                              var h = "0" + today.getHours();
                         } else if (m < 10) {

                              var m = "0" + today.getMinutes();
                         } else if (s < 10) {

                              var s = "0" + today.getSeconds();
                         }

                         document.getElementById("clock").innerHTML = h + ":" + m + ":" + s;

                         setTimeout(showTime, 1000);
                    }
                    showTime();
                    </script>
                    ';
               break;

          default:
               // code...
               break;
     }
?>
