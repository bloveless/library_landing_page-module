<?php namespace Fritzandandre\LibraryModule\Seeder;

use Anomaly\FilesModule\Disk\Contract\DiskRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class DiskSeeder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Fritzandandre\LibraryModule\Seeder
 */
class DiskSeeder extends Seeder
{

    /**
     * The disk repository.
     *
     * @var DiskRepositoryInterface
     */
    protected $disks;

    /**
     * Create a new DiskSeeder instance.
     *
     * @param $disks
     */
    public function __construct(DiskRepositoryInterface $disks)
    {
        $this->disks = $disks;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        // Don't create the disk if one with the slug menu-images already exists
        if ($this->disks->findBySlug('library') == null) {
            $this->disks
                ->create(
                    [
                        'en'      => [
                            'name'        => 'Library',
                            'description' => 'Local library storage.'
                        ],
                        'slug'    => 'library',
                        'adapter' => 'anomaly.extension.local_storage_adapter'
                    ]
                );
        }
    }
}
