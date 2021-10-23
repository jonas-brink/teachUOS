<article class="studip">
    <section>
        <p><?= _('Info-Text zu teachUOS.') ?></p>
        <?= \Studip\LinkButton::create(_('teachUOS für mich aktivieren'), PluginEngine::getURL('teachUOS/pages/cw', ['cid' => 22, 'selected' => 33]), []) ?>
    </section>
</article>
