@extends('layouts.base')

@section('mainContent')
<div id="jumbotron"></div>
<div class="blue-section">
</div>
<div class="container">
    <div class="main-content container">
        <div class="card">
            <div class="card-title"><a href="">COMIC BOOK</a></div>
            <div class="view-gallery">
                <a href="">VIEW GALLERY</a>
            </div>
        </div>
        <div class="ad">
            <h4>ADVERTISEMENT</h4>
        </div>
        <div class="central-content">
            <div class="card-description">
                <h2>ACTION COMICS #1000: THE DELUXE EDITION</h2>
                <div class="card-availability">
                    <div class="card-price">
                        <h4>U.S. PRICE: <span>$19.99</span></h4>
                        <h4>AVAILABLE</h4>
                    </div>
                    <div class="card-check-availability">
                        <a href="">
                            <h4>Check Availability <i class="fa-solid fa-caret-down"></i></h4>
                        </a>
                    </div>
                </div>
                <div class="card-text">
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing
                    comic that won raves when it hit comics shops in April! This hardcover includes all the stories from
                    that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action
                    Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by jim
                    Lee for Superman's new look, scripts for the stories, the original art from the lost story featuring
                    art
                    by Curt Swan and more! Plus: a complete reprint of the stories that started it all-the Superman
                    stories Action Comics #1 and 2 from 1938!
                </div>
            </div>
            <div class="advertisement">
                <img src="images/adv.jpg" alt="Adv image" />
            </div>
        </div>
    </div>
</div>

@endsection

@section('upperFooter')
<div id="top-upper-footer" class="container">
    <div class="container">
        <ul>
            <li>
                <h3>Talent</h3>
            </li>
            <li>
                <p>Art by:</p>
                <span>
                    <a href="">José Luis García-López</a>,
                    <a href="">Clay Mann</a>, <a href="">Rafael Albuquerque</a>,
                    <a href="">Patrick Gleason</a>,
                    <a href="">Dan Jurgens</a>,
                    <a href="">Joe Shuster</a>,
                    <a href="">Neal Adams</a>,
                    <a href="">Curt Swan</a>,
                    <a href="">John Cassaday</a>,
                    <a href="">Olivier Coipel</a>,
                    <a href="">Jim Lee</a>
                </span>
            </li>
            <li>
                <p>Written by:</p>
                <span>
                    <a href="">Brad Meltzer</a>,
                    <a href="">Tom King. Scott Snyder</a>,
                    <a href="">Geoff Johns</a>,
                    <a href="">Brian Michael Bendis</a>,
                    <a href="">Paul Dini</a>,
                    <a href="">Louise Simonson</a>,
                    <a href="">Richard Donner</a>,
                    <a href="">Marv Wolfman</a>,
                    <a href="">Peter J. Tomasi</a>,
                    <a href="">Dan Jurgens</a>,
                    <a href="">Jerry Siegel</a>,
                    <a href="">Paul Levitz</a>
                </span>
            </li>
        </ul>
        <ul>
            <li>
                <h3>Specs</h3>
            </li>
            <li>
                <p>Series:</p>
                <span><a href="">ACTIONS COMICS</a></span>
            </li>
            <li>
                <p>U.S. Price:</p>
                <span>$19.99</span>
            </li>
            <li>
                <p>On Sale Date:</p>
                <span>Oct 02 2018</span>
            </li>
        </ul>
    </div>
</div>
<div id="action-upper-footer" class="container">
    <div class="container">
        <ul>
            <li>
                <span>DIGITAL COMICS</span>
                <div><img src="images/buy-comics-digital-comics.png" alt="digilat-comics"></div>
            </li>
            <li>
                <span>SHOP DC</span>
                <div><img src="images/buy-comics-merchandise.png" alt="merchandise"></div>
            </li>
            <li>
                <span>COMIC SHOP LOCATOR</span>
                <div><img src="images/buy-comics-shop-locator.png" alt="shop-locator"></div>
            </li>
            <li>
                <span>SUBSCRIPTION</span>
                <div><img src="images/buy-comics-subscriptions.png" alt="subscriptions"></div>
            </li>
        </ul>
    </div>
</div>
@endsection