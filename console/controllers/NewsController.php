<?php
namespace console\controllers;

use yii\console\Controller;
use yii\console\Exception;
use Yii;
use MongoDB\BSON\ObjectId;
use yii\mongodb\Query;

class NewsController extends Controller
{
    public static function create_slug($string)
    {
        $search = array(
            '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
            '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
            '#(ì|í|ị|ỉ|ĩ)#',
            '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
            '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
            '#(ỳ|ý|ỵ|ỷ|ỹ)#',
            '#(đ)#',
            '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
            '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
            '#(Ì|Í|Ị|Ỉ|Ĩ)#',
            '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
            '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
            '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
            '#(Đ)#',
            "/[^a-zA-Z0-9\-\_]/",
        );
        $replace = array(
            'a',
            'e',
            'i',
            'o',
            'u',
            'y',
            'd',
            'A',
            'E',
            'I',
            'O',
            'U',
            'Y',
            'D',
            '-',
        );
        $string = preg_replace($search, $replace, $string);
        $string = preg_replace('/(-)+/', '-', $string);
        $string = strtolower($string);
        return $string;
}
    public static function getConTentNavbar($urlContent)
    {
        $result = [];
         try {
            $options = array(
                'http' => array(
                    'method' => "GET",
                    'header' => "Accept-language: en\r\n" .
                        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36"
                ),
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                ),
            );
            $context = stream_context_create($options);
            $content = @file_get_contents($urlContent, false, $context);
         } catch(Exception $exc) {
            return $result;
         }

        $dom = new \DOMDocument();
        @$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        $xpath = new \DOMXpath($dom);

        $nodeTitle = $xpath->query('//nav[@class="menu container bg-wrap"]/ol[@class="menu-wrap bg-wrap"]/li/a');
    
        foreach($nodeTitle as $value) {
            $data['title'] = $value->nodeValue;
            $data['url'] =  'https://dantri.com.vn'.$value->getAttribute('href');
            $data['slug'] = self::create_slug($data['title']);
            $result[] = $data;
        }

      return $result;
    }

    public static function getContentNew($urlContent) 
    {
        $result = [];
         try {
            $options = array(
                'http' => array(
                    'method' => "GET",
                    'header' => "Accept-language: en\r\n" .
                        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36"
                ),
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                ),
            );
            $context = stream_context_create($options);
            $content = @file_get_contents($urlContent, false, $context);
         } catch(Exception $exc) {
             return $result;
         }

        $dom = new \DOMDocument();
        @$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        $xpath = new \DOMXpath($dom);
        $nodeImg = $xpath->query('.//article[@class="article article-three large"]/article[@class="article-item"]');
        
        foreach($nodeImg as $value) {
            $data['title']= $xpath->query('.//div[@class="article-content"]/h3[@class="article-title"]/a',$value)->item(0)->nodeValue;
            $image = $xpath->query('.//div[@class="article-thumb"]/a/img', $value)->item(0)->getAttribute("data-srcset");
            $arrImage = explode(',', $image);
            $arr = array_pop($arrImage);
            $stringImage = explode('2x', $arr);
            $data['img'] = $stringImage[0];
            $data['desc'] = $xpath->query('.//div[@class="article-content"]/div[@class="article-excerpt"]/a', $value)->item(0)->nodeValue;  
            $link = $xpath->query('.//div[@class="article-thumb"]/a', $value)->item(0)->getAttribute('href');
           
            $data['link'] = 'https://dantri.com.vn'.$link;

            $dom2 = new \DOMDocument();
            $content2 = @file_get_contents($data['link'], false, $context);
            @$dom2->loadHTML(mb_convert_encoding($content2, 'HTML-ENTITIES', 'UTF-8'));
            $xpath2 = new \DOMXpath($dom2);
            $text = $xpath2->query('//article[@class="singular-container"]/div[@class="singular-content"]');
            
            $html = $data['desc']. $dom2->saveHTML($text->item(0));
            $data['html'] = $html;
            $result[] = $data;
        }
        return $result;
    } 

     public function saveNav()
     {
        $value = self::getConTentNavbar('https://dantri.com.vn/');
        $collection = Yii::$app->mongodb->getCollection('navbar');
           foreach($value as $item) {
            $collection->insert(['title' => $item['title'], 'url' => $item['url'], 'slug'=>$item['slug']]);
        }
     }

     public function saveNews() 
     {
        $query = new Query();
        $row = $query->from('navbar')->all();

        foreach($row as $list) {
            $value = self::getContentNew($list['url']);
            $mongoCmd = Yii::$app->mongodb->createCommand();
            foreach($value as $item) {
                $date = Yii::$app->formatter->asDate('now', 'yyyy-MM-dd');
                $mongoCmd->addUpdate(['title'=>$item['title']],
                [
                    'title' => $item['title'], 'img' => $item['img'], 'desc'=>$item['desc'],'link'=>$item['link'], 'html'=> $item['html'], 'nav_id'=> $list['_id'],'date'=>$date
                ], ['upsert' => true]
            );
            $mongoCmd->executeBatch('news');
            }
            
        }
        
     }
     public function actionRun()
     {
        // $this->saveNav();
        $this->saveNews();
       
     }
}

?>  
