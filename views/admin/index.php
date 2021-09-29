<!-- Show text inside of a MessageBox to indicate whether the plugin is activated in the current context or not -->
<? if (!strcmp($course_id, $teachUOS_course_id)) : ?>
    <?= MessageBox::success('Das teachUOS-Plugin ist aktuell in dieser Veranstaltung aktiviert.') ?>
<? else : ?>
    <?= MessageBox::info('Aktuell ist das teachUOS-Plugin in einer anderen Veranstaltung aktiviert: ', [$teachUOS_course_name]); ?>
<? endif ?>