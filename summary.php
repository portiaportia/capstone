<section class="ppbanner">
	<p class="left-arrow"><a href="#summary1">&lt;</a></p>
    <p>Pay Period 5/16 - 5/30/2014</p>
</section>

<section class="impact">
	
	<?php createImpactHeaderTop("Commutes", "#commutes-expand"); ?>
    	<section class="header-impact-com">
            <img src="images/bus.png"/>
            <section class="num-trips">
                <p class="big-num">10</p>
                <p>trips</p>
            </section>
        </section>
    	<section class="header-impact-com">
            <img src="images/walk.png"/>
            <section class="num-trips">
                <p class="big-num">5</p>
                <p>trips</p>
            </section>
        </section>
        <section class="header-impact-com">
            <img src="images/bike.png"/>
            <section class="num-trips">
                <p class="big-num">5</p>
                <p>trips</p>
            </section>
        </section>
    <?php createImpactHeaderBottom("#commutes-expand"); ?>
    <div id="commutes-expand" class="impact-section">
        <a class="impact-hide-show" href="#commutes-expand">
            <div id="d3Chart-commutes" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
			<script>
                buildChart("#d3Chart-commutes", bonusesData);
            </script>
        </a>
    </div>
</section>

<section class="impact">
	<?php createImpactHeaderTop("Bonus Amount", "#bonuses-expand"); ?>
    	<section class="header-impact-3of4">
            <p class="big-num">$42</p>
        </section>
    	<section class="header-impact-1of4">
            <p class="med-num">$216</p>
            <p class="tiny-text">year to date</p>
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
    <?php createImpactHeaderTop("CO<sub>2</sub> Reductions", "#carbon-expand"); ?>
    	<section class="header-impact-3of4">
            <p class="big-num">37 lbs</p>
        </section>
    	<section class="header-impact-1of4">
            <p class="med-num">197 lbs</p>
            <p class="tiny-text">year to date</p>
        </section>
    <?php createImpactHeaderBottom("#carbon-expand"); ?>
    <div id="carbon-expand" class="impact-section">
        <a class="impact-hide-show" href="#carbon-expand">
            <div id="d3Chart-carbon" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
            <script>
                buildChart("#d3Chart-carbon", carbonData);
            </script>
        </a>
    </div>
</section>