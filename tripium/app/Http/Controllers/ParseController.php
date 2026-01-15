<?php


namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Url;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;

class ParseController extends Controller
{
    public function site(Request $request)
    {
        $parser = new Parse();
//        $html = $parser->request(Parse::baseUrl . Parse::listUrl . '?page=8');
//
//        $urls = $parser->getUrls($html);
////        var_export($result);
//        var_dump($urls);
//
//        foreach ($urls as $url) {
//            Pages::create([
//                'page_url' => $url,
//            ]);
//        }

        $pages = Pages::where('site_url', null)->get();
        var_dump(count($pages));
        foreach ($pages as $i => $page) {
            var_dump($page->page_url);
            $html = $parser->request(Parse::baseUrl . '/' . $page->page_url);
            $url = $parser->getSiteUrl($html);
            $page->site_url = $url ?? '';
            $page->save();
//            Url::create([
//                'site_url' => $url,
//                'page_url' => $page->page_url,
//            ]);
            sleep(2);
            if ($i > 50) {
                exit();
            }
        }

    }
}


class Parse
{

    public const baseUrl = 'https://www.icegaming.com';
    public const listUrl = '/exhibitor-list';

    function __construct()
    {
        $this->request(self::baseUrl . self::listUrl);
    }

    function request($url): bool|string
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $html = curl_exec($curl);

        $error = curl_errno($curl);
        curl_close($curl);
        return $html;
    }

    function getUrls($html): array
    {
        $dom = new DOMDocument();
        @$dom->loadHTML($html, LIBXML_NOCDATA);

        $xpath = new DOMXPath($dom);

        $xpath_query = "//*/div[contains(concat(' ', @class, ' '), ' m-exhibitors-list__items__item__image ') and contains(concat(' ', @class, ' '), ' u-background-color-neutral-white ')]//a[contains(concat(' ', @class, ' '), ' js-librarylink-entry ')]";

        $links = $xpath->query($xpath_query);

        $found_urls = [];
        foreach ($links as $link_element) {
            $href = $link_element->getAttribute('href');
            if (!empty($href)) {
                $found_urls[] = $href;
            }
        }

        return $found_urls;
    }

    function getSiteUrl($html): ?string
    {
        $dom = new DOMDocument();
        @$dom->loadHTML($html, LIBXML_NOCDATA);

        $xpath = new DOMXPath($dom);

        $xpath_query = "//*/div[contains(concat(' ', @class, ' '), 'm-exhibitor-entry__item__body__contacts__additional__button__website ')]//a[contains(concat(' ', @class, ' '), ' m-button-primary ')]";

        $links = $xpath->query($xpath_query);

        foreach ($links as $link_element) {
            $href = $link_element->getAttribute('href');
            if (!empty($href)) {
                return $href;
            }
        }

        return null;
    }
}
