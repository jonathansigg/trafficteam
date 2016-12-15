<header class="main-header">
  <nav class="navbar navbar-light bg-faded">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-4">
          <a href="#" title="Trafficteam"><img alt="Logo Trafficteam" src="<?= get_dir('images') ?>logo.jpg"></a>
        </div>
        <div class="col-xs-8 text-xs-right">
          <div class="hamburger hamburger--spin hidden-md-up">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
          <nav class="nav nav-inline">
            <a class="nav-link<?= template() == 'home' ? ' active' : '' ?>" href="?page=home">Home</a>
            <a class="nav-link<?= template() == 'dienstleistungen' ? ' active' : '' ?>" href="?page=dienstleistungen">Dientsleistung</a>
            <a class="nav-link<?= template() == 'events' ? ' active' : '' ?>" href="?page=events">Events</a>
            <a class="nav-link<?= template() == 'ueber_uns' ? ' active' : '' ?>" href="?page=ueber_uns">Über uns</a>
            <a class="nav-link<?= template() == 'kontakt' ? ' active' : '' ?>" href="?page=kontakt">Kontakt</a>
          </nav>
        </div>
      </div>
    </div>
  </nav>
</header>
<main class="main-container">
