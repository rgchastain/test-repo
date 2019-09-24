<section class="tabs-nav ">
    <a href="#" title="Next" class="scroll-left">
        <i class="fas fa-arrow-circle-left"></i>
    </a>

    <div class="tab-links">
        <a href="#wood" title="Wood" class="tab-nav-item active" data-meta-descriptions="We provide custom materials including wooden crates, bases and pallets.  " data-meta-keywords="wooden crates,Pallets" data-tab="wood" id="wood">Wood</a>
        <a href="#foam" title="Foam" class="tab-nav-item" data-meta-descriptions="We provide custom materials including foam cushioning, components, and protective packaging." data-meta-keywords="Foam Cushioning,Protective packaging" data-tab="foam" id="foam">Foam</a>
        <a href="#paper" title="Paper" class="tab-nav-item" data-meta-descriptions="We provide custom paper materials including custom boxes and heavy duty boxes.  " data-meta-keywords="custom boxes,heavy duty boxes" data-tab="paper" id="paper">Paper</a>
        <a href="#cases" title="Cases & Plastics" class="tab-nav-item" data-meta-descriptions="We provide custom plastic materials including custom cases and plastic cases." data-meta-keywords="Custom cases,Plastic cases" data-tab="cases" id="cases">Cases/Plastics</a>
        <a href="#packing" title="Packing System" class="tab-nav-item" data-meta-descriptions="We can provide our customers with foam in box and void fill packaging.  " data-meta-keywords="foam in box,void fill packaging" data-tab="packing" id="packing">Packing Systems</a>
    </div>

    <a href="#" title="Previous" class="scroll-right">
        <i class="fas fa-arrow-circle-right"></i>
    </a>
</section>

<section class="tabs-list">
    <article class="tab-item active" data-tab-item="wood">
        <?= $components->render('materials-wood') ?>
    </article>

    <article class="tab-item" data-tab-item="foam">
        <?= $components->render('materials-foam') ?>
    </article>

    <article class="tab-item" data-tab-item="paper">
        <?= $components->render('materials-paper') ?>
    </article>

    <article class="tab-item" data-tab-item="cases">
        <?= $components->render('materials-cases-plastics') ?>
    </article>

    <article class="tab-item" data-tab-item="packing">
        <?= $components->render('materials-packing-systems') ?>
    </article>
</section>