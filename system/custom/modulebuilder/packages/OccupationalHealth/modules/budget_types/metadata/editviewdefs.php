<?php
$module_name = 'ohs_budget_types';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
            'name' => 'budget_types_list',
            'studio' => 'visible',
            'label' => 'LBL_BUDGET_TYPES_LIST',
          ),
          1 => 
          array (
            'name' => 'unit_measurement',
            'studio' => 'visible',
            'label' => 'LBL_UNIT_MEASUREMENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'unit_value',
            'label' => 'LBL_UNIT_VALUE',
          ),
          1 => 
          array (
            'name' => 'quantity',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'subtotal',
            'label' => 'LBL_SUBTOTAL',
          ),
          1 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
