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
    'qu_content_model' => array(
        /**
         *
         *
         * MODEL
         *
         *
         */

        'tableName'            => 'qu-content',
        'tableLabel'           => 'Content',
        'entity'               => 'QuAdminDemo\Entity\Categories',
        'tableKeyFields'       => array(

            'key_id'            => 'id_content',
            'key_name'          => 'name',
            'key_title'         => 'title',

            'key_id_parent'     =>  'id_parent',
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

            'id_content',
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
        'optionsPaginator'  => array('n'=>10,'p'=>1),
        'defaultLanguage'   => 'es',
        'optionsOrder'      => 'order desc',

        'documents'         =>  array(
            'tableName'          => 'qu-plupload',
            'DirUpload'          => '/uploads/files/content-m',
            'DirUploadAbsolute'  =>  dirname(dirname(dirname(__DIR__)))  . '/web/uploads/files/content-m',
            'Resize'             => array('1200','900'), //$width, $height
            'ThumbResize'        => array(

                /* Properties  GdThumb Class Definition

                public function resize ($maxWidth = 0, $maxHeight = 0)
                public function adaptiveResize ($width, $height)
                public function resizePercent ($percent = 0)
                public function cropFromCenter ($cropWidth, $cropHeight = null)
                public function crop ($startX, $startY, $cropWidth, $cropHeight)

                */

                'xl' => array('resize','1170','420'),
                'l'  => array('resize','600','550'),
                'm'  => array('resize','500','418'),
                's'  => array('adaptiveResize','30','20'),
            ),
        ),


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

            ),
            'GroupLinkers' => array(
                'serialized' => false,
                'fieldset'=> array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'linkers',
                    'options' => array(
                        'label' => 'Linkers',
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
                'parameters' => array(
                    //form zf2 standard for reused
                    'form' => array(
                        'type' => 'Zend\Form\Element\Select',
                        'name'     => 'parameters',
                        'options' => array(
                            'label' => 'Params',
                            'options' => array(),
                        ),
                        'attributes' => array(
                            'type' => 'select',
                            'class'=>'fullwidth select',
                            'span'=>'span3',

                        ),
                    ),
                    //filter zf2 standard for reused
                    'filter' => array('name'=> 'parameters','required' => false,),

                    /**
                     * Add set Attributes options on database
                     */
                    'attributes' => array(
                        'name' => 'parameters',
                        'database' => 'qu_parameters_model',
                        'fieldKeyName' => 'name',
                        'fieldKeyLabel' => 'title',
                        'fieldKeyLabelParent' => true,
                        'where' => '',
                        'order' => 'order desc',
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
                        'label' => 'Pàgine',
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
                       // //'class' =>'fieldset-collapse',

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
                                'height'=>'100',
                            ),
                        ),
                    ),
                    'filter' => array(
                        'name' => 'summary',
                        'required' => false,
                    ),
                ),
            ),
            'GroupContent' => array(
                'serialized' => false,
                'fieldset'=> array(
                    'type' =>'Zend\Form\Fieldset',
                    'name' => 'content',
                    'options' => array(
                        'label' => 'Content',
                    ),
                ),
                /**
                 * key form
                 * for example input name
                 */
                'content' => array(
                    'form' => array(
                        //form zf2 standard for reused
                        'name'     => 'content',
                        'options' => array('label' => 'content'),
                        'attributes' => array(
                            'type' => 'textarea',
                            'id'=>'editor2',
                            'ck-editor'=>array(
                                'tools'=>'large',
                                'height'=>'250',
                            ),
                        ),
                    ),
                    //filter zf2 standard for reused
                    'filter' => array(
                        'name' =>'content',
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