<section class="about-section sec-padding" id="about">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>About</h2>
            </div>
        </div>

        <div class="row">
            <div class="about-img">
                <div class="img-box">
                    <img src="<?=SITE_IMAGES?>/Yohanes.png" alt="about-img">
                </div>
            </div>
            <div class="about-text">
                <p><?=ABOUT_ME?></p>
                <h3>Skills</h3>
                <div class="skills">
                    <?php foreach (SKILLS as $skill) : ?>
                        <div class="skill-item">
                            <?= implode($skill) ?>
                        </div>
                    <?php endforeach ?>
                </div>

                <div class="about-tabs">
                    <button type="button" class="tab-item active" data-target="#education">Education</button>
                    <button type="button" class="tab-item" data-target="#experience">Experience</button>
                    <button type="button" class="tab-item" data-target="#certificate">Certificate</button>
                </div>
                <!-- Education Section Start -->
                <div class="tab-content active" id="education">
                    <div class="timeline">
                        <?php foreach (EDUCATIONS as $education) : ?>
                            <div class="timeline-item">
                                <span class="date"><?= $education["year"] ?></span>
                                <h4><?= $education["university"] ?></h4>
                                <p><?= $education["title"] ?></p>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <!-- Education Section End -->

                <!-- Exp Section Start -->
                <div class="tab-content" id="experience">
                    <div class="timeline">
                        <?php foreach (EXPERIENCE as $experience) : ?>
                            <div class="timeline-item">
                                <span class="date"><?= $experience["year"] ?></span>
                                <h4><?= $experience["office"] ?></h4>
                                <p><?= $experience["position"] ?></p>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <!-- Exp Section End -->

                <!-- Certificate Section Start -->
                <div class="tab-content" id="certificate">
                    <div class="timeline">
                        <?php foreach (CERTIFICATE as $certificate) : ?>
                            <div class="timeline-item">
                                <span class="date"><?= $certificate["from"] ?> - (<?= $certificate["year"] ?>)</span>
                                <h4><a href="<?= $certificate["link"] ?>" target="_blank"><?= $certificate["name"] ?></a></h4>
                                <p><?= $certificate["desc"] ?></p>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <!-- Certificate Section End -->
                <a href="CV Yohanes Cahyadi.pdf" target="_blank" class="btn">Download CV</a>
                <a href="#contact" class="btn link-item">Contact Me</a>
            </div>
        </div>
    </div>
</section>