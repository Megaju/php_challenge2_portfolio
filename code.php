<pre>
    <code>
    &lt;?php include('includes/header.php'); ?&gt;
    
    &lt;?php include('includes/pagination.php'); ?&gt;

    &lt;div class="flexbox"&gt;
        &lt;section&gt;
           &lt;?php if($_SESSION['langue'] == 'fr') {?&gt;
            &lt;h2&gt;Écris ici le nom, la cause de la mort ainsi que la date.&lt;/h2&gt;
            &lt;h3&gt;Tuer c'est faire un choix.&lt;/h3&gt;
           &lt;?php } else { // ENGLISH ?&gt;
            &lt;h2&gt;Write here the name, the cause of death and the death date.&lt;/h2&gt;
            &lt;h3&gt;Killing is making a choice.&lt;/h3&gt;
           &lt;?php } ?&gt;
            &lt;!-- Formulaire à remplir --&gt;
           &lt;?php if($_SESSION['langue'] == 'fr') {?&gt;
            &lt;form action="posts/post.php" method="post"&gt;
                &lt;label for="name"&gt;Prénom&lt;/label&gt;
                &lt;input type="text" name="prenom" id="prenom"&gt;
                &lt;label for="name"&gt;Nom&lt;/label&gt;
                &lt;input type="text" name="nom" id="nom"&gt;
                &lt;label for="message"&gt;Cause de la mort&lt;/label&gt;
                &lt;textarea name="message" id="message" cols="30" rows="10"&gt;Crise cardiaque.&lt;/textarea&gt;
                &lt;label for="dateofdeath"&gt;Date du décès&lt;/label&gt;
                &lt;input type="datetime-local" name="dateofdeath" id="dateofdeath"&gt;
                &lt;input type="submit"&gt;
            &lt;/form&gt;
           &lt;?php } else { ?&gt;
            &lt;form action="posts/post.php" method="post"&gt;
                &lt;label for="name"&gt;First name&lt;/label&gt;
                &lt;input type="text" name="prenom" id="prenom"&gt;
                &lt;label for="name"&gt;Last name&lt;/label&gt;
                &lt;input type="text" name="nom" id="nom"&gt;
                &lt;label for="message"&gt;Cause of death&lt;/label&gt;
                &lt;textarea name="message" id="message" cols="30" rows="10"&gt;Crise cardiaque.&lt;/textarea&gt;
                &lt;label for="dateofdeath"&gt;Death date&lt;/label&gt;
                &lt;input type="datetime-local" name="dateofdeath" id="dateofdeath"&gt;
                &lt;input type="submit"&gt;
            &lt;/form&gt;
           &lt;?php } ?&gt;
            
            &lt;div id="deathnote-style"&gt;
            &lt;?php
            if($_SESSION['langue'] == 'fr') {
                // Récupération des 50 derniers messages
                $reponse = $bdd-&gt;query('SELECT ID, nom, prenom, message, DATE_FORMAT(dateofdeath, \'%d/%m/%Y à %Hh%imin\') AS dateofdeath FROM deathnote ORDER BY ID DESC LIMIT ' . $firstOfPage . ',' . $perPage);
            } else {
                // Récupération des 50 derniers messages
                $reponse = $bdd-&gt;query('SELECT ID, nom, prenom, message, DATE_FORMAT(dateofdeath, \'%m/%d/%Y at %Hh%imin\') AS dateofdeath FROM deathnote ORDER BY ID DESC LIMIT ' . $firstOfPage . ',' . $perPage);
            }
            if ($_SESSION['langue'] == 'fr') {
                // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
                while ($donnees = $reponse-&gt;fetch())
                {
                    echo '&lt;p class="death"&gt;&lt;form action="posts/thumb-up.php" method="post" class="thumbs"&gt;&lt;input type="hidden" name="note" id="note" value="' . $donnees['ID'] . '" class="fa fa-thumbs-up"&gt;&lt;input type="submit" value="+1" class="thumb-up"&gt;&lt;/form&gt;&lt;form action="posts/thumb-down.php" method="post" class="thumbs"&gt;&lt;input type="hidden" name="note" id="note" value="' . $donnees['ID'] . '"&gt;&lt;input type="submit" value="-1" class="thumb-down"&gt;&lt;/form&gt; - ' . '&lt;span class="name"&gt;' .
                    htmlspecialchars($donnees['prenom']) .
                    ' ' .
                    htmlspecialchars($donnees['nom']) . '&lt;/span&gt;' .
                    ' &lt;strong&gt;Cause :&lt;/strong&gt; ' . 
                    htmlspecialchars($donnees['message']) . 
                    ' le ' . 
                    htmlspecialchars($donnees['dateofdeath']) . 
                    '&lt;/p&gt;';
                }
            } else {
                // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
                while ($donnees = $reponse-&gt;fetch())
                {
                    echo '&lt;p class="death"&gt; - ' . '&lt;span class="name"&gt;' .
                    htmlspecialchars($donnees['prenom']) .
                    ' ' .
                    htmlspecialchars($donnees['nom']) . '&lt;/span&gt;' .
                    ' &lt;strong&gt;Cause :&lt;/strong&gt; ' . 
                    htmlspecialchars($donnees['message']) . 
                    ' the ' . 
                    htmlspecialchars($donnees['dateofdeath']) . 
                    '&lt;/p&gt;';
                }
            }
            $reponse-&gt;closeCursor();
            ?&gt;
            &lt;/div&gt;
            
            &lt;!-- PAGINATION --&gt;
            &lt;ul class="pagination"&gt;
                &lt;!-- precedent --&gt;
                &lt;?php
                    echo '&lt;li&gt;&lt;a href="?p=' . ($current - 1) . '"&gt;' . '&laquo;' . '&lt;/a&gt;&lt;/li&gt;';   
                ?&gt;
                &lt;!-- numeros --&gt;
                &lt;?php
                    for($i=1; $i&lt;=$nbPage; $i++){
                        if($i == $current) {
                            echo '&lt;li class="active"&gt;&lt;a href="?p=' . $i . '"&gt;' . $i . '&lt;/a&gt;&lt;/li&gt;';
                        } else {
                            echo '&lt;li&gt;&lt;a href="?p=' . $i . '"&gt;' . $i . '&lt;/a&gt;&lt;/li&gt;';
                        }
                    }
                ?&gt;
                &lt;!-- suivant --&gt;
                &lt;?php
                    echo '&lt;li&gt;&lt;a href="?p=' . ($current + 1) . '"&gt;' . '&raquo;' . '&lt;/a&gt;&lt;/li&gt;';   
                ?&gt;
            &lt;/ul&gt;
            
        &lt;/section&gt;

        &lt;aside&gt;
            &lt;!-- image des règles du deathnote avec css --&gt;
        &lt;/aside&gt;
    &lt;/div&gt;

    &lt;?php include('includes/footer.php'); ?&gt;
&lt;/body&gt;

&lt;/html&gt; 
    </code>
</pre>