<?php
namespace Parser;
use Parser\Request;
use Symfony\Component\DomCrawler\Crawler;

class ParserHtml {
    public function getFlats()
    {
        $request = new Request("http://localhost:8001/");
        $crawler = new Crawler($request->getHtmlForRequest());
        foreach ($crawler->filter('a') as $link){
            #print($link->textContent)."\n";
            var_dump($link->attr('href'));
        }
    }
}