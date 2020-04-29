<?php
$module_name = 'irw_processes';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
      ),
      'maxColumns' => '2',
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          0 => 'document_name',
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
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
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
          ),
        ),
      ),
    ),
  ),
);
;
?>
