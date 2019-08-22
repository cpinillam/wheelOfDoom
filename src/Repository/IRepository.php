<?php



Interface IRepository {
    
    function connect();

    function selectById($id);
    
    function selectAll($table);
    
    function selectByDead($dead);
    
    function updateById($id);

    function updateAll($table);


}
class Crud{}