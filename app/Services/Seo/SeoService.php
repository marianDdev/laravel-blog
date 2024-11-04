<?php

namespace App\Services\Seo;

use App\Models\Post;

class SeoService implements SeoServiceInterface
{

    public function getIndexMetaTags(?string $title = null): array
    {
        $metaTitle       = $this->getIndexTitle($title);
        $metaDescription = $this->getIndexDescription();
        $metaKeywords    = $this->getIndexKeywords();
        $ogImage         = 'https://therightsupplier.com/images/logo.png';
        $ogUrl           = 'https://therightsupplier.com/';

        return [
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'metaTitle'       => $metaTitle,
            'ogImage'         => $ogImage,
            'ogUrl'           => $ogUrl,
        ];
    }

    public function getShowMetaTags(Post $post): array
    {
        $metaTitle       = $this->getShowTitle($post);
        $metaDescription = $this->getShowDescription($post);
        $metaKeywords    = $this->getShowKeywords($post);
        $ogImage         = $post->image_url;
        $ogUrl           = sprintf('https://therightsupplier.com/%s', $post->slug);

        return [
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'metaTitle'       => $metaTitle,
            'ogImage'         => $ogImage,
            'ogUrl'           => $ogUrl,
        ];
    }

    public function getIndexTitle(?string $title = null): string
    {
        if (empty($title)) {
            return 'The Right Supplier | Best practices for suppliers in the hospitality businesses';
        }

        return sprintf('The Right Supplier | %s', $title);
    }

    public function getIndexDescription(): string
    {
        return 'Learn about the right suppliers for hotels, restaurants, coffee shops and stores owners';
    }

    public function getIndexKeywords(): string
    {
        return 'default, supplier, horeca, hotels, restaurants, cafes, furnizor, hotel, restaurant, cafenea';
    }

    public function getShowTitle(Post $post): string
    {
        return sprintf('The Right Supplier | %s', $post->title);
    }

    public function getShowDescription(Post $post): string
    {
        return sprintf(
            'The Right Supplier | %s',
            $post->summary,
        );
    }

    public function getShowKeywords(Post $post): string
    {
        return sprintf(
            '%s, suppliers, horeca suppliers, products, furnizori, produse, restaurant, hotel, coffee shop, cafenea',
            $post->title,
        );
    }
}
