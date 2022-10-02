<?php
    switch($_REQUEST["action"]){
        case 'register':
            $name = ucwords($_POST["name"]);
            $cpf = $_POST["cpf"];
            $telephone = $_POST["tel"];
            $email = $_POST["email"];
            $birthday = $_POST["bday"];
            $genre = ucwords($_POST["genre"]);


            $sql = "INSERT INTO people (nome, cpf, telefone, email, data_nasc, genero) VALUES ('{$name}', '{$cpf}', '{$telephone}', '{$email}', '{$birthday}', '{$genre}')";

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>alert('Registration completed successfully!');</script>";

                echo "<script>location.href='?page=list';</script>";
            } else {
                echo "<script>alert('Registration failed!');</script>";

                echo "<script>location.href='?page=list';</script>";
            }
        break;
        case 'edit':
            $name = ucwords($_POST["name"]);
            $cpf = $_POST["cpf"];
            $telephone = $_POST["tel"];
            $email = $_POST["email"];
            $birthday = $_POST["bday"];
            $genre = ucwords($_POST["genre"]);

            $sql = "UPDATE people SET
                        nome = '{$name}', cpf = '{$cpf}', telefone = '{$telephone}', email = '{$email}', data_nasc = '{$birthday}', genero = '{$genre}'
                    WHERE
                        id = " . $_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>alert('Successfully edited!');</script>";

                echo "<script>location.href='?page=list';</script>";
            } else {
                echo "<script>alert('Failed to edit!');</script>";

                echo "<script>location.href='?page=list';</script>";
            }
            break;
            case 'delete':
                $sql = "DELETE FROM people WHERE id = " . $_REQUEST["id"];
                $res = $conn->query($sql);

                if ($res == true) {
                    echo "<script>alert('Person has been deleted successfully!');</script>";
    
                    echo "<script>location.href='?page=list';</script>";
                } else {
                    echo "<script>alert('Failed to delete!');</script>";
    
                    echo "<script>location.href='?page=list';</script>";
                }
                break;
            }