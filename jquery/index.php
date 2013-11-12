<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>HTML JS PHP | Li</title>

    <link rel="shortcut icon" href="http://cote7.com/favicon.ico"/>
    <link rel="icon" type="image/x-icon"  href="http://cote7.com/favicon.ico"/>

    <link rel="stylesheet" href="../sys/css/style.css">
    <style>
      div {
        display: none;
        margin: 5px;
      }
    </style>
  </head>

  <body>
    <!--<span id='texteJQ'></span>-->

    <div id="listes">
      <ul id="ul1">
        <li> Elément de liste 1
          <ul id="ul2">
            <li> Enfant 1</li>
            <li> Enfant 2</li>
          </ul>
        </li>
        <li> Elément de liste 2</li>
        <li> Elément de liste 3</li>
        <li> Elément de liste 4</li>
      </ul>
    </div>

    <script src="../sys/lib/jquery-2.0.3.min.js"></script>
    <script src="../sys/lib/notifier_c7.js"></script>
    <script src="../sys/lib/fct_li-0.0.1.js"></script>
    <script src="jq_li.js"></script>
  </body>
</html>