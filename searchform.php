<form method="get" action="<?php echo esc_url(home_url("/")) ?>">
    <input class="form-control" type="text" name="s" value="<?php echo $_GET["s"] ?>">
    <button type="submit" class="btn btn-danger form-control"><i class="bi bi-search"></i> Search</button>
</form>