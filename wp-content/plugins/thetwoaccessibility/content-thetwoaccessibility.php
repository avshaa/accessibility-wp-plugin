<div class="accessibility-panel" id="accessibility-panel" style="top: <?= $this->getOption('absolute_top_position', 'calc(100% + 15px)'); ?>;">
    <ul class="lines">
        <li class="first">
            <div class="a-square right" id="close-accessibility">
                <i class="fa fa-times active"></i>
            </div>
            <strong>
                <?php _e('Accessibility tools', 'thetwoaccessibility'); ?>
            </strong>
        </li>
        <li data-state="disabled">
            <?php _e('Font size', 'thetwoaccessibility'); ?>
            <div class="a-square" id="accessibility-original-font" tabindex="101">
                <i class="fa fa-times active"></i>
            </div>
            <div class="a-square two" id="accessibility-decrease-font" tabindex="102">
                <i class="fa fa-chevron-down active"></i>
            </div>
            <div class="a-square three" id="accessibility-increase-font" tabindex="103">
                <i class="fa fa-chevron-up active"></i>
            </div>
        </li>
        <li>
            <?php _e('Underline links', 'thetwoaccessibility'); ?>
            <div class="a-square accessibility-button" id="accessibility-a-underline" data-state="disabled" tabindex="107">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <li>
            <?php _e('Dark contrast', 'thetwoaccessibility'); ?>
            <div class="a-square accessibility-button" id="accessibility-dark-contrast" data-state="disabled" tabindex="108">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <li>
            <?php _e('Light contrast', 'thetwoaccessibility'); ?>
            <div class="a-square accessibility-button" id="accessibility-light-contrast" data-state="disabled" tabindex="109">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <li>
            <?php _e('Black & white', 'thetwoaccessibility'); ?>
            <div class="a-square accessibility-button" id="accessibility-black-white" data-state="disabled" tabindex="110">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <li class="<?php if (wp_is_mobile()) { ?>last<?php } ?>">
            <?php _e('Simple font', 'thetwoaccessibility'); ?>
            <div class="a-square accessibility-button" id="accessibility-reg-font" data-state="disabled" tabindex="111">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <?php if (!wp_is_mobile()) { ?>
        <li class="last">
            <?php _e('Highlight tabs', 'thetwoaccessibility'); ?>
            <div class="a-square accessibility-button" id="accessibility-keyboard" data-state="disabled" tabindex="112">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>