<div class="accessibility-panel" id="accessibility-panel">
    <ul class="lines">
        <li class="first">
            <div class="a-square right" id="close-accessibility">
                <i class="fa fa-times active"></i>
            </div>
            <strong>
                <?php if (ICL_LANGUAGE_CODE=='he') { ?>
                    כלי נגישות
                <?php } else if (ICL_LANGUAGE_CODE=='en') { ?>
                    Accessibility tools
                <?php } ?>
            </strong>
        </li>
        <li data-state="disabled">
            <?php if (ICL_LANGUAGE_CODE=='he') { ?>
                גודל טקסט
            <?php } else if (ICL_LANGUAGE_CODE=='en') { ?>
                Font size
            <?php } ?>
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
            <?php if (ICL_LANGUAGE_CODE=='he') { ?>
                קו תחתון לקישורים
            <?php } else if (ICL_LANGUAGE_CODE=='en') { ?>
                Underline links
            <?php } ?>
            <div class="a-square accessibility-button" id="accessibility-a-underline" data-state="disabled" tabindex="107">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <li>
            <?php if (ICL_LANGUAGE_CODE=='he') { ?>
                ניגודיות עם רקע כהה
            <?php } else if (ICL_LANGUAGE_CODE=='en') { ?>
                Dark contrast
            <?php } ?>
            <div class="a-square accessibility-button" id="accessibility-dark-contrast" data-state="disabled" tabindex="108">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <li>
            <?php if (ICL_LANGUAGE_CODE=='he') { ?>
                ניגודיות עם רקע בהיר
            <?php } else if (ICL_LANGUAGE_CODE=='en') { ?>
                Light contrast
            <?php } ?>
            <div class="a-square accessibility-button" id="accessibility-light-contrast" data-state="disabled" tabindex="109">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <li>
            <?php if (ICL_LANGUAGE_CODE=='he') { ?>
                גווני שחור ולבן
            <?php } else if (ICL_LANGUAGE_CODE=='en') { ?>
                Black & white
            <?php } ?>
            <div class="a-square accessibility-button" id="accessibility-black-white" data-state="disabled" tabindex="110">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div
        </li>
        <li class="<?php if ( wp_is_mobile() ) { ?>last<?php } ?>">
            <?php if (ICL_LANGUAGE_CODE=='he') { ?>
                פונט פשוט
            <?php } else if (ICL_LANGUAGE_CODE=='en') { ?>
                Simple font
            <?php } ?>
            <div class="a-square accessibility-button" id="accessibility-reg-font" data-state="disabled" tabindex="111">
                <i class="fa fa-plus active"></i>
                <i class="fa fa-times"></i>
            </div>
        </li>
        <?php if ( !wp_is_mobile() ) { ?>
            <li class="last">
                <?php if (ICL_LANGUAGE_CODE=='he') { ?>
                    הדגשת טאבים
                <?php } else if (ICL_LANGUAGE_CODE=='en') { ?>
                    Highlight tabs
                <?php } ?>
                <div class="a-square accessibility-button" id="accessibility-keyboard" data-state="disabled" tabindex="112">
                    <i class="fa fa-plus active"></i>
                    <i class="fa fa-times"></i>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>