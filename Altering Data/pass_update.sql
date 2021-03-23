--pass_update.sql--

function build_sql_update($table, $data, $where)
{
    $cols = array();
 
    foreach($data as $key=>$val) {
        $cols[] = "$key = '$val'";
    }
    $sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";
 
    return($sql);
}

--Used to format the passwords in table Accounts, so...they won't be NULL anymore.