<section class="tabs-nav">
    <a href="#" title="Next" class="scroll-left">
        <i class="fas fa-arrow-circle-left"></i>
    </a>


    <div class="tab-links">
        <? foreach ($case_studies as $key => $case_study) { ?>
            <? if ($case_study->posts->count() > 0 || Larafish::userHasRole('Admin')) { ?>
                <a href="#<?= $case_study->slug ?>" title="<?= $case_study->slug ?>" class="tab-nav-item <?= $key === 0 ? 'active' : '' ?>" data-tab="<?= $case_study->slug ?>" id="<?= $case_study->slug ?>"><?= $case_study->title ?></a>
            <? } ?>
        <? } ?>
    </div>

    <a href="#" title="Previous" class="scroll-right">
        <i class="fas fa-arrow-circle-right"></i>
    </a>
</section>

<section class="tabs-list">
    <? foreach ($case_studies as $key => $case_study) { ?>
        <article class="tab-item <?= $key === 0 ? 'active' : '' ?>" data-tab-item="<?= $case_study->slug ?>">
            <? if ($case_study->posts->count() > 0) { ?>
                <? foreach ($case_study->posts as $key => $post) { ?>
                    <div>
                        <div class="tab-images">
                            <div class="w-100">
                                <?= $post->human_photo_one ?>
                            </div>

                            <div class="w-40">
                                <?= $post->human_photo_two ?>
                            </div>

                            <div class="w-60">
                                <?= $post->human_photo_three ?>
                            </div>
                        </div>

                        <div class="tab-content">
                            <div>
                                <h2><?= $post->title ?></h2>
                            </div>

                            <div>
                                <?= $post->description ?>
                            </div>

                            <div>
                                <h3>Solution</h3>
                            </div>

                            <div>
                                <?= $post->content_one ?>
                            </div>

                            <div>
                                <h3>Result</h3>
                            </div>

                            <div>
                                <?= $post->content_two ?>
                            </div>

                            <div>
                                <a href="/contact-us" title="Get Started With WIC Today" class="button">Get Started With WIC Today</a>
                            </div>
                        </div>
                    </div>
                <? } ?>
            <? } else if ($case_study->posts->count() === 0 && Larafish::userHasRole('Admin')) { ?>
                <div class="container">
                    <div class="card basic">
                        <header>
                            <h2 class="title">No Case Studies found.</h2>
                        </header>

                        <div class="content">
                            <? if (Larafish::userHasRole('Admin')) { ?>
                                <p>
                                    <a href="<?= URL::route('admin.case-studies-posts.create', 'category=' . $case_study->id) ?>" class="button">Create Case Study</a>
                                </p>
                            <? } else { ?>
                                <p>Please view different Case Study</p>
                            <? } ?>
                        </div>
                    </div>
                </div>
            <? } ?>
        </article>
    <? } ?>
</section>