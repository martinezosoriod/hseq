<?php
$module_name = 'irw_myreviews';
$_object_name = 'irw_myreviews';
$viewdefs [$module_name] =
array (
  'DetailView' =>
  array (
    'templateMeta' =>
    array (
      'maxColumns' => '2',
      'form' =>
      array (
      ),
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' =>
      array (
        'DEFAULT' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ANALYSIS_CAUSES_5' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EFFECTIVENESS_ACTION' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' =>
    array (
      'default' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'consecutive',
            'label' => 'LBL_CONSECUTIVE',
          ),
          1 =>
          array (
            'name' => 'irw_myreviews_status',
            'studio' => 'visible',
            'label' => 'LBL_IRW_MYREVIEWS_STATUS',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'irw_myreviews_source',
            'studio' => 'visible',
            'label' => 'LBL_IRW_MYREVIEWS_SOURCE',
          ),
          1 =>
          array (
            'name' => 'which_one',
            'label' => 'LBL_WHICH_ONE',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 =>
          array (
            'name' => 'process',
            'studio' => 'visible',
            'label' => 'LBL_PROCESS',
          ),
        ),
        3 =>
        array (
          0 => 'active_date',
          1 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'irw_myreviews_list',
            'studio' => 'visible',
            'label' => 'LBL_IRW_MYREVIEWS_LIST',
          ),
          1 =>
          array (
            'name' => 'uploadfile',
            'displayParams' =>
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'detail',
            'studio' => 'visible',
            'label' => 'LBL_DETAIL',
          ),
        ),
      ),
      'lbl_analysis_causes_5' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'first',
            'studio' => 'visible',
            'label' => 'LBL_FIRST',
          ),
          1 =>
          array (
            'name' => 'second',
            'studio' => 'visible',
            'label' => 'LBL_SECOND',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'third',
            'studio' => 'visible',
            'label' => 'LBL_THIRD',
          ),
          1 =>
          array (
            'name' => 'fourth',
            'studio' => 'visible',
            'label' => 'LBL_FOURTH',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'fifth',
            'studio' => 'visible',
            'label' => 'LBL_FIFTH',
          ),
          1 =>
          array (
            'name' => 'root_cause',
            'studio' => 'visible',
            'label' => 'LBL_ROOT_CAUSE',
          ),
        ),
      ),
      'lbl_effectiveness_action' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'indicator',
            'studio' => 'visible',
            'label' => 'LBL_INDICATOR',
          ),
          1 =>
          array (
            'name' => 'closed_effectively',
            'studio' => 'visible',
            'label' => 'LBL_CLOSED_EFFECTIVELY',
          ),
        ),
      ),
    ),
  ),
);
;
?>
