<!-- Pour réviser les tables de multiplication, le professeur de mathématiques voudrait que chaque élève trouve une façon originale de les afficher. Vous avez donc eu l’idée de les afficher sur votre ordinateur, avec l’utilisation de php. Grâce à une boucle for.
    -->
    <?php
		$table = 1;
		for($i = 1;$i <= 10;$i++){
		    for($multiplicateur = 1;$multiplicateur <= 10;$multiplicateur++){
		        echo $table. 'x' .$multiplicateur. '=' .($table * $multiplicateur). '<br>';
		        }
	    echo '<br>';	        
	    $table = $table + 1;	      
    }
	?>