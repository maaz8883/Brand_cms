
<?php 

$label=['One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten'];
$isFirst = true;
$counter = 0;

foreach ($faqData as $question => $answer) {
	 $collapseId = 'collapse' .  $label[$counter];
    
    $faqs[] = [
        'id' => $collapseId,
        'question' => $question,
        'answer' => $answer,
        'active' => $isFirst,
    ];
    
    if ($isFirst) {
        $isFirst = false;
    }
    $counter++;
}

?> 

<section class="lozad bg" data-background-image="<?= getImagePath('assets/img/', 'faq-contact');?>">
    <div class="overlay-light py-5">
        <div class="container-xl py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="f-40 fw-700">frequently asked questions</h2>
                    <div class="accordion text-start" id="accordionExample">
                        <?php foreach ($faqs as $faq): ?>
                            <div class="accordion-item mb-4">
                                <h2 class="accordion-header">
                                    <button class="accordion-button f-18 <?= $faq['active'] ? '' : 'collapsed' ?>" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#<?= $faq['id'] ?>"
                                            aria-expanded="<?= $faq['active'] ? 'true' : 'false' ?>" 
                                            aria-controls="<?= $faq['id'] ?>">
                                        <?= $faq['question'] ?>
                                    </button>
                                </h2>
                                <div id="<?= $faq['id'] ?>" 
                                     class="accordion-collapse collapse <?= $faq['active'] ? 'show' : '' ?>" 
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?= $faq['answer'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6">
					<h2 class="f-40 fw-700">We’re Here for Authors Like You</h2>
					<p>From first draft to global distribution, our team of professional book publishers is here to support your author journey. Whether you need advice or full publishing services, we’ve got you covered.</p>
					<?php require 'inc/contact.php'; ?>
				</div>
            </div>
        </div>
    </div>
</section>