<section class="contact">
    <article class="contact-form">
        <? if ($form) { ?>
            <?= $form->render() ?>
        <? } else { ?>
            <? if (Larafish::userHasRole('Admin')) { ?>
                <p>The form for this page was not found, please create a Contact Us Form in the Form Builder.</p>
            <? } else { ?>
                <p>Contact Form was not found.</p>
            <? } ?>
        <? } ?>
    </article>

    <article class="contact-information">
        <?= $components->render('contact-us-contact-us-left') ?>
        <?= $components->render('contact-us-contact-us-right') ?>
    </article>
</section>