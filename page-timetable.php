<?php
/**
 * 	Template Name: מערכת שעות
 *

 */

get_header(); 
	while ( have_posts() ) : the_post();?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<h2 class="page-title"><?php the_title();?></h2>
			
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				
				<?php the_content();?>
			
			</div>
		</div>
		<div class="table-responsive">
		<?php 
		function ClassDetails($timeOfDay,$row){
  			
			echo '<td class="';
			if($timeOfDay[$row]['prominent'] == true){
				echo 'prominent';}
			echo '">';
			echo '<div class="hours">'.$timeOfDay[$row]['hours'].'</div>';
			echo '<div class="method">';
			if($timeOfDay[$row]['class-link']){
				echo '<a href="'.$timeOfDay[$row]['class-link'].'">';
			}
			echo $timeOfDay[$row]['class_type'];
			if($timeOfDay[$row]['class-link']){
				echo '</a>';
			}
			echo '</div>';
			echo '<div class="level-teacher">'.$timeOfDay[$row]['level'].'<a href="'.get_the_permalink($timeOfDay[$row]['teacher']).'">';
			
			if($timeOfDay[$row]['teacher']){
				echo ' | '.get_the_title($timeOfDay[$row]['teacher']);
			}
			echo '</a></div>';
			
			if($timeOfDay[$row]['comment']){
						echo '<div class="comment">'.$timeOfDay[$row]['comment'].'</div>';}
				
			echo '</td>';
			
		}	
		$sunday_morning = get_field('sunday-morning');
		$sunday_evening = get_field('sunday-evening');
			
		$monday_morning = get_field('monday-morning');
		$monday_evening = get_field('monday-evening');
			
		$tuesday_morning = get_field('tuesday-morning');
		$tuesday_evening = get_field('tuesday-evening');
			
		$wednesday_morning = get_field('wednesday-morning');
		$wednesday_evening = get_field('wednesday-evening');
			
		$thursday_morning = get_field('thursday-morning');
		$thursday_evening = get_field('thursday-evening');
			
		$friday_morning = get_field('friday-morning');
		$friday_evening = get_field('friday-evening');
		?>
		<table class="timetable table">
		
		<tr>
			<th></th>	
			<th>ראשון</th>	
			<th>שני</th>	
			<th>שלישי</th>	
			<th>רביעי</th>	
			<th>חמישי</th>	
			<th>שישי</th>	
			
		</tr>
			
		<tr>
			<td class="timeof-day">בוקר</td>
			<?php ClassDetails($sunday_morning,0) ?>
			
			<?php ClassDetails($monday_morning,0) ?>
			
			<?php ClassDetails($tuesday_morning,0) ?>
			
			<?php ClassDetails($wednesday_morning,0) ?>
			
			<?php ClassDetails($thursday_morning,0) ?>
			
			<?php ClassDetails($friday_morning,0) ?>
			
		</tr>
			<tr>
			<td></td>
			<?php ClassDetails($sunday_morning,1) ?>
			
			<?php ClassDetails($monday_morning,1) ?>
			
			<?php ClassDetails($tuesday_morning,1) ?>
			
			<?php ClassDetails($wednesday_morning,1) ?>
			
			<?php ClassDetails($thursday_morning,1) ?>
			
			<?php ClassDetails($friday_morning,1) ?>
		</tr>
		<tr>
			<td></td>
			<?php ClassDetails($sunday_morning,2) ?>
			
			<?php ClassDetails($monday_morning,2) ?>
			
			<?php ClassDetails($tuesday_morning,2) ?>
			
			<?php ClassDetails($wednesday_morning,2) ?>
			
			<?php ClassDetails($thursday_morning,2) ?>
			
			<?php ClassDetails($friday_morning,2) ?>
		</tr>
		<tr>
			<td class="timeof-day">אחה"צ<br>ערב</td>
			<?php ClassDetails($sunday_evening,0) ?>
			
			<?php ClassDetails($monday_evening,0) ?>
			
			<?php ClassDetails($tuesday_evening,0) ?>
			
			<?php ClassDetails($wednesday_evening,0) ?>
			
			<?php ClassDetails($thursday_evening,0) ?>
			
			<?php ClassDetails($friday_evening,0) ?>
			
		</tr>
			<tr>
			<td></td>
			<?php ClassDetails($sunday_evening,1) ?>
			
			<?php ClassDetails($monday_evening,1) ?>
			
			<?php ClassDetails($tuesday_evening,1) ?>
			
			<?php ClassDetails($wednesday_evening,1) ?>
			
			<?php ClassDetails($thursday_evening,1) ?>
			
			<?php ClassDetails($friday_evening,1) ?>
		</tr>
		<tr>
			<td></td>
			<?php ClassDetails($sunday_evening,2) ?>
			
			<?php ClassDetails($monday_evening,2) ?>
			
			<?php ClassDetails($tuesday_evening,2) ?>
			
			<?php ClassDetails($wednesday_evening,2) ?>
			
			<?php ClassDetails($thursday_evening,2) ?>
			
			<?php ClassDetails($friday_evening,2) ?>
		</tr>
		
		</table>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php
	endwhile; // End of the loop.
get_footer();
