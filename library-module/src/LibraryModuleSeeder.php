<?php namespace Fritzandandre\LibraryModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Fritzandandre\LibraryModule\Seeder\DiskSeeder;
use Fritzandandre\LibraryModule\Seeder\FolderSeeder;

/**
 * Class LibraryModuleSeeder
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LibraryModule
 */
class LibraryModuleSeeder extends Seeder
{
    /**
     * Run the seeder
     */
    public function run()
    {
        // Create the products disk
        $this->call(DiskSeeder::class);
        // Create any folders necessary  on the products disk
        $this->call(FolderSeeder::class);
    }
}
