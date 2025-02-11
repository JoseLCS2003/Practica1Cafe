<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class CompileBladeViews extends Command
{
    protected $signature = 'views:compile';
    protected $description = 'Compila todas las vistas de Blade a HTML';

    public function handle()
    {
        // Carpeta donde se guardarán los archivos HTML compilados
        $outputDir = public_path('compiled_views');

        // Crea el directorio si no existe
        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0755, true);
        }

        // Obtenemos todas las vistas en resources/views, excluyendo la carpeta welcome
        $views = File::allFiles(resource_path('views'));
        foreach ($views as $view) {
            // Verificamos que el archivo sea una vista Blade (con extensión .blade.php)
            if ($view->getExtension() == 'blade.php') {
                // Extraemos el nombre de la vista sin la extensión
                $viewName = str_replace(resource_path('views') . '/', '', $view->getPathname());
                $viewName = str_replace('.blade.php', '', $viewName);

                // Renderizamos la vista y la guardamos como HTML
                try {
                    $html = View::make($viewName)->render();
                    file_put_contents("$outputDir/$viewName.html", $html);
                    $this->info("Vista $viewName compilada.");
                } catch (\Exception $e) {
                    $this->error("Error al compilar la vista $viewName: " . $e->getMessage());
                }
            }
        }

        $this->info('Todas las vistas de Blade han sido compiladas a HTML.');
    }
}
