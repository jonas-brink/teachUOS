<?php
class KoopPage extends SimpleORMap
{
    protected static function configure($config = [])
    {
        $config['db_table'] = 'koop_pages';
        /*
        // Kindverknüpfung definieren
        $config['has_many']['children'] = [
            'class_name' => SampleSorm::class,
            'assoc_func' => 'findByParent_id'
        ];
        
        // Elternverknüpfung definieren
        $config['belongs_to']['parent'] = [
            'class_name' => SampleSorm::class,
            'foreign_key' => 'parent_id'
        ];
        */
        parent::configure($config);
    }
}