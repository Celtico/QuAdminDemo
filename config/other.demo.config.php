<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

/**
CREATE TABLE IF NOT EXISTS `qu-other-demo` (
`id_other_demo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
`id_author` bigint(20) unsigned NOT NULL DEFAULT '0',
`name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
`title` text COLLATE utf8_unicode_ci NOT NULL,
`languages` text COLLATE utf8_unicode_ci NOT NULL,
`id_parameters` text COLLATE utf8_unicode_ci NOT NULL,
`order` int(11) NOT NULL DEFAULT '0',
`status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'publish',
PRIMARY KEY (`id_other_demo`),
KEY `name` (`name`),
KEY `name_status_date` (`name`,`status`,`id_other_demo`),
KEY `author` (`id_author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=0 ;

 */
return array(


    /**
     *
     *
     * Configuration QuAdmin model and forms managing fast :P !!!!!!!!!!!!
     *
     *
     */
    'qu_other_demo_model'=>array(
        /**
         *
         *
         * MODEL
         *
         *
         */

        'tableName'            => 'qu-other-demo',
        'tableLabel'           => 'Other',
        'entity'               => 'QuAdminDemo\Entity\Other',
        'tableKeyFields'       => array(

            'key_id'            => 'id_other_demo',
            'key_name'          => 'name',
            'key_title'         => 'title',
            'key_id_author'     => 'id_author',
            'key_status'        => 'status',
            'key_order'         => 'order',

            'key_id_parent'     => 0,
            'key_id_lang'       => 0,
            'key_lang'          => 0,
            'key_date'          => 0,
            'key_modified'      => 0,
            'key_level'         => 0,
            'key_path'          => 0,
            'key_icon'          => 0,

        ),

        'tableFieldsCleanData'=> array(
            'id',
            'id_author',
            'order',
            'name',
            'title',
            'status',
            'languages',
            'id_parameters',
        ),

        'linkerModels'      => false,
        'linkerParent'      => false,
        'optionsPaginator'  => array(
            'n'=>10,
            'p'=>1
        ),
        'defaultLanguage'   => false,
        'documents'         => false,
        'optionsOrder'      => 'order desc',

        /**
         *
         *
         * FORM
         *
         */
        'optionsForm' => array(
            /**
             * Basic form
             *
             * key group name
             * for example, a minimum description
             */
            'GroupRight'  => array(
                'serialized' => false,
                'fieldset' => array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'parametres',
                    'options' => array(
                        'label'=>'Parametres'
                    ),
                    'attributes' => array(
                        'span' =>'span3',
                        //'class' =>'fieldset-collapse',
                    ),
                ),
                /**
                 * key form
                 * for example input name
                 */
                'title' => array(
                    //form zf2 standard for reused
                    'form' => array(
                        'name'     => 'title',
                        'options' => array('label' => 'Title'),
                        'attributes' => array(
                            'type'  => 'text',
                            'class'=>'span12',
                            'span'=>'span3',
                        ),
                    ),
                    //filter zf2 standard for reused
                    'filter' => array(
                        'name'     => 'title',
                        'required' => true,

                    ),
                ),
                /**
                 * key
                 * for example input name
                 */
                'status' => array(
                    //form zf2 standard for reused
                    'form' => array(
                        'type' => 'Zend\Form\Element\Select',
                        'name'     => 'status',
                        'options' => array(
                            'label' => 'Status',
                            'value_options' => array(
                                'Public'    =>'Public',
                                'Previous'  =>'Previous',
                                'Private'   =>'Private',
                            ),
                        ),
                        'attributes' => array(
                            'type' => 'select',
                            'class'=>'fullwidth select',
                            'span'=>'span3',

                        ),
                    ),
                    //filter zf2 standard for reused
                    'filter' => array('name'=> 'status','required' => false,),
                ),


                'name' => array(
                    'form' => array(
                        'name'     => 'name',
                        'options' => array(
                            'label' => 'Name',
                        ),
                        'attributes' => array(
                            'type'  => 'text',
                            'span'=>'span3', 'class'=>'span12',
                        ),
                    ),
                    'filter' => array(
                        'name'     => 'name',
                        'required' => false,
                        'filters'  => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                            array(
                                'name'    => 'StringLength',
                                'options' => array(
                                    'encoding' => 'UTF-8',
                                    'min'      => 1,
                                    'max'      => 200,
                                ),
                            ),
                        ),
                    ),
                ),
            ),



            'languages' => array(
                'serialized' => true,
                'fieldset'=> array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'languages',
                    'options' => array(
                        'label' => 'Data serialized',
                    ),
                    'attributes' => array(
                        'class' =>'text-3',
                    ),
                ),
                /**
                 * Add set Attributes options on database
                 *
                 * key
                 * for example input name
                 */
                'database' => array(
                    'name' => 'languages',
                    'database' => 'qu_languages_model',
                    'fieldKeyName' => 'name',
                    'fieldKeyLabel' => 'title',
                    'fieldKeyLabelParent' => true,
                    'where' => '',
                    'order' => '',
                ),
                //form zf2 standard for reused
                'form' => array(
                    'name'     => 'languages',
                    'attributes' => array(
                        'type' => 'text',
                        'class'=>'span12'
                    ),
                ),
                //filter zf2 standard for reused
                'filter' => array(
                    'name'=> 'languages',
                    'required' => false,
                ),
            ),
            'parameters' => array(
                'explode' => true,
                'fieldset'=> array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'id_parameters',
                    'options' => array(
                        'label' => 'Data explode',
                    ),
                    'attributes' => array(
                        'class' =>'multi-checkbox-3',
                    ),
                ),
                /**
                 * Add set Attributes options on database
                 *
                 * key
                 * for example input name
                 */
                'id_parameters' => array(
                    //form zf2 standard for reused
                    'form' => array(
                        'type' => 'Zend\Form\Element\MultiCheckbox',
                        'name'     => 'id_parameters',
                        'attributes' => array(
                            'type' => 'multi_checkbox',
                            'class'=>'check'
                        ),
                    ),
                    //filter zf2 standard for reused
                    'filter' => array(
                        'name'=> 'id_parameters',
                        'required' => false,
                    ),

                    'attributes' => array(
                        'name' => 'id_parameters',
                        'database' => 'qu_parameters_model',
                        'fieldKeyName' => 'id',
                        'fieldKeyLabel' => 'title',
                        'fieldKeyLabelParent' => true,
                        'where'     => '',
                        'order'     => 'order asc',
                        'default'   => array(null => 'NULL' ),
                    ),
                ),
            ),


            /**
             * Out config form
             */
        ),
    ),


);