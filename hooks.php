<?php

class hooks_hola_mundo extends hooks 
{
    var $module_name = "hola_mundo";
    
    // CORECCIÓN: Usar $check_only = true en lugar de $dummy
    function install_extension($check_only = true) 
    {
        error_log("Instalando extensión hola_mundo");
        
        // Si solo estamos verificando, devuelve true
        if ($check_only) return true;
        
        // Registrar enlaces de menú para la extensión
        $this->create_menu_entries();
        
        return true;
    }
    
    function uninstall_extension($check_only = true) 
    {
        error_log("Desinstalando extensión hola_mundo");
        
        // Si solo estamos verificando, devuelve true
        if ($check_only) return true;
        
        // Eliminar enlaces de menú
        $this->remove_menu_entries();
        
        return true;
    }
    
    function activate_extension($company, $check_only = true) 
    {
        error_log("Activando extensión hola_mundo para empresa: " . $company);
        
        // Si solo estamos verificando, devuelve true
        if ($check_only) return true;
        
        // Registrar enlaces de menú para la extensión
        $this->create_menu_entries();
        
        return true;
    }
    
    function deactivate_extension($company, $check_only = true) 
    {
        error_log("Desactivando extensión hola_mundo para empresa: " . $company);
        
        // Si solo estamos verificando, devuelve true
        if ($check_only) return true;
        
        // Eliminar enlaces de menú
        $this->remove_menu_entries();
        
        return true;
    }
    
    // Función auxiliar para crear entradas de menú
    private function create_menu_entries() {
        global $path_to_root;
        
        // Ejemplo de cómo añadir una entrada de menú
        // Esto requiere la función add_menu_item que debe estar definida en FrontAccounting
        if (function_exists('add_menu_item')) {
            // Añadir al menú "Configuración"
            add_menu_item(_("Hola Mundo"), 
                 "SA_OPEN", 
                 "modules/hola_mundo/pages/hola_mundo.php", 
                 "Mantenimiento", 
                 "Bancos y Contabilidad");
        } else {
            error_log("No se pudo añadir al menú - función add_menu_item no disponible");
        }
    }
    
    // Función auxiliar para eliminar entradas de menú
    private function remove_menu_entries() {
        // Si hay una función para eliminar entradas de menú, úsala aquí
    }
}
