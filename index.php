<?php
  include "config.php"
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <title>Till Jonas Umbach</title>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#696969">
<meta name="apple-mobile-web-app-title" content="Till-Umbach">
<meta name="application-name" content="Till-Umbach">
<meta name="msapplication-TileColor" content="#696969">
<meta name="theme-color" content="#696969">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
</head> 

<body>
  <ul id=Languages>
    <a id=de href="index.php?lang=de"><de>Deutsch</de></a>
    <a> | </a>
    <a id=en href="index.php?lang=en"><en>English</en></a> 
  </ul>

  <div id="header">
    <div id="innerHeader">
      <div id="name"><h1>Till Jonas Umbach</h1></div>
      <ul id="navigation"> 
        <a href="#Forschung"><li><?php echo $lang['Forschung'] ?></li></a>
        <a href="#Musik"><li><?php echo $lang['Musik'] ?></li></a>
        <a href="#Inspirierendes"><li><?php echo $lang['Inspirierendes'] ?></li></a>
        <a href="#Kontakt"><li><?php echo $lang['Kontakt'] ?></li></a>
    </ul>
    </div>
  </div>

  <div id="main">
    <div id="innerMain">
      <section id="Forschung">
        <div id="svg"> <img alt="Beethoven op.26" src="Beethoven-op26a2_animated.svg" />
          <div id="Institutionen">
            <ul id="institutionenliste"> 
              <a target="_blank" rel="noopener noreferrer" href="https://de.wikipedia.org/wiki/Benutzer:UmHCAB"><span><li>Wikipedia</li></span></a>
              <a target="_blank" rel="noopener noreferrer" href="https://www.uni-siegen.de/start/"><span><li>UniSie</li></span></a>
              <a target="_blank" rel="noopener noreferrer" href="https://www.musikforschung.de/"><span><li>GfM</li></span></a>
              <a target="_blank" rel="noopener noreferrer" href="https://github.com/TillUmbach"><span><li>GitHub</li></span></a>
              <a target="_blank" rel="noopener noreferrer" href="https://www.researchgate.net/profile/Till-Umbach"><span><li>R<sup>G</sup></li></span></a>
              <a target="_blank" rel="noopener noreferrer" href="https://imslp.org/wiki/User:Umbach"><span><li>ISMLP</li></span></a>
            </ul>
          </div> 
        </div>
      </section>

      <section id="Musik">
        <div id="logo"> <img src="Logo Letzte Version small.png" alt="logo"></div>
        <div id="Musiktext"><p><?php echo $lang['Musiktext']?></p>
          <div id="WeitereVideos"> <p><a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCRScU1W17FUi1XZgYEVXRVA"><span><?php echo $lang['Videos'] ?></span></a></p></div>
        </div>
        <div id="Video" style="padding-top: 11px">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ddNE-Wsx2_k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </section>

      <section id="Ende" style="height:1px; width:100%; clear:both;">
      </section>

      <section id="Inspirierendes">
        <h2><?php echo $lang['Internet'] ?></h2>
        <div class="column" >
          <ul id="listelinks"> 
            <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/watch?v=vcBn04IyELc"><li><blue>Beethoven im Videospiel</blue></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/watch?v=Mmrs9GYkbqg"><li><yellow>Shake hands with danger</yellow></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://supercollider.github.io/"><li><red>SuperCollider</red></li></a>
            <a target="_blank" rel="noopener noreferrer" href="http://minornine.com/ada/"><li><blue>ada</blue></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://openmusic-project.github.io/"><li><yellow>OpenMusic</yellow></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://llllllll.co/"><li><red>////////</red></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://abjad.github.io/gallery-2020.html"><li><blue>Abjad</blue></li></a>
            <a target="_blank" rel="noopener noreferrer" href="http://www.toneclock.org/"><li><yellow>Tone Clock</yellow></li></a>
            <a target="_blank" rel="noopener noreferrer" href="http://www.aeiou.at/aeiou/musikkolleg/hauer/ha-spi02.htm"><li><red>Zwölftonspiel</red></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://niklas-luhmann-archiv.de/bestand/zettelkasten/zettel/ZK_2_NB_9-8g_V"><li><blue>Zettelkasten</blue></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.nasa.gov/connect/sounds/index.html"><li><yellow>NASA-Klänge</yellow></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://soundscape.world/"><li><red>Soundscape</red></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://de.wikisource.org/wiki/Gesammelte_Schriften_%C3%BCber_Musik_und_Musiker"><li><blue>Schumann</blue></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://lsr.di.unimi.it/LSR/Search?q=glissando&s=20&m=10"><li><yellow>LilyPond</yellow></li></a>
          </ul>
        </div>  
        <div class="column" >  
          <ul id="listerechts"> 
            <a target="_blank" rel="noopener noreferrer" href="https://rinopetrozziello.com/works/pages/multimediainstallation.html"><li><red>Petrozziello-Projects</red></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://ojack.xyz/PIXELSYNTH/"><li><blue>Pixelsynth</blue></li></a>
            <a target="_blank" rel="noopener noreferrer" href="http://www.anexperimentwithtime.com/?page_id=139"><li><yellow>Time</yellow></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.bachproject.net/#latest-news"><li><red>Bach-Projects</red></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.henle.de/blog/de/2019/01/07/zu-einer-unerklaerlichen-fermaten-notation-in-mozarts-streichquartett-kv-428/"><li><blue>Fermaten bei Mozart</blue></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://van-magazine.com/mag/spectral-music/"><li><yellow>Spectral Music</yellow></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.ircam.fr/innovations/abonnements-et-logiciels/"><li><red>IRCAM Softwares</red></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/watch?v=FY8SwIvxj8o"><li><blue>Country Mashup</blue></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.cnvill.net/mfgriff.htm"><li><yellow>Morton Feldman</yellow></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.hellocatfood.com/databending-using-audacity/"><li><red>Databending</red></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://bachbybike.com/de/bach-by-bike-ensemble/"><li><blue>Bach by Bike</blue></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://preview.redd.it/ro9fg5m472d51.gif?format=mp4&s=dc12254d170fd8379003c16bb14b508577ead495"><li><yellow>Loop</yellow></li></a>
            <a target="_blank" rel="noopener noreferrer" href="http://qiao.github.io/fractal-terrain-generator/demo/"><li><red>Fractal Terrain</red></li></a>
            <a target="_blank" rel="noopener noreferrer" href="https://olidunham.wordpress.com/2010/05/04/ambient-pd-composition/"><li><blue>Ambient Pd</blue></li></a>
          </ul>
        </div>

        <div id="Welle1">
          <svg>
            <path d="M10,10 L50,100 L90,50"></path>
          </svg>
          <script>
            let xs = []
            for (var i = 300; i <= 895; i++) {xs.push(i)}
            let t = 0
            function animate() {
              let points = xs.map(x => {
                let y = 25 + 20 * Math.sin((x + t) / 10)
                return [x, y]
              })
              let path = "M" + points.map(p => {
                return p[0] + "," + p[1]
              }).join(" L")
              document.querySelector("path").setAttribute("d", path)
              t += 0.5
              requestAnimationFrame(animate)
            }
            animate()
          </script>
        </div>
      </section>

      <section id="Kontakt">
        <h2><?php echo $lang['Kontakt'] ?></h2>
          <form id="form" class="fcf-form-class" method="post" action="contact-form-process.php">
            <label for="Name" class="fcf-label"><?php echo $lang['Name'] ?></label>
            <div class="fcf-input-group">
              <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
            <div class="fcf-form-group">
              <label for="Email" class="fcf-label"><?php echo $lang['E-Mail-Addresse'] ?></label>
            <div class="fcf-input-group">
              <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
            <div class="fcf-form-group">
              <label for="Message" class="fcf-label"><?php echo $lang['Nachricht'] ?></label>
              <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
              </div>
            </div>
            <div class="fcf-form-group">
              <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block"><?php echo $lang['senden'] ?></button>
            </div>
          </form>

        <div id="Welle2">
          <svg id="wave" viewBox="10 0 1020 1">
            <polyline stroke="cyan" ></polyline>
          </svg>
        </div>
        <script>
          const svg = document.getElementById('wave')
          const lines = svg.querySelectorAll("polyline")
          const width = svg.viewBox.baseVal.width
          const amp = 20
          const freq = 15
          let points = []
          let counter = 0
          let speed = 1;
          function setPoints() {
            let x, y, step = 0
            points = []
            for (x = 0; x <= 1013; x++) {
              x < width / 2 ? step++ : step-- 
              y = (step / 400 * amp) * Math.sin((x + counter) / 200 * freq)
              points.push(x + 13, y)
            }
            return points.join(" ")
          }
          function animateWaves() {
            setPoints()
            lines.forEach(line => line.setAttribute("points", points))
            counter += speed
            requestAnimationFrame(animateWaves)
          }
          animateWaves()
        </script>
      </section>

    </div>
  </div>

      <section id="footer"style="height: 209px; width:100%; clear:both;">
        
        <div id="innerfooter">
          <div class="column" >  
            <h3>Haftungsausschluss</h3>
            <p>Der Autor übernimmt keinerlei Gewähr hinsichtlich der inhaltlichen Richtigkeit, Genauigkeit, Aktualität, Zuverlässigkeit und Vollständigkeit der Informationen. Haftungsansprüche gegen den Autor wegen Schäden materieller oder immaterieller Art, welche aus dem Zugriff oder der Nutzung bzw. Nichtnutzung der veröffentlichten Informationen, durch Missbrauch der Verbindung oder durch technische Störungen entstanden sind, werden ausgeschlossen. Der Autor behält es sich ausdrücklich vor, Teile der Seite oder die gesammte Seite ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.</p>
          </div>
          <div class="column" >    
            <h3>Haftung für Links</h3>
            <p>Verweise und Links auf Webseiten Dritter liegen ausserhalb unseres Verantwortungsbereichs. Es wird jegliche Verantwortung für solche Webseiten abgelehnt. Der Zugriff und die Nutzung solcher Webseiten erfolgen auf eigene Gefahr des Nutzers oder der Nutzerin.</p>
          </div>
        </div>
        <div id="innerfooter2">
        <p>Till Jonas Umbach - YOURE E-MAIL GOES HERE</p>
        </div>
      </section>

</body>

  <!-- Calendly badge widget begin 
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/umbach?hide_gdpr_banner=1&background_color=f8f8f8&primary_color=888888', text: 'Treffen planen', color: '#7320ac', textColor: '#ffffff', branding: false }); }</script>
  Calendly badge widget end -->

</html>

 







