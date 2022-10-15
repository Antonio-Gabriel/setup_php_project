<?php

namespace Setup\Resources\Seo;

use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    protected Optimizer $optimizer;

    public function __construct(string $schema = "article")
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(
            siteName: strval($_ENV['SITE_NAME']),
            locale: "pt_AO",
            schema: $schema
        )->publisher(
            fbPage: "",
            fbAuthor: ""
        )->twitterCard(
            creator: "",
            site: "",
            domain: ""
        )->facebook(
            appId: ""
        );
    }

    public function render(string $title, string $description, string $url, string $image, bool $follow = true): string
    {
        return $this->optimizer->optimize($title, $description, $url, $image, $follow)->render();
    }
}
