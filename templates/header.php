<div class="page-overlay fade in"><img class="spinner" src="<?= get_dir('images'); ?>svg-loaders/puff.svg" alt="spinner"></div>
<header class="main-header">
  <nav class="navbar navbar-light bg-faded">
    <div class="container-fluid">
        <button class="hamburger hamburger--collapse hidden-sm-up" type="button" data-toggle="collapse" data-target="#main-navbar">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div class="collapse navbar-toggleable-sm" id="main-navbar">
          <a class="navbar-brand" href="?page=<?= get_maintemplate(); ?>">LOGO</a>
          <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>
          <li class="flyout nav-item">
            <a class="nav-link"  href="#">Flyout <span class="caret"></span></a>
            <div class="flyout-menu">
              <div class="col-md-4 col-xs-12">
                <ul class="nav nav-pills nav-stacked">
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                </ul>
              </div>
              <div class="col-md-4 col-xs-12">
                <ul class="nav nav-pills nav-stacked">
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                </ul>
              </div>
              <div class="col-md-4 col-xs-12">
                <ul class="nav nav-pills nav-stacked">
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                  <li class="nav-item"><a class="nav-link"  href="#">Link</a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <form class="form-inline pull-xs-right">
          <input class="form-control" type="text" placeholder="Search">
          <button class="btn btn-success-outline" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <section class="container">
    <div class="content-wrapper">
      <h3>Some Header Content</h3>
      <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
      </p>
    </div>
  </section>
</header>
<div class="main-container">
