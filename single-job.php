<?php get_header() ?>
<?php

/**
 * advanced custom fields needed for custom post-type 'job'
 * job_title (text)
 * job_description (WYSIWIG editor)
 * location (text)
 * department (select)
 */
$job_title = get_field('job_title');
$job_description = get_field('job_description');
$location = get_field('location');
$department = get_field('department');

?>
<div class="d-flex container col-10 flex-column">
    <div class="breadcrumb mt-5">
        <?php get_job_breadcrumb() ?>
    </div>

    <h1 class="fp-h-b ps-sm-5 pt-sm-4 pb-sm-4 my-5"><?php echo $job_title ?></h1>

    <ul class="d-flex justify-content-evenly list-unstyled">
        <li class="text-muted mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
            </svg>
            <?php echo $department ?>
        </li>
        <li class="text-muted mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
            <?php echo $location ?>
        </li>
        <li class="text-muted mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
            </svg>
            Posted on <?php echo get_the_date() ?>
        </li>
    </ul>
    <button class="btn btn-outline-secondary w-25 align-self-center rounded-pill mb-5">Apply now!</button>

    <?php echo $job_description ?>
    <button class="btn btn-outline-secondary w-25 align-self-center rounded-pill">Apply now!</button>
</div>
<?php get_footer() ?>