<nav class="navbar bg-danger navbar-expand-md bg-danger p-3-tertiary" data-bs-
theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-
label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                   <a class="nav-link active text-light" aria-current="page"
href="?page=home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-light" href="?page=about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-light" href="?page=contact">Contact</a>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active text-light" href="#" role="button"
data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Belajar
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" 
href="?page=tabel">Datatables</a></li>
                        <li><a class="dropdown-item"
href="?page=form">Form</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item"
href="?page=something">Something else here</a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search"
placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success active text-bg-primary"
type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>