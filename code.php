  &lt;?php include('includes/header.php'); ?&gt
</br>    
</br>    
    &lt;?php include('includes/pagination.php'); ?&gt
</br>    
</br>
    &lt;div class="flexbox"&gt</br>    
        &lt;section&gt</br>
           &lt;?php if($_SESSION['langue'] == 'fr') {?&gt</br>
            &lt;h2&gtÉcris ici le nom, la cause de la mort ainsi que la date.&lt;/h2&gt</br>
            &lt;h3&gtTuer c'est faire un choix.&lt;/h3&gt</br>
           &lt;?php } else { // ENGLISH ?&gt</br>
            &lt;h2&gtWrite here the name, the cause of death and the death date.&lt;/h2&gt</br>
            &lt;h3&gtKilling is making a choice.&lt;/h3&gt</br>
           &lt;?php } ?&gt</br>
            &lt;!-- Formulaire à remplir --&gt</br>
           &lt;?php if($_SESSION['langue'] == 'fr') {?&gt</br>
            &lt;form action="posts/post.php" method="post"&gt</br>
                &lt;label for="name"&gtPrénom&lt;/label&gt</br>
                &lt;input type="text" name="prenom" id="prenom"&gt</br>
                &lt;label for="name"&gtNom&lt;/label&gt</br>
                &lt;input type="text" name="nom" id="nom"&gt</br>
                &lt;label for="message"&gtCause de la mort&lt;/label&gt</br>
                &lt;textarea name="message" id="message" cols="30" rows="10"&gtCrise cardiaque.&lt;/textarea&gt</br>
                &lt;label for="dateofdeath"&gtDate du décès&lt;/label&gt</br>
                &lt;input type="datetime-local" name="dateofdeath" id="dateofdeath"&gt</br>
                &lt;input type="submit"&gt</br>
            &lt;/form&gt</br>
           &lt;?php } else { ?&gt</br>
            &lt;form action="posts/post.php" method="post"&gt</br>
                &lt;label for="name"&gtFirst name&lt;/label&gt</br>
                &lt;input type="text" name="prenom" id="prenom"&gt</br>
                &lt;label for="name"&gtLast name&lt;/label&gt</br>
                &lt;input type="text" name="nom" id="nom"&gt</br>
                &lt;label for="message"&gtCause of death&lt;/label&gt</br>
                &lt;textarea name="message" id="message" cols="30" rows="10"&gtCrise cardiaque.&lt;/textarea&gt</br>
                &lt;label for="dateofdeath"&gtDeath date&lt;/label&gt</br>
                &lt;input type="datetime-local" name="dateofdeath" id="dateofdeath"&gt</br>
                &lt;input type="submit"&gt</br>
            &lt;/form&gt</br>
           &lt;?php } ?&gt</br>
            </br></br>
            &lt;div id="deathnote-style"&gt</br>
            &lt;?php</br>
            if($_SESSION['langue'] == 'fr') {</br>
                // Récupération des 50 derniers messages</br>
                $reponse = $bdd-&gtquery('SELECT nom, prenom, message,</br> DATE_FORMAT(dateofdeath, \'%d/%m/%Y à %Hh%imin\') AS</br> dateofdeath FROM deathnote ORDER BY ID DESC LIMIT ' .</br> $firstOfPage . ',' . $perPage);</br>
            } else {</br>
                // Récupération des 50 derniers messages</br>
                $reponse = $bdd-&gtquery('SELECT nom, prenom, message,</br> DATE_FORMAT(dateofdeath, \'%m/%d/%Y at %Hh%imin\') AS</br> dateofdeath FROM deathnote ORDER BY ID DESC LIMIT ' .</br> $firstOfPage . ',' . $perPage);</br>
            }</br>
</br></br>
            if ($_SESSION['langue'] == 'fr') {</br>
                // /!\IMPORTANT/!\ Affichage de chaque message (données</br> protégées par htmlspecialchars) /!\IMPORTANT/!\</br>
                while ($donnees = $reponse-&gtfetch())</br>
                {</br>
                    echo '&lt;p class="death"&gt - ' . '&lt;span</br> class="name"&gt' .</br>
                    htmlspecialchars($donnees['prenom']) .</br>
                    ' ' .</br>
                    htmlspecialchars($donnees['nom']) . '&lt;/span&gt' .</br>
                    ' &lt;strong&gtCause :&lt;/strong&gt ' . </br>
                    htmlspecialchars($donnees['message']) . </br>
                    ' le ' . </br>
                    htmlspecialchars($donnees['dateofdeath']) .</br> 
                    '&lt;/p&gt';</br>
                }</br>
            } else {</br>
                // /!\IMPORTANT/!\ Affichage de chaque message (données</br> protégées par htmlspecialchars) /!\IMPORTANT/!\</br>
                while ($donnees = $reponse-&gtfetch())</br>
                {</br>
                    echo '&lt;p class="death"&gt - ' . '&lt;span</br> class="name"&gt' .</br>
                    htmlspecialchars($donnees['prenom']) .</br>
                    ' ' .</br>
                    htmlspecialchars($donnees['nom']) . '&lt;/span&gt' .</br>
                    ' &lt;strong&gtCause :&lt;/strong&gt ' . </br>
                    htmlspecialchars($donnees['message']) . </br>
                    ' the ' . </br>
                    htmlspecialchars($donnees['dateofdeath']) . </br>
                    '&lt;/p&gt';</br>
                }</br>
            }</br>
</br></br>
            $reponse-&gtcloseCursor();</br>
</br></br>
            ?&gt</br>
            &lt;/div&gt</br>
            </br></br>
            &lt;!-- PAGINATION --&gt</br>
            &lt;ul class="pagination"&gt</br>
                &lt;!-- precedent --&gt</br>
                &lt;?php</br>
                    echo '&lt;li&gt&lt;a href="?p=' . ($current - 1) . '"&gt' .</br> '&laquo;' . '&lt;/a&gt&lt;/li&gt';  </br> 
                ?&gt</br>
                &lt;!-- numeros --&gt</br>
                &lt;?php</br>
                    for($i=1; $i&lt;=$nbPage; $i++){</br>
                        if($i == $current) {</br>
                            echo '&lt;li class="active"&gt&lt;a href="?p=' . $i . '"&gt' . $i . '&lt;/a&gt&lt;/li&gt';</br>
                        } else {</br>
                            echo '&lt;li&gt&lt;a href="?p=' . $i . '"&gt' . $i . '&lt;/a&gt&lt;/li&gt';</br>
                        }</br>
                    }</br>
                ?&gt</br>
                &lt;!-- suivant --&gt</br>
                &lt;?php</br>
                    echo '&lt;li&gt&lt;a href="?p=' . ($current + 1) . '"&gt' . '&raquo;' . '&lt;/a&gt&lt;/li&gt'; </br>  
                ?&gt</br>
            &lt;/ul&gt</br>
            </br></br>
        &lt;/section&gt</br>
</br></br>
        &lt;aside&gt</br>
            &lt;!-- image des règles du deathnote avec css --&gt</br>
        &lt;/aside&gt</br>
    &lt;/div&gt</br>
</br></br>
    &lt;?php include('includes/footer.php'); ?&gt</br>
&lt;/body&gt</br>
</br></br>
&lt;/html&gt</br>