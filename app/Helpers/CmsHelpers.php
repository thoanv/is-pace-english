<?php
namespace App\Helpers;
class CmsHelpers
{
    public static function renderMenu($menus) {
        echo "<ul>";
        foreach ($menus as $menu) {
            echo "<li>Menu ID: " . $menu['id'];
            if (isset($menu['children'])) {
                $this->renderMenu($menu['children']); // đệ quy
            }
            echo "</li>";
        }
        echo "</ul>";
    }

}
