<!-- Your content goes here -->
<main class="mdl-layout__content">
    <div class="page-content content">

    <div class="bread">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="margin-top: 50px;">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
            
        </ol>
    </nav>
    </div>    

    <div class="t-body">

            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                
                <tbody>

                <?php foreach ($admins as $admin_profile): ?>

                    <!-- <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p> -->
                
                    <div class="dash-card float-left">
                    <div class="demo-card-square mdl-card mdl-shadow--2dp" >
                        
                        <div class="card-bg">

                            <img src="<?= base_url() . $admin_profile['imageurl']?>" class="img-card" alt="User Image">

                            <div class="mdl-card__title mdl-card--expand" style=" margin-top: 240px; margin-bottom: 0px;">
                                <h2 class="mdl-card__title-text"><?= $admin_profile['designation'] ;?> </h2>
                            </div>
                        </div>
                        
                        <div class="mdl-card__supporting-text">
                            <?= $admin_profile['firstname'] . " " .$admin_profile['lastname'] ;?>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect a-tag" href="<?php echo site_url('Admin/viewProfile/'.$admin_profile['id']); ?>">View Profile</a>
                        </div>
                    </div>
                    </div>

                <?php endforeach; ?>

            
            </tbody>
        </table>
    </div>
    <div class="fab-dash container">
        <!-- Colored FAB button with ripple -->
        <a href="<?php echo site_url('Admin/addAdmin') ?>">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-color--indigo-400" style="float: right;">
            <i class="material-icons">add</i>
            </button>
        </a>
    </div>
</main>