<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>HTML JS PHP | Li</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <div id="etude_chronologie">

            <section>
                html5
            </section>

            <section id='myScreen' class="red">
                <script>
                    document.getElementById('myScreen').innerHTML = 'Je calcule...';
                </script>
            </section>

            <section id ="calcul">
                <?php
                for ($index = 0; $index < 1e6; $index++) { //1e6
                    echo $index . ' ';
                }
                ?>
            </section>

        </div>
        <script src="html_js_php.js"></script>
    </body>
</html>
