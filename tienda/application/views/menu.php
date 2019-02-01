<nav class="navbar navbar-expand-sm navbar-light bg-secondary ">

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav  ">
            <li class="nav-item">
                <a class="nav-link" href='index'>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ref='<?= base_url(); ?>categorias'>categorias</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php foreach ($categorias as $row) : ?>
                        <a class="dropdown-item" href="#"><?= $row->nombre ?></a>
                    <?php endforeach; ?>   
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href=''>usuario ???</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href=''>carrito</a>
            </li>
        </ul>
    </div>
</nav>




</div>