<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Configuration</title>
    </head>
    <body>
        <form action="include/confirm_admin.php" method="POST">
          <h4 class="titre">Configurer les paramètres de l'utilisateur</h4>
          <div>
              <label for="inputUsername">Username</label>
              <input id="inputUsername" placeholder="Username" type="text", name="username">
          </div>
          <br/><br/>
          <button id="inputSubmit" type="submit">Configurer</button>
        </form>

        <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
        <script type="text/javascript">
          $(document).ready(function () {
            $('#inputSubmit').click(function () {
              var id_button = $(this).attr('id');
              var dataObject = {};
              dataObject["id_button"] = id_button;
              $.ajax({
                url:  'confirm_admin.php',
                timeout: 30000,
                type: 'POST',
                data: dataObject,
                success: function(data) {
                  $("#" + -id_button).html(data);
                  // $(location).attr("href", "confirm_admin.php");
                },
                error: function(data) {
                  $("#" + -id_button).html(data);
                },
              });
            });
          });
        </script>

    </body>
</html>
