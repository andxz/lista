<div class="col-md-1">

    <form action='completed.php?name="<?php echo $todos['id']; ?>"' method="post">
        <input type="hidden" name="completed" value="<?php echo $todos['id']; ?>">
        <input type="submit" name="submit" value="Klar">
    </form>

</div>

<div class="col-md-2">

    <form action='delete.php?name="<?php echo $todos['id']; ?>"' method="post">
        <input type="hidden" name="delete" value="<?php echo $todos['id']; ?>">
        <input type="submit" name="submit" value="Radera">
    </form>

</div>