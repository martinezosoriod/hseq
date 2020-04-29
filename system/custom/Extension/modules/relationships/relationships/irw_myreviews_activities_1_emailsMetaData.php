<?php
// created: 2020-04-29 18:19:53
$dictionary["irw_myreviews_activities_1_emails"] = array (
  'relationships' => 
  array (
    'irw_myreviews_activities_1_emails' => 
    array (
      'lhs_module' => 'irw_myreviews',
      'lhs_table' => 'irw_myreviews',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'irw_myreviews',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);