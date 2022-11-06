<style>
#hidden{
    display:none;
}


#test {
    justify-content: center;
}

</style>


<h1>Profil</h1>
<p>
    Ich war 23 Jahre lang als Metallbaukonstrukteur tätig. Aber aus gesundheitlichen Gründen musste ich meinen erlernten Beruf aufgeben. Da ich mich seit meiner Kindheit bereits an Computertechnik interessiere, habe ich entschieden, in die IT-Branche einzusteigen.
    Unter der verschiedenen Zweigen in der IT-Branche interessiere ich mich sehr für die Webentwicklung. Seither erstelle ich Webtools und Webseiten und lerne ständig neue Programmiersprachen und Technologien.
</p>
<br>
<div id="profileLayout">
    <div>
        <h2>Programmiersprachen</h2>
        <div class="profileInline">
            <?php
                $codesLang = array("HTML5", "CSS3", "PHP8.1", "Javascript", "MySQL", "Tailwind CSS", "Twig");
                for($i=0; $i<count($codesLang); $i++){
                    echo "<div class='profileCodes'>";
                    echo "<p>" . $codesLang[$i]. "</p>";
                    echo "</div>";
                }
            ?>
        </div>


        <h2>Software Kenntnisse</h2>
        <div class="profileInline">
            <?php
                $usePrograms = array("Visual Code Studio", "Ubuntu", "Git");
                
                for($i=0; $i<count($usePrograms); $i++){
                    echo "<div class='programExperiences'>";
                    echo "<p>" . $usePrograms[$i]. "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>

    <div class="centerPic">
        <br><br><br>
        <img src="img/karin.jpg" alt="Karin Giang" class="showPic"></img>
        <br><br>
        <div id="cv">
            <a href="" target="_blank">Lebenslauf herunterladen (PDF)</a>
        </div>
    </div>
</div>




<div id="hidden">
<p>Ich bin in Frauenfeld geboren und aufgewachsen in Wängi TG.
Aufgewachsen bin ich in einer chinesischen Familie. Aber ich selbst fühle mich ganz und gar nicht wie eine Chinesin. Mein älterer Bruder und meine ältere Schwester haben auch schon Familien gegründet. Ich bin seit 2010 glücklich verheiratet und habe eine Tochter.</p>


<h3>Computer – Mein Leben</h3>

<p>Im Jahr 1987 legte meinen Vater ein Computer zu. Er hat gemerkt, dass Computertechnik eine Zukunft hat. Zu dieser Zeit war nicht üblich, private Haushalte Computer zu haben.
Ich habe damals die mitgelieferten Spiele nicht interessiert, sondern eher die Anwendung “Basic”. Mit einem mitgelieferten Anleitungsbuch lernte ich die Grundlagen für die Programmierung.
Damals war ich erst 5 Jahre alt.
<br>
Als ich noch ein Teenanger war, hatte ich mit Videospielen angefangen. Jedoch offline. Und ich begann mich erneut zu interessieren, die man Videospiele entwickeln. Online Videospiele interessiere ich nicht so sehr.
<br>
Mit jungen Alter von 22 Jahren konnte ich von meine Eltern ausziehen und stehe bereits auf eigenen Füssen.
<br>
Ich lernte zu dieser Zeit meine Schwiegerelter-Familie kennen. Meine beide Schwiegeeltern sind Software-Entwicklern für Börsenanalyse. Durch meine Schwiegermutter hatte ich auch zu dieser Zeit die Programmiersprache PERL kennengelernt. Zu etwa derselben Zeit, hatte ich auch Linux Ubuntu entdeckt.
<br>
Bis heute, stand 2022, habe ich selber nebst PERL noch PHP, HTML, CSS und Javascript angeeignet. Ich mache auch sehr gerne Webseiten.
</p>

<h3>Andere Hobbys?</h3>
<p>Programmieren ist mein Hobby. Sonst schaue ich auch gerne Animes an. Lese Mangas und Bücher. Ich habe auch grosse Interesse an chinesischen Geschichte. Oftmals gehe ich joggen. Ich gehöre zu einen Verein über Anime/Mangas.</p>

<h3>Geschlechtsindentität</h3>
<p>Ich bin offiziell noch männlich mit der Name Martin.
Jedoch in der Freizeit werden meine Freunde mich immer mehr als weiblich ansprechen und ansehen.
Momentan bin ich noch sehr beschäftigt mit der beruflichen Wandel. Sobald ich mit der neuen Branche stabilisiert habe, werde ich die Hormontheraphie beginnen.</p>

<div id="information">
    <h3>Sonstige Informationen:</h3>
    <p>Geburtstagsdatum:<br>
    15. Februar 1982<br><br>
    Zivilstand: verheiratet<br>
    Nationalität: Schweiz<br>
    Heimat: Wängi TG</p>
</div>

<br><br>
<h2>Kontaktdaten:</h2>
<?php include "pages/footer.php"; ?>
</div>
