<article class="studip">
    <section>
        <p><?= _('Info-Text zu teachUOS.') ?></p>
        <? if (!$isMember) : ?>
            <?= \Studip\LinkButton::create(_('teachUOS für mich aktivieren'), URLHelper::getLink('dispatch.php/course/enrolment/apply/' . $teachUOS_course_id), []) ?>
        <? else : ?>
            <p>teachUOS ist für dich bereits aktiviert !</p>
        <? endif ?>

    </section>
</article>
