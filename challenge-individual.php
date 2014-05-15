<section class="challenge-title">
    <div class="left">
        <h3>Ride in the Rain</h3>
        <h4>Can we make 25,000 bike trips?</h4>
    </div>
    <div class="right">
        <p class="days-left">5 days left</p>
    </div>
    <?php build_progress_bar(10000, 25000); ?>
</section>
<div class="invididual-leaderboard leaderboard">

	<?php create_people_list($people_data); ?>
</div>
