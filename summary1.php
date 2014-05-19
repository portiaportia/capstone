<section class="ppbanner">
	<!--<p class="left-arrow"><a href="#">&lt;</a></p>-->
    <p>Pay Period 5/1 - 5/16/2014</p>
    <p class="right-arrow"><a href="#summary">&gt;</a></p>
</section>

<section class="impact">
	
	<?php createImpactHeaderTop("Commutes", "#commutes-expand1"); ?>
    <?php createImpactHeaderBottom("#commutes-expand1"); ?>
    <div id="commutes-expand1" class="impact-section">
        <a class="impact-hide-show" href="#commutes-expand1">
            <div id="d3Chart-commutes" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
			<script>
                buildChart("#d3Chart-commutes", bonusesData);
            </script>
        </a>
    </div>
</section>

<section class="impact">
	<?php createImpactHeaderTop("Bonus Amount", "#bonuses-expand1"); ?>
    <?php createImpactHeaderBottom("#bonuses-expand1"); ?>
    <div id="bonuses-expand1" class="impact-section">
        <a class="impact-hide-show" href="#bonuses-expand1">
            <div id="d3Chart-bonuses" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
			<script>
                buildChart("#d3Chart-bonuses", bonusesData);
            </script>
        </a>
    </div>
</section>

<section class="impact">
    <?php createImpactHeaderTop("CO<sub>2</sub> Reductions", "#carbon-expand1"); ?>
    <?php createImpactHeaderBottom("#carbon-expand1"); ?>
    <div id="carbon-expand1" class="impact-section">
        <a class="impact-hide-show" href="#carbon-expand1">
            <div id="d3Chart-carbon" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
            <script>
                buildChart("#d3Chart-carbon", carbonData);
            </script>
        </a>
    </div>
</section>