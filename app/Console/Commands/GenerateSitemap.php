<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
                          ->add(
                              Url::create('https://therightsupplier.com')
                                 ->setPriority(1)
                                 ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
                          );

        foreach (Post::all() as $post) {
            $sitemap->add(
                Url::create(sprintf('https://therightsupplier.com/%s', $post->slug))
                   ->setLastModificationDate($post->updated_at)
                   ->setPriority(1)
                   ->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
            );
        }
        
        $sitemap->writeToFile(public_path('trs-sitemap-v1.xml'));
    }
}
