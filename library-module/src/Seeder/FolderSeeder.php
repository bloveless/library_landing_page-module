<?php namespace Fritzandandre\LibraryModule\Seeder;

use Anomaly\FilesModule\Disk\Contract\DiskRepositoryInterface;
use Anomaly\FilesModule\Folder\Contract\FolderRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class FolderSeeder
 *
 * @link          http://fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LibraryModule\Seeder
 */
class FolderSeeder extends Seeder
{

    /**
     * The disk repository.
     *
     * @var DiskRepositoryInterface
     */
    protected $disks;

    /**
     * The folders repository.
     *
     * @var FolderRepositoryInterface
     */
    protected $folders;

    /**
     * Create a new FolderSeeder instance.
     *
     * @param DiskRepositoryInterface   $disks
     * @param FolderRepositoryInterface $folders
     */
    public function __construct(DiskRepositoryInterface $disks, FolderRepositoryInterface $folders)
    {
        $this->disks   = $disks;
        $this->folders = $folders;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $libraryDisk = $this->disks->findBySlug('library');

        // Don't create the folder if one with the slug products already exists
        if ($this->folders->findBySlug('ebook_images') == null) {
            $this->folders
                ->create(
                    [
                        'en'            => [
                            'name'        => 'eBook Image',
                            'description' => 'A folder for eBook cover images.'
                        ],
                        'slug'          => 'ebook_images',
                        'disk_id'       => $libraryDisk->getId(),
                        'allowed_types' => ['jpeg', 'jpg', 'gif', 'png']
                    ]
                );
        }

        // Don't create the folder if one with the slug products already exists
        if ($this->folders->findBySlug('ebook_pdfs') == null) {
            $this->folders
                ->create(
                    [
                        'en'      => [
                            'name' => 'eBook PDFs',
                            'description' => 'A folder for eBook PDFs.'
                        ],
                        'slug' => 'ebook_pdfs',
                        'disk_id' => $libraryDisk->getId(),
                        'allowed_types' => ['pdf'],
                    ]
                );
        }
    }
}
