<table>
    <thead>
    <tr>
        <th>Titre</th>
        <th>Date</th>
        <th>Patient</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php

    if(isset($_GET['id_pati'])){
        $sql = "SELECT * FROM analyses where id_u='".$_GET['id_pati']."'";
    }elseif(isset($_SESSION['uti']['type']) &&  $_SESSION['uti']['type'] == '4'){
        $sql = "SELECT * FROM analyses where id_u='".$_SESSION['uti']['id']."'";
    }else{
        $sql = "SELECT * FROM analyses";
    }
                    
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            $sql2 = "SELECT np FROM utilisateurs where id='".$row['id_u']."'";

                            $result2 = $conn->query($sql2);
                            if ($result2->num_rows > 0) {
                                $row2 = $result2->fetch_assoc();
                                $pat = $row2["np"];
                            } 
                            
                                echo "<tr><td>" . $row["titre"] ."</td><td>" . $row["date_ajout"] . "</td><td>" . $pat . "</td>".
                                "<td><a href='analyse.php?id=" . $row["id"] . "' class='page icon fa fa-eye'></a>".
                                "<a href='supprimer.php?id=" . $row["id"] . "' class='page icon fa fa-trash'></a>".
                               "<a href='utilisateurs.php?id_update=" . $row["id"] . "' class='page icon fa fa-retweet'></a>".
                                "</td></tr>";
                            }
                    }
                    $conn->close();
         ?>


   

    </tbody>
</table>