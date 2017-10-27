<div class="col-md-3">

    <form action='delete.php?name="<?php echo $todos['id']; ?>"' method="post">
        <input type="hidden" name="delete" value="<?php echo $todos['id']; ?>">
        <input type="submit" name="submit" value="Radera">
    </form>

</div>