<section class="ppbanner">
	<p class="left-arrow"><a href="#summary1">&lt;</a></p>
    <p>Pay Period 6/2 - 6/13/2014</p>
</section>

<section class="impact">
	
	<?php createImpactHeaderTop("Commute", "#commutes-expand"); ?>
    	<section class="col1of3">
            <img src="images/bus.png"/>
            <section>
                <p class="pix-stat-number-big">7</p>
                <p class="pix-stat-label">trips</p>
            </section>
        </section>
    	<section class="col1of3">
            <img src="images/walk.png"/>
            <section>
                <p class="pix-stat-number-big">5</p>
                <p class="pix-stat-label">trips</p>
            </section>
        </section>
        <section class="col1of3 right">
            <img src="images/bike.png"/>
            <section>
                <p class="pix-stat-number-big">8</p>
                <p class="pix-stat-label">trips</p>
            </section>
        </section>
    <?php createImpactHeaderBottom("#commutes-expand"); ?>
    <div id="commutes-expand" class="impact-section">
        <a class="impact-hide-show" href="#commutes-expand">
            <div id="d3Chart-commutes" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
			<script>
                buildChartMulti("#d3Chart-commutes", commuteData, "6/2/14");
            </script>
        </a>
    </div>
</section>

<section class="impact">
	<?php createImpactHeaderTop("Bonus", "#bonuses-expand"); ?>
        <section class="col1of2">
           <p class="pix-stat-number-big">$42</p>
        </section>
    	<section class="col1of2 right">
           <p class="pix-stat-number">$216</p>
           <p class="pix-stat-label-small">year to date</p>
        </section>
    <?php createImpactHeaderBottom("#bonuses-expand"); ?>
    <div id="bonuses-expand" class="impact-section">
        <a class="impact-hide-show" href="#bonuses-expand">
            <div id="d3Chart-bonuses" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
			<script>
                buildChart("#d3Chart-bonuses", bonusesData);
            </script>
        </a>
    </div>
</section>

<section class="impact">
    <?php createImpactHeaderTop("CO<sub>2</sub> Reduction", "#carbon-expand"); ?>
    	<section class="col1of2">
           <p class="pix-stat-number-big">37 lbs</p>
        </section>
    	<section class="col1of2 right">
           <p class="pix-stat-number">197 lbs</p>
           <p class="pix-stat-label-small">year to date</p>
        </section>
    <?php createImpactHeaderBottom("#carbon-expand"); ?>
    <div id="carbon-expand" class="impact-section">
        <a class="impact-hide-show" href="#carbon-expand">
            <p class="carbon-note">What does that mean? A sappling will absorb 90lbs of CO<sub>2</sub> in its first 10 years.</p>
            <!-- based on: http://www.epa.gov/cleanenergy/energy-resources/calculator.html#results -->
            <div id="d3Chart-carbon" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
            <script>
                buildChart("#d3Chart-carbon", carbonData);
            </script>
        </a>
    </div>
</section>