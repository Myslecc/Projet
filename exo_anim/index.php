<?php
    
    // Fiche de Léo
    $leo = array(
        "nom" => "Léo",
        "espece" => "Bengal",
        "sexe" => "Mâle",
        "age" => 1
    );
    
    // Informations du refuge
    $refuge = array(
        "nom" => "Le refuge de nos amis les bêtes",
        "chats" => array( 
            $leo,
            array(
                "nom" => "Bouh",
                "espece" => "Norvégien",
                "sexe" => "Mâle",
                "age" => 8
            ),
            array(
                "nom" => "Chipie",
                "espece" => "Siamoi",
                "sexe" => "Femelle",
                "age" => 4
            ),
            array(
                "nom" => "Vanille",
                "espece" => "Perssan",
                "sexe" => "Femelle",
                "age" => 5
            ),
            array(
                "nom" => "Nouga",
                "espece" => "Manx",
                "sexe" => "Mâle",
                "age" => 11
            )
        ),
        "chiens" => array(
            array(
                "nom" => "Bidou",
                "espece" => "Carlin",
                "sexe" => "Mâle",
                "age" => 3
            ),
            array(
                "nom" => "Fripouille",
                "espece" => "Bichon",
                "sexe" => "Femelle",
                "age" => 11
            ),
            array(
                "nom" => "Rogo",
                "espece" => "Rottweiler",
                "sexe" => "Mâle",
                "age" => 6
            ),
            array(
                "nom" => "Anka",
                "espece" => "Berger Allemand",
                "sexe" => "Femelle",
                "age" => 8
            )
        )
    );
    
    
    // 4. Fiche de Rogo
    $rogo = $refuge["chiens"][2];

?>
    <h1>Fiche de <?php echo $rogo["nom"] ; ?></h1>
    <ul>
        <li>Type : Chien</li>
        <li>Espéce : <?php echo $rogo["espece"] ; ?></li>
        <li>Sexe : <?php echo $rogo["sexe"] ; ?></li>
        <li>Age : <?php echo $rogo["age"] ; ?> ans</li>
    </ul>
<?php

    // 5. Recensement annuel
    $compteur_animaux = 0 ;
    
    // On compte les chats
    foreach( $refuge["chats"] as $chat ) {
        $compteur_animaux += 1 ;
    }
    
    // On compte les chien
    foreach( $refuge["chiens"] as $chien ) {
        $compteur_animaux += 1 ;
    }
    
    echo "Nombre d'animaux : " . $compteur_animaux . "<br/>" ;
    
    
    
    
    // 6. Calcul de statistiques
    
    // Age moyen des chats
    $age_moyen_chat = 0 ;
    foreach( $refuge["chats"] as $chat ) {
        $age_moyen_chat += $chat["age"] ;
    }
    
    $age_moyen_chat /= count( $refuge["chats"] )  ;
    
    echo "L'age moyen des chats du refuge est de " . $age_moyen_chat . " années.<br/>" ;
    
    // Age moyen des chiens
    $age_moyen_chien = 0 ;
    foreach( $refuge["chiens"] as $chien ) {
        $age_moyen_chien += $chien["age"] ;
    }
    
    $age_moyen_chien /= count( $refuge["chiens"] )  ;
    
    echo "L'age moyen des chiens du refuge est de " . $age_moyen_chien . " années.<br/>" ;
    
    // Age moyen de tous les animaux
    $somme_des_ages = 0 ;
    
    foreach( $refuge["chats"] as $chat ) {
        $somme_des_ages += $chat["age"] ;
    }
    
    foreach( $refuge["chiens"] as $chien ) {
        $somme_des_ages += $chien["age"] ;
    }
    
    $moyenne_age = $somme_des_ages / ( count($refuge["chats"]) + count($refuge["chiens"]) ) ;
    
    echo "L'age moyen de la totalité des animaux du refuge est de " . $moyenne_age . " années <br/>" ;
    
    
    // 7. Mme.Garillet
    $chats_selectionnes = array();
    foreach( $refuge["chats"] as $chat ) {
        
        // Vérifier que le chat est présentable pour Mme.Garillet
        if( $chat["age"] < 10 and ($chat["espece"] == "Bengal" or $chat["espece"] == "Perssan") ) {
            // Ajouter le chat dans ma liste
            array_push( $chats_selectionnes, $chat );
        }
     
    }
    
    ?>
        <h1>Chats à proposer à Mme.Garillet :</h1>
        <ul>
            <?php
                foreach( $chats_selectionnes as $chat ) {
                    ?><li><?php echo $chat["nom"] ?></li><?php
                }
            ?>
        </ul>
    <?php
        
    // 8. M.Redouant
    $animaux_selectionnes = array();
    
    // Selection dans les chats
    foreach( $refuge["chats"] as $chat ) {
        if( $chat["age"] >= 5 and $chat["sexe"] == "Mâle" ) {
            array_push( $animaux_selectionnes, $chat );
        }  
    }
    
    // Selection chez les chiens
    foreach( $refuge["chiens"] as $chien ) {
        if( $chien["age"] >= 5 and $chien["sexe"] == "Mâle" ) {
            array_push( $animaux_selectionnes, $chien );
        }
    }

    ?>
        <h1>Animaux à proposer à M.Redouant :</h1>
        <ul>
            <?php
                foreach( $animaux_selectionnes as $animal ) {
                    ?><li><?php echo $animal["nom"] ?></li><?php
                }
            ?>
        </ul>
    <?php
    
    
    // 8 bis. M.Redouant (Exemple avec array_merge)
    $animaux_selectionnes = array();
    $animaux = array_merge( $refuge["chats"], $refuge["chiens"] );
    
    foreach( $animaux as $animal ) {
        if( $animal["age"] >= 5 and $animal["sexe"] == "Mâle" ) {
            array_push( $animaux_selectionnes, $animal );
        } 
    }
    
    ?>
        <h1>Animaux à proposer à M.Redouant : (avec array_merge())</h1>
        <ul>
            <?php
                foreach( $animaux_selectionnes as $animal ) {
                    ?><li><?php echo $animal["nom"] ?></li><?php
                }
            ?>
        </ul>
    <?php

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


    
    
    
    