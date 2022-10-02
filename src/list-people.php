<h1>List people</h1>

<?php
    $sql = "SELECT * FROM people";
    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    if ($qtd > 0) {
        echo "<table class='table table-hover table-striped table-bordered'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>CPF</th>";
        echo "<th>E-mail</th>";
        echo "<th>Telephone</th>";
        echo "<th>Birthday</th>";
        echo "<th>Genre</th>";
        echo "<th></th>";
        echo "</tr>";
        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->nome . "</td>";
            echo "<td>" . $row->cpf . "</td>";
            echo "<td>" . $row->email . "</td>";
            echo "<td>" . $row->telefone . "</td>";
            echo "<td>" . $row->data_nasc . "</td>";
            echo "<td>" . $row->genero . "</td>";
            echo "<td>
                    <button onclick=\"location.href='?page=edit&id=" .$row->id."' \" class='btn btn-success'>Modify</button>
                    
                    <button onclick=\"if(confirm('Are you sure you want to delete this person?')){location.href='?page=save&action=delete&id=" .$row->id."' }else{false}\"  class='btn btn-danger'>Delete</button>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>No result found!</p>";
    }
?>