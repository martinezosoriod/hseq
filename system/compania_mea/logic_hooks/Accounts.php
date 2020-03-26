<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Accounts_logic{

  function save_Accounts($bean, $event, $arguments){

    global $app_list_strings;

    $log = $GLOBALS['log'];
    $log->fatal("Editing Accounts");

//     $bean->codigo = strtoupper($bean->codigo);
//     $bean->codigo = str_replace(' ', '', $bean->codigo);
//     $bean->description = $bean->detail;
//     $bean->name = $bean->codigo . ' - ' . $bean->cuenta;

//     $bean->ids_global_id = $bean->ids_global1decglobals_ida;
//     $split = split("-", $bean->date_calculation);
//     $bean->day_calculation = $split[2];
//     $bean->month_calculation = $split[1];
//     $bean->year_calculation = $split[0];

//     //     Reference values stored in the measurement
//     require_once('modu-les/PREF_MODUL/PREF_MODUL.php');
//     $PREF_MODUL = new PREF_MODUL();
//     $PREF_MODU = $PREF_MODUL->retrieve($bean->ids_global_id);

//     $bean->critical = $PREF_MODU->critical;
//     $bean->acceptable = $PREF_MODU->acceptable;
//     $bean->ideal = $PREF_MODU->ideal;

  }


//   Function that runs after saving the data in the database
  function Accounts_saved($bean, $event, $arguments){

    global $app_list_strings;

    $log = $GLOBALS['log'];
    $log->fatal("Saved Accounts");

// // 	Update dependencies
//     $query =
//     "UPDATE Accounts ".
//     "SET field =  '{$bean->calculation}', measurement =  '{$bean->measurement}', ".
//     "periodicity =  '{$bean->periodicity}', perspective =  '{$bean->perspective}', ".
//     "trend =  '{$bean->trend}' ".
//     "WHERE ids_global_id = '{$bean->id}';";
// //     $log->fatal('SQL: '.$query);
//     $bean->db->query($query);
//     $bean->save();

//     //     Delete unnecessary relationship in the database.
//     $deleteSql =
//     "DELETE FROM table_relationship WHERE field = '{$bean->id}' AND deleted = 1";
//     //     $log->fatal($deleteSql);
//     $bean->db->query($deleteSql);

  }


}

?>
