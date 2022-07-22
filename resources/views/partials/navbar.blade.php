<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">GAB.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "News" ? 'active': '') }}"  href="/news">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Economic" ? 'active': '') }}" href="/eco">Economic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Sport" ? 'active': '') }}" href="/sport">Sport</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>