<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Les failles XSS</title>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
	mdl-layout--fixed-tabs">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Easy level 2 </span>
        </div>

    </header>

    <main class="mdl-layout__content">
        <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
            <div class="page-content">
                <center>
                    <form action="easy-level-2.php" method="POST">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" maxlength="20" name="pseudo" type="text" id="pseudo">
                            <label class="mdl-textfield__label" for="pseudo">Pseudo</label>
                        </div>
                        <br>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" maxlength="20" name="mdp" type="text" id="mdp">
                            <label class="mdl-textfield__label" for="mdp">Mdp</label>
                        </div>
                        <div>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
                                    type="submit">
                                Button
                            </button>
                            <div style="margin-top: 20px;">
                            </div>
                        </div>
                        <?php
                        include('log.php');
                        $pseudo = '';
                        $mdp = '';
                        if (isset($_POST['pseudo']))
                            $pseudo = $_POST['pseudo'];

                        if (isset($_POST['mdp']))
                            $mdp = $_POST['mdp'];

                        if (isset($_POST['pseudo']) || isset($_POST['mdp'])) {
                            echo 'Connection via  :' . $pseudo . '<br>';
                            if ($pseudo === LOGGING && $mdp === PASSWORD) {
                                echo 'Connexion réussie. Bonjour, ' . $pseudo;
                            } else {
                                echo 'Identifiants incorrects.';
                            }
                        }
                        ?>
                    </form>
                </center>
            </div>
        </section>
    </main>
</div>
</body>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</html>
