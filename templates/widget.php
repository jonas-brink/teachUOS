<article class="studip">
    <section>
        <p><?= _('Info-Text zu teachUOS.') ?></p>
        <?= \Studip\LinkButton::create(_('teachUOS für mich aktivieren'), URLHelper::getLink('teachUOS/pages/cw', ['cid' => 22, 'selected' => 33]), []) ?>
    </section>
</article>
