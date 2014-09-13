<?php
/**
 * @package WordPress
 * @subpackage Rêver_Responsive
 * @since Rêver Responsive 1.0
 */

global $facebookEvents;

?>
<?php if (count($facebookEvents)): ?>
<section class="upcoming-events">
    <div class="container">
        <h2 class="bordered text-center">
            <span class="separator"><span></span></span>
            <span class="title">Upcoming Events</span>
            <span class="separator"><span></span></span>
        </h2>
        <div class="row">
            <?php $counter = 0; foreach ($facebookEvents as $event): ?>
            <?php
                $eventDate = strtotime($event['start_time']);
                $currentTime = strtotime(current_time("Y/m/d H:i"));
                if ($currentTime < $eventDate):
            ?>
            <div class="col-sm-6 col-md-3">
                <a class="event" href="<?php the_permalink(); ?>">
                    <span class="date">
                        <span class="day"><?php echo date('d', $eventDate); ?></span>
                        <span class="month"><?php echo date('F', $eventDate); ?></span>
                    </span>
                    <span class="event-details">
                        <span class="h3"><?php echo $event['name']; ?></span>
                        <span class="info">
                            <?php echo date('g:ia', $eventDate); ?><br>
                            <?php if (!empty($event['location'])): ?>@ <?php echo $event['location']; ?><?php endif; ?>
                        </span>
                    </span>
                    <span class="btn btn-success">Learn More <i class="fa fa-arrow-right"></i></span>
                </a>
            </div>
            <?php $counter++; endif; ?>
            <?php if ($counter == 4) break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
