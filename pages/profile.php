<h1>Mein Profil</h1>
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
                $codesLang = array("HTML5", "CSS3", "PHP8.1", "Javascript", "MySQL", "Tailwind CSS", "Twig", "Perl");
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
            <a href="CV%20Karin%20Giang.pdf" target="_blank">Mein Lebenslauf (PDF)</a>
        </div>
    </div>
</div>