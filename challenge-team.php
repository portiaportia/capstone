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
<div class="team-leaderboard leaderboard">
    <?php build_team_leaderboard($people_data, $new_team_data);?>
</div> <!--team-leaderboard end-->

