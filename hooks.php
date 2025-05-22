<?php
class hooks_hola_mundo extends hooks 
{
    var $module_name = 'hola_mundo';
    
    function install_extension($dummy) 
    {
        return true;
    }
    
    function uninstall_extension($dummy) 
    {
        return true;
    }
    
    function activate_extension($company, $check_only=true) 
    {
        return true;
    }
    
    function deactivate_extension($company, $check_only=true) 
    {
        return true;
    }
}
?>