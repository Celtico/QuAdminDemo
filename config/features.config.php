<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
return array(


    /**
     *
     *
     * Configuration QuAdmin model and forms managing fast :P !!!!!!!!!!!!
     *
     *
     */
    'qu_features_model' => array(
        /**
         *
         *
         * MODEL
         *
         *
         */

        'tableName'            => 'qu-features',
        'tableLabel'           => 'Features',
        'entity'               => 'QuAdminDemo\Entity\Categories',
        'tableKeyFields'       => array(

            'key_id'            => 'id_features',
            'key_name'          => 'name',
            'key_title'         => 'title',

            'key_id_parent'     => 'id_parent',
            'key_id_lang'       => 'id_lang',
            'key_id_author'     => 'id_author',
            'key_lang'          => 'lang',

            'key_date'          => 'date',
            'key_modified'      => 'modified',
            'key_status'        => 'status',

            'key_order'         => 'order',

            'key_level'         => 0,
            'key_path'          => 0,

            'key_icon'         => 'icon',
        ),

        'tableFieldsCleanData'=> array(

            'id_features',
            'id_parent',
            'id_author',
            'id_lang',
            'order',
            'name',
            'date',
            'modified',
            'status',
            'lang',
            'parameters',
            'title',
            'summary',
            'content',
            'icon',
            'meta_title',
            'meta_description',
            'meta_keywords',

        ),

        'linkerModels'      => array(),
        'linkerParent'      => 0,
        'optionsPaginator'  => array('n'=>5,'p'=>1),
        'defaultLanguage'   => 'es',
        'optionsOrder'      => 'order desc',

        'documents'         => 0,


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
                    ),
                ),

                /**
                 * key form
                 * for example input name
                 */
                'status' => array(
                    'form' => array(
                        'type' => 'Zend\Form\Element\Select',
                        'name'     => 'status',
                        'options' => array(
                            'label' => 'Status',
                        ),
                        'attributes' =>  array(
                            'options' => array(
                                'Public'    =>'Public',
                                'Private'   =>'Private',
                            ),
                            'class'=>'fullwidth select',
                            'span'=>'span3',

                        ),


                    ),
                    'filter' => array(
                        'name'     => 'status',
                        'required' => false,
                    ),
                ),

                /**
                 * key form
                 * for example input name
                 */
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
                /**
                 * key form
                 * for example input name
                 */
                'icon' => array(
                    //form zf2 standard for reused
                    'form' => array(
                        'name'     => 'icon',
                        'options' => array('label' => 'Icon'),
                        'attributes' => array(
                            'type'  => 'hidden',
                            'span'=>'span3', 'class'=>'span12',
                            'id'=>'icon',
                        ),
                    ),
                    //filter zf2 standard for reused
                    'filter' => array('name' => 'icon',
                        'required' => false,
                    ),
                ),

            ),
            'GroupCenter' => array(
                'serialized' => false,
                'fieldset'=> array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'cont',
                    'options' => array(
                        'label' => 'Features',
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
                        ),
                    ),
                    //filter zf2 standard for reused
                    'filter' => array(
                        'name'     => 'title',
                        'required' => true,

                    ),
                ),
            ),

            'GroupSummary' => array(
                'serialized' => false,
                'fieldset'=> array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'summary',
                    'options' => array(
                        'label' => 'Summary',
                    ),
                    'attributes' => array(

                    ),
                ),
                /**
                 * key form
                 * for example input name
                 */
                'summary' => array(
                    'form' => array(
                        //form zf2 standard for reused
                        'name'     => 'summary',
                        'options' => array(
                            'label' => 'summary'
                        ),
                        'attributes' => array(
                            'type' => 'textarea',
                            'id'=>'editor',
                            'ck-editor'=>array(
                                'tools'=>'medium',
                                'height'=>'150',
                            ),
                        ),
                    ),
                    'filter' => array(
                        'name' => 'summary',
                        'required' => false,
                    ),
                ),
            ),

            /**
             * Out config form
             */
        ),
    ),


);