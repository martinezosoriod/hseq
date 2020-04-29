<?php
$module_name='ohs_budget_types';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'ohs_budget_types',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'budget_types_list' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_BUDGET_TYPES_LIST',
      'width' => '10%',
    ),
    'unit_measurement' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_UNIT_MEASUREMENT',
      'width' => '10%',
      'default' => true,
    ),
    'unit_value' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_UNIT_VALUE',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'quantity' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_QUANTITY',
      'width' => '10%',
      'default' => true,
    ),
    'subtotal' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_SUBTOTAL',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ohs_budget_types',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ohs_budget_types',
      'width' => '5%',
      'default' => true,
    ),
  ),
);