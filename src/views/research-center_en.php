<?php
require_once '../system/system.php';

if (isset($_GET['show_center'])) {
    $show_center = $_GET['show_center'];
} else {
    header("Location: home.php");
    exit();
}

function center_name_en($center_code) {
    switch ($center_code) {
        case 'TFP':
            return 'Research Center in Thin Film Physics';
            break;
        case 'PPP':
            return 'Research Center in Particle Beam and Plasma Physics';
            break;
        case 'NSP':
            return 'Research Center in Nanoscale Physics';
            break;
        case 'IGP':
            return 'Research Center in Integrated Physics';
            break;
        case 'CTP':
            return 'Research Center in Computational and Theoretical Physics';
        default:
            return 'Thailand Center of Excellence in Physics';
            break;
    }
}

$center = center_name_en($show_center);

doc_head($center);
?>
</head>

<body>
    <div class="container">
        <?php get_includes('header_en'); ?>
        <div class="row">
            <?php
            if ($show_center == 'TFP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The missions of the Research Center in Thin Film Physics are to conduct research and development in thin films, and to create a body of knowledge essential to the development of advanced technology in physics. Such knowledge can then be applied to the industrial sector in order that it might be further developed commercially. In addition, the center serves as a source of highly qualified personnel who are able to conduct research and develop technology concerning thin film physics.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The center is comprised of four laboratories which have conducted research for more than 10 years based on thin film materials.  They are:
                </p>
                <ol>
                    <li>Semiconductor Physics Research Laboratory, Department of Physics, Faculty of Science, Chulalongkorn University</li>
                    <li>Solid State Physics Laboratory, Department of Physics, Faculty of Science, Khon Kaen University</li>
                    <li>Applied Physics Research Laboratory, Department of Physics and Materials, Faculty of Science, Chiang Mai University</li>
                    <li>Thin Film Technology Laboratory, Department of Physics, Faculty of Science, King Mongkut’s University of Technology Thonburi</li>
                </ol>
                <p>
                    Research and development emphasizes the thin films of semiconductors: metal and metal oxides such as copper indium diselenide, zinc oxide, copper oxide, titanium dioxide, indium, tin oxide, etc.  These are grown and restructured, ranging from nanometer to micrometer scales, by means of various deposition methods such as sputtering technique, evaporation, and chemical reaction techniques.  Some inventions developed by the center have been used to develop, for example, solar energy equipment, energy-saving devices, and gas detectors.
                </p>
                <?php
            } elseif ($show_center == 'PPP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Outer space, according to popular understanding, appears to a region of complete emptiness; however, in reality, it is a bustling region of active particles and plasma.  It is said that 99% of what can be seen in the universe is in a plasma state.  Particles and plasma, therefore, have played important roles in the formation of all matter since the Big Bang itself; and they are also a major source of energy on earth today.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Research Center in Particle Beam and Plasma Physics generates different species of particle beams and low-temperature plasmas in laboratories, with the objectives of conducting research in the fields of particle beam and plasma physics, and the development of related technologies which will enhance a deeper scientific knowledge and increase the number of young trained physicists. As a spin-off, the center is concerned with applying the expertise necessary to strengthen local education, as well as the industrial and agricultural sectors./p>
                <p>The PBPP consists of seven research units, as follows:</p>
                <ol>
                    <li>Ion Beam Physics and Applications Research Unit</li>
                    <li>Femtosecond Electron and Photon Pulses Research Unit</li>
                    <li>Plasma Physics for Novice Materials Research Unit</li>
                    <li>Plasma and Advanced Materials Technology Research Unit</li>
                    <li>Plasma for Surface Science Research Unit</li>
                    <li>Plasma Technology for Agricultural Applications Research Unit</li>
                    <li>Cells and Synthetic Membrane Research Unit</li>
                </ol>
                <span>This center is operated in collaboration with the following five universities:</span>
                <ul>
                    <li>Chiang Mai University</li>
                    <li>Chulalongkorn University</li>
                    <li>Burapha University </li>
                    <li>Walailak University</li>
                    <li>Prince of Songkla University</li>
                </ul>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Currently the center is focusing on several areas of research, covering: microfluidics and microfabrication techniques for biomedical applications; ion beam bioengineering; generation and applications of THz radiation from short electron pulses; functional nanocoating layers on various materials (such as woven materials, dental materials, and food packaging); surface modification by plasma processing for fuel cell and industrial material development; microwave and plasma sources for agricultural applications; and modification of biomaterial membranes by plasma and particle beams.</p>
                <p>
                    <img class="img-responsive" style="margin: 0 auto;" src="http://www.thep-center.org/images/img_en/cluster2_en_clip_image002.jpg">
                </p>
                <p class="text-center"><em>[“The low-energy ion range in DNA”, Phys. Med. Biol. 54 (2009) 5009-5022.]</em></p>
                <p>&nbsp;</p>

                <p><img class="img-responsive" style="margin: 0 auto;" src="http://www.thep-center.org/images/img_en/cluster2_en_clip_image004.jpg"></p>
                <p class="text-center">
                    PIXE spectrum of Thai local natural ruby.<br>
                    <em>[“Gemological Modification of Local Natural Gemstones by Ion Beams”, Surface & Coating Technology 203(2009)2788-2792.]</em>
                </p>
                <p>&nbsp;</p>
                
                <p><img class="img-responsive" style="margin: 0 auto;" src="http://www.thep-center.org/images/img_en/cluster2_en_clip_image006.jpg"></p>
                <p class="text-center">
                    SEM image of 1.6 ?m wide channels produced by using 3 MeV 4He2+ ions in a 7.5 ?m thick PMMA.<br>
                    <em>[“Programmable Proximity Aperture Lithography with MeV Ion Beams”,<br>
Journal of Vacuum Science and Technology B 26(5), Sep/Oct 2008,1732-1739.]</em>
                </p>
                <p>&nbsp;</p>

                <?php
            } elseif ($show_center == 'NSP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Research Center in Nanoscale Physics is set up in collaboration with three institutes: King Mongkut’s Institute of Technology Ladkrabang; Suranaree University of Technology; and Synchroton Light Research Institute (Public Organization).  This is an academic and research collaboration between these institutes, aiming at exchanging related knowledge, personnel, researchers, students, devices and equipment.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The center is comprised of the Nanoelectronics Research Unit of King Mongkut’s Institute of Technology Ladkrabang; the Nanospectroscopy Research Unit of Suranaree University of Technology; and the Synchroton Light Research Institute. The center’s missions are to produce personnel specializing in nanotechnology, to conduct research, and to develop and analyze materials in the form of thin films at a nanometer level, focusing on generating new knowledge and promoting its application in the industrial sector and for the benefit of society as a whole.  In addition, the center aims to promote academic cooperation with other national universities and research institutes, resulting in a nationwide academic network.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The center is presently carrying out a great deal of research, the results of which have already materialized into many practical industrial uses of thin film technology at the nanometer level. Such results include pressure sensors, pH sensors, photodetectors, organic light-emitting diodes (OLED), solar cells, and “labs-on-a-chip.”  Some parts of these devices can be made into a plastic sheet which is flexible, wear-resistant and reasonably priced.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The center’s highly acclaimed research also includes nanocrystal glasses which can filter every frequency in the ultraviolet spectrum.  The glasses are now used in such diverse fields as forensic science, the metal welding industry, and in tiger-prawn selection.</p>
                
                <?php
            } elseif ($show_center == 'IGP') {
                ?>
                <h2 class="text-center"><?php echo $center; ?></h2>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This center originated from the cooperation of 14 universities nationwide. The spearheads of the establishment are Mahidol University, Srinakharinwirot University and King Mongkut’s University of Technology Thonburi, integrating the manpower and experience of the 14 universities to conduct interdisciplinary research whose core discipline is physics.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The center is divided into six units:</p>
                <ol>
                    <li>The Physics Studies Research Unit studies and conducts research on innovative techniques for teaching and learning physics, and physics curriculum development.  The center also provides academic services for the community, creating a cooperative network to solve problems encountered in teaching physics in schools nationwide.</li>
                    <li>The Applied Visual Science Research Unit studies and conducts research on development of laser beams and their applications to industry.</li>
                    <li>The Applied Geophysics Research Unit studies and conducts research on geologic faults in the country, and the earthquake risks facing the country.  The unit also searches for natural resources by using geophysical knowledge and techniques.  </li>
                    <li>The Biophysics Research Unit studies and conducts research on systems of cancer cells and bacterial cells that cause leptospirosis, as well as constructing chemical probes to detect this disease or the properties of these cells.  The unit aims to add a new dimension to cancer treatment in Thailand.</li>
                    <li>The Material Physics Research Unit seeks ways to apply physics and polymer science so that synthesized materials can be used in various ways, instead of merely being considered cheap materials.  One way to add value to these materials is to engineer chains of polymer molecules by means of polymer physics.  Moreover, the unit can synthesize substances and thin films, and analyze and examine their molecular structures. </li>
                    <li>The Astrophysics and Space Physics Research Unit studies and conducts research on solar storms and related issues, such as analysis of the movement of particles in space under the influence of turbulent magnetic fields, and non-linear dynamics that takes place in space plasmas and other kinds of plasma.  Much of their research is based on analysis of data from the Princess Sirindhorn Neutron Monitor at Doi Inthanon, Chiang Mai province</li>
                </ol>
                <p>&nbsp;</p>

                <?php
            } elseif ($show_center == 'CTP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <h3 class="text-center"></h3>
                <img class="img-responsive" style="margin:0 auto;" src="../images/under-construction.jpg">

                <?php
            } elseif ($show_center == 'ThEP') {
                ?>
                <h2 class="text-center"><? echo $center; ?></h2>
                <h3 class="text-center"></h3>
                <img class="img-responsive" style="margin:0 auto;" src="../images/under-construction.jpg">

            <?php } ?>
        </div>
        
         <!-- =========================================================================================== -->     
         
        <p>&nbsp;</p>        
        <div class="row">
            <hr>

            <h3>Research Center</h3>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=TFP">
                    <div class="text-center" style="background-color: #8f8f8f;">                    
                        <h2>TFP</h2>
                        <p>&nbsp;</p>                    
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=PPP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>PPP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=NSP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>NSP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=IGP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>IGP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=CTP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>CTP</h2>
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <a href="research-center_en.php?show_center=ThEP">
                    <div class="text-center" style="background-color: #8f8f8f;">
                        <h2>ThEP</h2>                        
                        <p>&nbsp;</p>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- =========================================================================================== -->

        <?php get_includes('footer_en'); ?>
    </div>
    <!-- /.container -->
</body>
</html>