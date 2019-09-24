<section class="tabs-nav">
    <a href="#" title="Next" class="scroll-left">
        <i class="fas fa-arrow-circle-left"></i>
    </a>

    <div class="tab-links">
        <a href="#about" title="About" class="tab-nav-item <?= empty($tab) ? 'active' : '' ?>" data-tab="about" id="about">About</a>
        <a href="#careers" title="Careers" class="tab-nav-item <?= $tab === 'careers' ? 'active' : '' ?>" data-tab="careers" id="careers">Careers</a>
        <a href="#locations" title="Locations" class="tab-nav-item <?= $tab === 'location' ? 'active' : '' ?>" data-tab="locations" id="locations">Locations</a>
        <a href="#green" title="Going Green" class="tab-nav-item <?= $tab === 'green' ? 'active' : '' ?>" data-tab="green" id="green">Going Green</a>
        <a href="#certifications" title="Certifications <?= $tab === 'certifications' ? 'active' : '' ?>" class="tab-nav-item" data-tab="certifications" id="certifications">Certifications</a>
        <a href="#leadership" title="The Team" class="tab-nav-item <?= $tab === 'leadership' ? 'active' : '' ?>" data-tab="leadership" id="leadership">Leadership</a>
    </div>

    <a href="#" title="Previous" class="scroll-right">
        <i class="fas fa-arrow-circle-right"></i>
    </a>
</section>

<section class="tabs-list about-list">
    <article class="tab-item values <?= empty($tab) ? 'active' : '' ?>" data-tab-item="about">
        <?= $components->render('about-about') ?>
    </article>

    <article class="tab-item careers column <?= $tab === 'careers' ? 'active' : '' ?>" data-tab-item="careers">
        <div class="tab-images">
            <?= $components->render('about-careers-image') ?>
        </div>

        <div class="tab-content split">
            <div>
                <?= $components->render('about-careers') ?>
            </div>

            <div>
	            <? if ($form) { ?>
		            <?= $form->render() ?>
	            <? } else { ?>
		            <? if (Larafish::userHasRole('Admin')) { ?>
                        <p>The form for this page was not found, please create a Careers Form in the Form Builder.</p>
		            <? } else { ?>
                        <p>Careers Form was not found.</p>
		            <? } ?>
	            <? } ?>
            </div>
        </div>
    </article>

    <article class="tab-item location column <?= $tab === 'location' ? 'active' : '' ?>" data-tab-item="locations">
        <div class="tab-images">
            <div class="w-50">
                <h3 class="locations-header">Asia</h3>

                <div class="locations-map left">
                    <iframe src="https://snazzymaps.com/embed/106834" width="100%" height="400px" style="border:none;"></iframe>
                </div>
            </div>

            <div class="w-50">
                <h3 class="locations-header">North America</h3>

                <div class="locations-map right">
                    <iframe src="https://snazzymaps.com/embed/89866" width="100%" height="400px" style="border:none;"></iframe>
                </div>
            </div>
        </div>

        <div class="tab-content full">
            <div class="container">
                <div class="map-key">
                    <p>
                        <img src="<?= asset('/assets/images/about/page/svgs/manufacturing.svg') ?>" alt="Manufacturing Image" class="de-img">
                        Manufacturing Locations
                    </p>

                    <p>
                        <img src="<?= asset('/assets/images/about/page/svgs/sales.svg') ?>" alt="Sales Image" class="de-img">
                        Sales Locations
                    </p>

                    <p>
                        <img src="<?= asset('/assets/images/about/page/svgs/partner.svg') ?>" alt="Partner Image" class="de-img">
                        Partner Locations
                    </p>
                </div>

                <?= $components->render('about-locations') ?>
            </div>
        </div>
    </article>

    <article class="tab-item green <?= $tab === 'green' ? 'active' : '' ?>" data-tab-item="green">
        <?= $components->render('about-green') ?>
    </article>

    <article class="tab-item certifications <?= $tab === 'certifications' ? 'active' : '' ?>" data-tab-item="certifications">
        <?= $components->render('about-certifications') ?>
    </article>

    <article class="tab-item leadership <?= $tab === 'leadership' ? 'active' : '' ?>" data-tab-item="leadership">
        <?= $components->render('about-team') ?>
    </article>
</section>