<h1>New person</h1>

<form action="?page=save" method="POST">
    <!-- Send to save-person.php the action -->
    <input type="hidden" name="action" value="register">

    <div class="mb-3">
        <label for="name">Full Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" class="form-control">
    </div>
    <div class="mb-3">
        <label for="tel">Telephone</label>
        <input type="tel" name="tel" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="bday">Birthday</label>
        <input type="date" name="bday" class="form-control">
    </div>
    <div class="mb-3">
        <label>Genre</label>
        <select name="genre" class="form-select" aria-label="Default select example">
            <option selected>Select one</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>