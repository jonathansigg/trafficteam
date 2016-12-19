<?php
/**
  * @templatename: Events
  */
?>

<section class="header-image background-image" style="background-image: url(src/dist/images/eventtipp.jpg)"></section>

<section class="container-fluid">
  <div class="content-wrapper">
    <div class="event-tipp">
      <div class="row box-row">
        <div class="col-xs-12">
          <div class="box no-padding box-normal">
            <div class="row">
              <div class="col-xs-12 col-sm-9 col-md-7">
                <div class="box-padding">
                  <h2>WEEKEND - Christmas Edition</h2>
                  <p>
                    TrafficTeam Präsentiert zum dritten mal in Folge die Partyreihe "WEEKEND" dieses mal mit dabei, Dave 202 und Alex Costanzo<br>
                    <a title="Mehr lesen" href="#" class="text-lighter"></a>
                  </p>
                  <div class="item-wrapper">
                    <div class="item"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                    <div class="item"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="item"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-5 background-image background-image-event" style="background-image: url(<?= get_dir('images') ?>eventtipp.jpg)"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="content-wrapper">
    <h2>Nächste Veranstaltungen:</h2>
    <div class="row box-row">
      <?php for($i = 0; $i < 3; $i++): ?>
      <div class="col-xs-12">
        <div class="box no-padding box-normal">
          <div class="row">
            <div class="col-xs-9 col-md-7">
              <div class="box-padding">
                <h2>WEEKEND - Christmas Edition</h2>
                <p>
                  TrafficTeam Präsentiert zum dritten mal in Folge die Partyreihe "WEEKEND" dieses mal mit dabei, Dave 202 und Alex Costanzo<br>
                  <a title="Mehr lesen" href="#" class="text-lighter"></a>
                </p>
                <div class="item-wrapper">
                  <div class="item"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                  <div class="item"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <div class="item"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xs-3 col-md-5 background-image background-image-event" style="background-image: url(<?= get_dir('images') ?>eventtipp.jpg)"></div>
          </div>
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>
