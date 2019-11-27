<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(Request $request)
    {
        try {
            $www = self::getProjectFolders('/Users/rginnow/code/www');
            $projects = self::getProjectFolders('/Users/rginnow/code/projects');

            return $this->sendSuccess($request, compact('www', 'projects'), 'app');
        } catch (\Exception $e) {
            return $this->sendFailure($request, ['status' => 'error', 'exception' => $e]);
        }
    }

    protected static function getProjectFolders(string $dir)
    {
        $paths = scandir($dir);
        $array = self::sanitizePaths($paths);

        return self::buildLinks($array, $dir);
    }

    protected static function sanitizePaths($paths)
    {
        unset($paths[array_search('.', $paths, true)]);
        unset($paths[array_search('..', $paths, true)]);
        unset($paths[array_search('.DS_Store', $paths, true)]); // MAC OS
        unset($paths[array_search('homepage', $paths, true)]); // Don't show this program

        return $paths;
    }

    protected static function buildLinks($array, $dir)
    {
        $links = [];
        foreach ($array as $path) {
            if (is_dir($dir . '/' . $path)) {
                array_push($links, ['name' => $path, 'link' => 'http://' . $path . '.test']);
            }
        }

        return $links;
    }
}
