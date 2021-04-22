<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // HTML CATEGORY
        $html = new Category();
        $html->name = "HTML";
        $html->slug = "html";
        $html->save();

        // CSS CATEGORY
        $css = new Category();
        $css->name = "CSS";
        $css->slug = "css";
        $css->save();

        // PHP CATEGORY
        $php = new Category();
        $php->name = "PHP";
        $php->slug = "php";
        $php->save();

        // LARAVEL CATEGORY
        $laravel = new Category();
        $laravel->name = "LARAVEL";
        $laravel->slug = "laravel";
        $laravel->save();
    }
}
