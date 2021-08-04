<? for ($i = 0; $i < count($favourites_titles); $i++) : ?>
    <a href="<?= PluginEngine::getURL('koop/pages/cw', ['cid' => $course_id, 'selected' => $favourites_titles[$i][0]]) ?>" >
        <?= $favourites_titles[$i][1] ?>
    </a>
    <br>
<? endfor ?>