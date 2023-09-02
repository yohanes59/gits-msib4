<section class="portfolio-section sec-padding" id="portfolio">
   <div class="container">
      <div class="row">
         <div class="section-title">
            <h2>Portfolio</h2>
         </div>
      </div>
      <div class="row">

         <?php foreach (PROJECT as $project) : ?>
            <div class="portfolio-item">
               <div class="portfolio-item-thumbnail">
                  <img style="height: 175px;" src="<?= SITE_IMAGES ?>/portfolio/<?= $project["image"] ?>" alt="portfolio item thumb">
               </div>
               <h3 class="portfolio-item-title"><?= $project["name"] ?></h3>
               <button type="button" class="btn view-project-btn">View Project</button>
               <div class="portfolio-item-details">
                  <div class="description">
                     <p><?= $project["desc"] ?></p>
                  </div>
                  <div class="general-info">
                     <ul>
                        <li>Technology - <span><?= $project["tech"] ?></span></li>
                        <li>Learn More - <span><a href="<?= $project["link"] ?>" target="_blank"><?= $project["name"] ?></a></span></li>
                     </ul>
                  </div>
               </div>
            </div>
         <?php endforeach ?>

      </div>
   </div>
</section>

</div>
<!-- Main End -->


<!-- Portfolio Item Details Popup Start -->
<div class="portfolio-popup">
   <div class="pp-inner">
      <div class="pp-content">
         <div class="pp-header">
            <button type="button" class="btn pp-close"><i class="fas fa-times"></i></button>
            <div class="pp-thumbnail">
               <img src="img/portfolio/1.jpg" alt="pp-thumbnail">
            </div>
            <h3></h3>
         </div>
         <div class="pp-body">
         </div>
      </div>
   </div>
</div>