<h1>Edit person</h1>
<?php
    $sql = "SELECT * FROM people WHERE id = " . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=save" method="POST">
    <!-- Send to save-person.php the action -->
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">

    <div class="mb-3">
        <label for="name">Full Name</label>
        <input type="text" name="name" value="<?php echo $row->nome?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" value="<?php echo $row->cpf?>"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="tel">Telephone</label>
        <input type="tel" name="tel" value="<?php echo $row->telefone?>"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" name="email" value="<?php echo $row->email?>"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="bday">Birthday</label>
        <input type="date" name="bday" value="<?php echo $row->data_nasc?>"  class="form-control">
    </div>
    <div class="mb-3">
        <label>Genre</label>
        <select name="genre" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row->genero?></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>