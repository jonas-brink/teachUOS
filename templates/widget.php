<article class="studip">
    <section>
        <p><?= _('Info-Text zu teachUOS.') ?></p>
        <?= \Studip\LinkButton::create(_('teachUOS für mich aktivieren'), URLHelper::getLink('dispatch.php/course/enrolment/apply/' . $teachUOS_course_id), []) ?>
    </section>
</article>
