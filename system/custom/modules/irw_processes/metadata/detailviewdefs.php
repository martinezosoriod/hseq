<?php
$module_name = 'irw_processes';
$_object_name = 'irw_processes';
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
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'process_code',
            'label' => 'LBL_PROCESS_CODE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'process_type',
            'studio' => 'visible',
            'label' => 'LBL_PROCESS_TYPE',
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'objective',
            'studio' => 'visible',
            'label' => 'LBL_OBJECTIVE',
          ),
          1 => 
          array (
            'name' => 'scope',
            'studio' => 'visible',
            'label' => 'LBL_SCOPE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'input',
            'studio' => 'visible',
            'label' => 'LBL_INPUT',
          ),
          1 => 
          array (
            'name' => 'output',
            'studio' => 'visible',
            'label' => 'LBL_OUTPUT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
