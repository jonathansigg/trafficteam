<?php
/**
  * @templatename: Dienstleistungen
  */
?>

<section class="header-image background-image" style="background-image: url(<?= get_dir('images') ?>header-image.jpg)"></section>

<section class="container-fluid small-container">
  <div class="content-wrapper">
    <div class="text-xs-center">
      <h2>Service von Profis aus der Region</h2>
      <p>
        Wir unterstützen die Lokale Wirtschaftund arbeiten Ausschliesslich wenn möglich mit Partnern aus nächster Nähe.
      </p>
      <div class="row box-row">
        <div class="col-xs-12 col-md-4">
          <div class="box hover-box text-xs-center">
            <a href="#" class="fulllink"></a>
            <div class="icon-wrapper"><i class="fa fa-home fa-4x" aria-hidden="true"></i></div>
            <strong class="lead">Kulissenbau</strong>
            <div class="text">
              Vom Bühnenbild bis zum Messestand
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="box hover-box text-xs-center">
            <a href="#" class="fulllink"></a>
            <div class="icon-wrapper"><i class="fa fa-calendar fa-4x" aria-hidden="true"></i></div>
            <strong class="lead">Veranstaltungstechnik</strong>
            <div class="text">
              Wir sorgen fpr das richtige Equipment an Ihrem Event
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="box hover-box text-xs-center">
            <a href="#" class="fulllink"></a>
            <div class="icon-wrapper"><i class="fa fa-credit-card fa-4x" aria-hidden="true"></i></div>
            <strong class="lead">TT-Pay</strong>
            <div class="text">
              Ein Bezahlsystem auf Ihre Ansprüche geschnmieden
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Sections -->
<section class="container-fluid">
  <div class="content-wrapper">
    <div class="text-xs-center row center-items white-background">
      <div class="hidden-sm-down col-md-6 background-image" style="background-image: url(<?= get_dir('images') ?>kulisse.jpg)"></div>
      <div class="col-xs-12 col-md-6 background-height">
        <div class="content-wrapper">
          <div class="icon-wrapper"><i class="fa fa-home fa-4x text-lighter" aria-hidden="true"></i></div>
          <h4>Kulissenbau</h4>
          <div class="text content-padding">
            Vom Bühnenbild bis zum Messestand. Wir arbeiten mit lokalen Schweizern und Konstrukteuren und können Sie dadurch kompetent Beraten.
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 background-height">
        <div class="content-wrapper">
          <div class="icon-wrapper"><i class="fa fa-calendar fa-4x text-lighter" aria-hidden="true"></i></div>
          <h4>Veranstaltungstechnik</h4>
          <div class="text content-padding">
            Kontaktieren Sie uns für Ihren nächsten Event.<br>
            Wir kümmern uns um Licht, Ton und alles was dazugehört.
          </div>
        </div>
      </div>
      <div class="hidden-sm-down col-md-6 background-image" style="background-image: url(<?= get_dir('images') ?>event.jpg)">
        <div class="contact-box">
          <div class="contact-header">
            <i class="fa fa-info-circle fa-2x toggler" onclick="toggleContactbox(this)" aria-hidden="true"></i> <span class="contact-us">Kontaktieren Sie uns</span>
          </div>
          <div class="contact-content">
            <p><a href="tel:0611234567" class="btn btn-secondary btn-block">Tel: 061 123 45 67</a></p>
            <p><a href="mailto: info@trafficteam.ch" class="btn btn-secondary btn-block">Schreiben Sie uns</a></p>
          </div>
        </div>
      </div>
      <div class="hidden-sm-down col-md-6 background-image" style="background-image: url(<?= get_dir('images') ?>pay.jpg)"></div>
      <div class="col-xs-12 col-md-6 background-height">
        <div class="content-wrapper">
          <div class="icon-wrapper"><i class="fa fa-credit-card fa-4x text-lighter" aria-hidden="true"></i></div>
          <h4>TT-Pay</h4>
          <div class="text content-padding">
            Bezahlen einfach wie nie! Benutzen Sie TT-Pay für Ihren nächsten Anlsass und vermeiden Sie unnötiges Kleingeldzählen an der Bar und Kasse. TT-Pay ist ab Sofort für Sie einsatzbereit.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="content-wrapper text-xs-center">
    <h4>Kunden und Partner</h4>
    <div class="image-wrapper">
      <img src="<?= get_dir('images') ?>holzherr.gif" alt="Holzherr" class="partner-logo">
    </div>
  </div>
</section>
