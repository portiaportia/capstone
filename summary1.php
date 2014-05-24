<section class="ppbanner">
	<!--<p class="left-arrow"><a href="#">&lt;</a></p>-->
    <p>Pay Period 5/19 - 5/30/2014</p>
    <p class="right-arrow"><a href="#summary">&gt;</a></p>
</section>

<section class="impact">
	
	<?php createImpactHeaderTop("Commute", "#commutes-expand1"); ?>
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
    <?php createImpactHeaderBottom("#commutes-expand1"); ?>
    <div id="commutes-expand1" class="impact-section">
        <a class="impact-hide-show" href="#commutes-expand1">
            <div id="d3Chart-commutes1" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
			<script>
                buildChartMulti("#d3Chart-commutes1", commuteData, "5/19/14");
            </script>
        </a>
    </div>
</section>

<section class="impact">
	<?php createImpactHeaderTop("Bonus", "#bonuses-expand1"); ?>
        <section class="col1of2">
           <p class="pix-stat-number-big">$25</p>
        </section>
        <section class="col1of2 right">
           <p class="pix-stat-number">$174</p>
           <p class="pix-stat-label-small">year to date</p>
        </section>
    <?php createImpactHeaderBottom("#bonuses-expand1"); ?>
    <div id="bonuses-expand1" class="impact-section">
        <a class="impact-hide-show" href="#bonuses-expand1">
            <div id="d3Chart-bonuses1" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
			<script>
                buildChart("#d3Chart-bonuses1", bonusesData1);
            </script>
        </a>
    </div>
</section>

<section class="impact">
    <?php createImpactHeaderTop("CO<sub>2</sub> Reduction", "#carbon-expand1"); ?>
        <section class="col1of2">
           <p class="pix-stat-number-big">30 lbs</p>
        </section>
        <section class="col1of2 right">
           <p class="pix-stat-number">160 lbs</p>
           <p class="pix-stat-label-small">year to date</p>
        </section>
    <?php createImpactHeaderBottom("#carbon-expand1"); ?>
    <div id="carbon-expand1" class="impact-section">
        <a class="impact-hide-show" href="#carbon-expand1">
            <div id="d3Chart-carbon1" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
            <script>
                buildChart("#d3Chart-carbon1", carbonData1);
            </script>
        </a>
    </div>
</section>