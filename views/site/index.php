<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>OMG, this is cig butts challenge!</h1>

        <p class="lead">Look at this:</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Mats</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
            </div>
            <div class="col-lg-6">
                <h2>Butts</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6">
                <h2>QR-code</h2>
                <?php if(Yii::$app->user->isGuest) : ?>

                    <p>Login required.</p>
                <?php  else: ?>
                    <p>Here is your QR code, show it to recycling manager.</p>
                    <?= Html::img(['qr/qr']) ?>

                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <h2>Map</h2>

                <p>
                <div id="map" style="height: 400px"></div>
                <script>
					var map;
					function initMap() {
						map = new google.maps.Map(document.getElementById('map'), {
						//	center: {lat: -34.397, lng: 150.644},
							center: {lat: 52.1075441,  lng:20.8323787},
							zoom: 16
						});
					}
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvhjHWiag5pJsLYhctwdD044pAOl5pKpE&callback=initMap"
                        async defer></script></p>
            </div>

        </div>

    </div>
</div>
<style>
    .row{
        overflow: hidden;
    }

    [class*="col-"]{
        margin-bottom: -99999px;
        padding-bottom: 99999px;
    }
</style>
